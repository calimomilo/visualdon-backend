<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EducationLevel extends Model
{
    /**
     * Get the users with the education level
     */
    public function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
