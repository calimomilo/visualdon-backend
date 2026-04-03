<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CurrentGenre extends Model
{
    /**
     * Get the users who currently listen to the genre
     */
    public function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
