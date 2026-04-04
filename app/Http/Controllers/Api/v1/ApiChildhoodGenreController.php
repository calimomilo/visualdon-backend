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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'genres.*' => ['required', Rule::enum(Genre::class)]
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
}
