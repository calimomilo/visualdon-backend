<?php

namespace App\Http\Controllers\Api\v1;

use App\Enums\EducationLevel;
use App\Http\Controllers\Controller;
use App\Models\EducationLevel as ModelsEducationLevel;
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
            'levels.*' => ['required', Rule::enum(EducationLevel::class)]
        ]);

        $user = User::where('uuid', $request['user_uuid'])->firstOrFail();
        $education_levels = $validated['levels'];

        foreach($education_levels as $level) {
            $education_level = new ModelsEducationLevel();

            $education_level->level = $level;
            $education_level->user()->associate($user);

            $education_level->save();
        }
        return $education_levels;
    }
}
