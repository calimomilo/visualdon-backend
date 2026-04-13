<?php

namespace App\Http\Controllers\Api\v1;

use App\Enums\EducationLevel as EducationLevelEnum;
use App\Enums\Genre;
use App\Enums\Result;
use App\Http\Controllers\Controller;
use App\Models\BlindTestResult;
use App\Models\Composer;
use App\Models\KnownComposer;
use App\Models\KnownComposerTitle;
use App\Models\Title;
use App\Models\User;
use Illuminate\Http\Request;

class ApiStatsController extends Controller
{
    /**
     * Return the stats of the title.
     */
    public function title_stats(string $id)
    {
        $title = Title::with('composer')->findOrFail($id);
        
        $title_stats = [
            'title' => $title,
        ];

        foreach(Result::cases() as $result) {
            $count = BlindTestResult::where('title_id', $title->id)->where('result', $result)->count();
            $title_stats[$result->value] = $count;
        }

        return $title_stats;
    }

    /**
     * Return the stats of the composer.
     */
    public function composer_stats(string $id)
    {
        $composer = Composer::findOrFail($id);
        
        $composer_stats = [
            'composer' => $composer,
        ];

        // composer known
        $composer_stats['composer_known'] = [
            'total' => KnownComposer::where('composer_id', $composer->id)->count(),
        ];

        foreach(Genre::cases() as $genre) {
            $childhood_count = KnownComposer::where('composer_id', $composer->id)
                ->join('childhood_genres', 'known_composers.user_id', '=', 'childhood_genres.user_id')
                ->where('genre', $genre)
                ->count();
            $composer_stats['composer_known']['by_childhood_genre'][$genre->value] = $childhood_count;

            $current_count = KnownComposer::where('composer_id', $composer->id)
                ->join('current_genres', 'known_composers.user_id', '=', 'current_genres.user_id')
                ->where('genre', $genre)
                ->count();
            $composer_stats['composer_known']['by_current_genre'][$genre->value] = $current_count;
        }
        
        // composer title known
        $composer_stats['composer_title_known'] = [
            'total' => KnownComposerTitle::where('composer_id', $composer->id)->count(),
        ];

        foreach(Genre::cases() as $genre) {
            $childhood_count = KnownComposerTitle::where('composer_id', $composer->id)
                ->join('childhood_genres', 'known_composer_titles.user_id', '=', 'childhood_genres.user_id')
                ->where('genre', $genre)
                ->count();
            $composer_stats['composer_title_known']['by_childhood_genre'][$genre->value] = $childhood_count;

            $current_count = KnownComposerTitle::where('composer_id', $composer->id)
                ->join('current_genres', 'known_composer_titles.user_id', '=', 'current_genres.user_id')
                ->where('genre', $genre)
                ->count();
            $composer_stats['composer_title_known']['by_current_genre'][$genre->value] = $current_count;
        }

        // blind test known
        $composer_stats['blind_test_known'] = [
            'total' => BlindTestResult::join('titles', 'blind_test_results.title_id', '=', 'titles.id')
            ->where('composer_id', $composer->id)
            ->where('result', '!=', Result::UNKNOWN)
            ->count(),
        ];

        foreach(Genre::cases() as $genre) {
            $childhood_count = BlindTestResult::join('titles', 'blind_test_results.title_id', '=', 'titles.id')
                ->where('composer_id', $composer->id)
                ->where('result', '!=', Result::UNKNOWN)
                ->join('childhood_genres', 'blind_test_results.user_id', '=', 'childhood_genres.user_id')
                ->where('genre', $genre)
                ->count();
            $composer_stats['blind_test_known']['by_childhood_genre'][$genre->value] = $childhood_count;

            $current_count = BlindTestResult::join('titles', 'blind_test_results.title_id', '=', 'titles.id')
                ->where('composer_id', $composer->id)
                ->where('result', '!=', Result::UNKNOWN)
                ->join('current_genres', 'blind_test_results.user_id', '=', 'current_genres.user_id')
                ->where('genre', $genre)
                ->count();
            $composer_stats['blind_test_known']['by_current_genre'][$genre->value] = $current_count;
        }

        return $composer_stats;
    }

    /**
     * Return the stats of the blind test.
     */
    public function blindtest_stats()
    {
        $bt_stats = [];

        foreach(Result::cases() as $result) {
            $count = BlindTestResult::where('result', $result)->count();
            $bt_stats['total'][$result->value] = $count;
        }

        foreach(EducationLevelEnum::cases() as $level) {
            foreach(Result::cases() as $result) {
                $count = BlindTestResult::where('result', $result)
                    ->join('education_levels', 'blind_test_results.user_id', '=', 'education_levels.user_id')
                    ->where('level', $level)
                    ->count();
                $bt_stats['by_education_level'][$level->value][$result->value] = $count;
            }
        }

        foreach(Genre::cases() as $genre) {
            foreach(Result::cases() as $result) {
                $count = BlindTestResult::where('result', $result)
                    ->join('childhood_genres', 'blind_test_results.user_id', '=', 'childhood_genres.user_id')
                    ->where('genre', $genre)
                    ->count();
                $bt_stats['by_childhood_genre'][$genre->value][$result->value] = $count;
            }

            foreach(Result::cases() as $result) {
                $count = BlindTestResult::where('result', $result)
                    ->join('current_genres', 'blind_test_results.user_id', '=', 'current_genres.user_id')
                    ->where('genre', $genre)
                    ->count();
                $bt_stats['by_current_genre'][$genre->value][$result->value] = $count;
            }
        }

        return $bt_stats;
    }
}
