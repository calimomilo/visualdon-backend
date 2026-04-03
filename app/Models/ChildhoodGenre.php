<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChildhoodGenre extends Model
{
    /**
     * Get the users who listened to the genre during childhood
     */
    public function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
