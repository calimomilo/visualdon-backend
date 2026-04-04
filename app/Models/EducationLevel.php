<?php

namespace App\Models;

use App\Enums\EducationLevel as EnumsEducationLevel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EducationLevel extends Model
{
    /**
     * Get the attributes that should be cast.
     */
    protected function casts(): array
    {
        return [
            'level' => EnumsEducationLevel::class,
        ];
    }

    /**
     * Get the user with the education level
     */
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
