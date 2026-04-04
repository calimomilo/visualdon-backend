<?php

namespace App\Models;

use App\Enums\Result;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BlindTestResult extends Pivot
{
    /**
     * Get the attributes that should be cast.
     */
    protected function casts(): array
    {
        return [
            'result' => Result::class,
        ];
    }
}
