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
     * Get the users who listened to the genre during childhood
     */
    public function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
