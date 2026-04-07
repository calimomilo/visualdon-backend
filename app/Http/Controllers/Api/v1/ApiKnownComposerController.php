<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\KnownComposer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApiKnownComposerController extends Controller
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
        
        $known_composers = $validated['composers'];
        $user->knownComposers()->attach($known_composers);

        return $known_composers;
    }

    /**
     * Remove the specified resources from storage.
     */
    public function destroy(Request $request)
    {
        $user = User::where('uuid', $request['user_uuid'])->firstOrFail();
        $known_composers = KnownComposer::where('user_id', $user->id)->pluck('composer_id');

        $user->knownComposers()->detach($known_composers);
        return response()->noContent();
    }
}
