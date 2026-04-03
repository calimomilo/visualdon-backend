<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Composer extends Model
{
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
