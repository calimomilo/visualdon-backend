<?php

namespace App\Http\Controllers\Api\v1;

use App\Enums\Genre;
use App\Http\Controllers\Controller;
use App\Models\ChildhoodGenre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApiChildhoodGenreController extends Controller
{
    /**
     * Store newly created resources in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'genres.*' => [Rule::enum(Genre::class)],
        ]);

        $user = User::where('uuid', $request['user_uuid'])->firstOrFail();
        $childhood_genres = $validated['genres'];

        foreach($childhood_genres as $genre) {
            $childhood_genre = new ChildhoodGenre();

            $childhood_genre->genre = $genre;
            $childhood_genre->user()->associate($user);

            $childhood_genre->save();
        }
        return $childhood_genres;
    }

    /**
     * Remove the specified resources from storage.
     */
    public function destroy(Request $request)
    {
        $user = User::where('uuid', $request['user_uuid'])->firstOrFail();
        $childhood_genres = ChildhoodGenre::where('user_id', $user->id)->get();

        foreach($childhood_genres as $genre) {
            $genre->delete();
        }
        return response()->noContent();
    }
}
