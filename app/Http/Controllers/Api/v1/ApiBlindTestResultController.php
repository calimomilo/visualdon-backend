<?php

namespace App\Http\Controllers\Api\v1;

use App\Enums\Result;
use App\Http\Controllers\Controller;
use App\Models\Title;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApiBlindTestResultController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'result' => [Rule::enum(Result::class)]
        ]);

        $user = User::where('uuid', $request['user_uuid'])->firstOrFail();
        $title = Title::where('id', str($request['title_id']))->firstOrFail();
        
        $result = $validated['result'];
        $user->listenedTitles()->attach($title->id, ['result' => $result]);

        return $user->listenedTitles()->wherePivot('title_id', $title->id);
    }

    /**
     * Remove the specified resources from storage.
     */
    public function destroy(Request $request)
    {
        $user = User::where('uuid', $request['user_uuid'])->firstOrFail();
        $title = Title::where('id', str($request['title_id']))->firstOrFail();

        $user->listenedTitles()->detach($title->id);
        return response()->noContent();
    }
}
