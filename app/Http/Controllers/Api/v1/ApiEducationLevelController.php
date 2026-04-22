<?php

namespace App\Http\Controllers\Api\v1;

use App\Enums\EducationLevel as EducationLevelEnum;
use App\Http\Controllers\Controller;
use App\Models\EducationLevel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApiEducationLevelController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'education-levels.*' => [Rule::enum(EducationLevelEnum::class)]
        ]);

        $user = User::where('uuid', $request['user_uuid'])->firstOrFail();
        $education_levels = $validated['education-levels'];

        foreach($education_levels as $level) {
            $education_level = new EducationLevel();

            $education_level->level = $level;
            $education_level->user()->associate($user);

            $education_level->save();
        }
        return $education_levels;
    }

    /**
     * Remove the specified resources from storage.
     */
    public function destroy(Request $request)
    {
        $user = User::where('uuid', $request['user_uuid'])->firstOrFail();
        $education_levels = EducationLevel::where('user_id', $user->id)->get();

        foreach($education_levels as $level) {
            $level->delete();
        }
        return response()->noContent();
    }
}
