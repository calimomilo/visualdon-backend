<?php

namespace App\Http\Controllers\Api\v1;

use App\Enums\Genre;
use App\Http\Controllers\Controller;
use App\Models\CurrentGenre;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApiCurrentGenreController extends Controller
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
        $current_genres = $validated['genres'];

        foreach($current_genres as $genre) {
        $current_genre = new CurrentGenre();

        $current_genre->genre = $genre;
        $current_genre->user()->associate($user);

        $current_genre->save();
        }
        return $current_genres;
    }
}
