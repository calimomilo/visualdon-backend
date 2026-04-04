<?php

namespace App\Models;

use App\Enums\Epoch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Composer extends Model
{
    /**
     * Get the attributes that should be cast.
     */
    protected function casts(): array
    {
        return [
            'epoch' => Epoch::class,
        ];
    }
    
    /**
     * Get the titles for the composer
     */
    public function titles(): HasMany {
        return $this->hasMany(Title::class);
    }

    /**
     * Get the users who know the composer by name
     */
    public function knownComposerUsers(): BelongsToMany {
        return $this->belongsToMany(User::class, 'known_composers')->using(KnownComposer::class)->withTimestamps();
    }
    
    /**
     * Get the users who could name a title by the composer
     */
    public function knownComposerTitleUsers(): BelongsToMany {
        return $this->belongsToMany(User::class, 'known_composers')->using(KnownComposer::class)->withTimestamps();
    }
}
