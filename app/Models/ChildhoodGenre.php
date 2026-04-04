<?php

namespace App\Models;

use App\Enums\Genre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChildhoodGenre extends Model
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
     * Get the user who listened to the genre during childhood
     */
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
