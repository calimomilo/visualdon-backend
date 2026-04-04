<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    // use HasUuids;

    /**
     * Get the genres listened to by the user during childhood
     */
    public function childhoodGenres(): HasMany {
        return $this->hasMany(ChildhoodGenre::class);
    }
    
    /**
     * Get the genres currently listened to by the user
     */
    public function currentGenres(): HasMany {
        return $this->hasMany(CurrentGenre::class);
    }
    
    /**
     * Get the education levels of the user
     */
    public function educationLevels(): HasMany {
        return $this->hasMany(EducationLevel::class);
    }
    
    /**
     * Get the composers recognised by name by the user
     */
    public function knownComposers(): BelongsToMany {
        return $this->belongsToMany(Composer::class, 'known_composers')->using(KnownComposer::class)->withTimestamps();
    }
    
    /**
     * Get the composers with a title the user could name
     */
    public function knownComposerTitles(): BelongsToMany {
        return $this->belongsToMany(Composer::class, 'known_composer_titles')->using(KnownComposerTitle::class)->withTimestamps();
    }

    /**
     * Get titles listened to in the blind test by the user
     */
    public function listenedTitles(): BelongsToMany {
        return $this->belongsToMany(Title::class, 'blind_test_results')->using(BlindTestResult::class)->withTimestamps()->withPivot('result');
    }
}
