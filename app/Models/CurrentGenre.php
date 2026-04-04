<?php

namespace App\Models;

use App\Enums\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CurrentGenre extends Model
{
    /**
     * Get the attributes that should be cast.
     */
    protected function casts(): array
    {
        return [
            'genre' => Genre::class,
        ];
    }

    /**
     * Get the user who currently listen to the genre
     */
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
