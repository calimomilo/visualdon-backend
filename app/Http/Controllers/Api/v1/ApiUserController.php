<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->with('childhoodGenres')->with('currentGenres')->with('educationLevels')->with('knownComposers')->with('knownComposerTitles')->with('listenedTitles')->get();

        return $users;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->uuid = Str::uuid()->toString();
        $user->save();

        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with('childhoodGenres')->with('currentGenres')->with('educationLevels')->with('knownComposers')->with('knownComposerTitles')->with('listenedTitles')->findOrFail($id);

        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->noContent();
    }
}
