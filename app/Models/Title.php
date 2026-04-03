<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Title extends Model
{
    /**
     * Get the composer of the title
     */
    public function composer(): BelongsTo {
        return $this->belongsTo(Composer::class);
    }
}
