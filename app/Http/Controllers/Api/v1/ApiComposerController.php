<?php

namespace App\Http\Controllers\Api\v1;

use App\Enums\Period;
use App\Http\Controllers\Controller;
use App\Models\Composer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApiComposerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $composers = Composer::orderBy('name', 'desc')->with('titles')->get();

        return $composers;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'period' => ['required', Rule::enum(Period::class)],
            'portrait_url' => 'nullable|url'
        ]);

        $composer = new Composer();

        $composer->name = $validated['name'];
        $composer->period = $validated['period'];
        $composer->portrait_url = $validated['portrait_url'];

        $composer->save();
        return $composer;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $composer = Composer::with('titles')->findOrFail($id);

        return $composer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'period' => ['required', Rule::enum(Period::class)],
            'portrait_url' => 'nullable|url'
        ]);

        $composer = Composer::findOrFail($id);

        $composer->name = $validated['name'];
        $composer->period = $validated['period'];
        $composer->portrait_url = $validated['portrait_url'];

        $composer->save();
        return $composer;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $composer = Composer::findOrFail($id);

        $composer->delete();
        return response()->noContent();
    }
}
