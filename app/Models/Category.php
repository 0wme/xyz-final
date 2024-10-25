<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
     * Get the tracks for the category.
     */
    public function tracks(): HasMany
    {
        return $this->hasMany(Track::class);
    }
}