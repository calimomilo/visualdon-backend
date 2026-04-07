<?php

namespace App\Models;

use App\Enums\Result;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\Pivot;

#[Table('blind_test_results')]
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
