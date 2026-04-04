<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Composer;
use App\Models\Title;
use Illuminate\Http\Request;

class ApiTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titles = Title::orderBy('composer_id', 'desc')->with('composer')->get();

        return $titles;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'release_year' => 'required|date',
            'spotify_uri' => 'required|string',
            'description' => 'nullable|string'
        ]);

        $composer = Composer::findOrFail($request['composer_id']);
        $title = new Title();

        $title->name = $validated['name'];
        $title->release_year = $validated['release_year'];
        $title->spotify_uri = $validated['spotify_uri'];
        $title->description = $validated['description'];
        $title->composer()->associate($composer);

        $title->save();
        return $title;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = Title::with('composer')->findOrFail($id);

        return $title;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'release_year' => 'required|date',
            'spotify_uri' => 'required|string',
            'description' => 'nullable|string'
        ]);

        $composer = Composer::findOrFail($request['composer_id']);
        $title = Title::findOrFail($id);

        $title->name = $validated['name'];
        $title->release_year = $validated['release_year'];
        $title->spotify_uri = $validated['spotify_uri'];
        $title->description = $validated['description'];
        $title->composer()->associate($composer);

        $title->save();
        return $title;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $title = Title::findOrFail($id);

        $title->delete();
        return response()->noContent();
    }
}
