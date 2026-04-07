<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\KnownComposerTitle;
use App\Models\User;
use Illuminate\Http\Request;

class ApiKnownComposerTitleController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'composers.*' => ['exists:composers,id']
        ]);

        $user = User::where('uuid', $request['user_uuid'])->firstOrFail();
        
        $known_composer_titles = $validated['composers'];
        $user->knownComposerTitles()->attach($known_composer_titles);

        return $known_composer_titles;
    }

    /**
     * Remove the specified resources from storage.
     */
    public function destroy(Request $request)
    {
        $user = User::where('uuid', $request['user_uuid'])->firstOrFail();
        $known_composer_titles = KnownComposerTitle::where('user_id', $user->id)->pluck('composer_id');

        $user->knownComposerTitles()->detach($known_composer_titles);
        return response()->noContent();
    }
}
