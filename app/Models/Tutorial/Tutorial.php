<?php

namespace App\Models\Tutorial;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tutorial extends Model
{
    use SoftDeletes;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function rating()
    {
        return $this->hasOne(Rating::class);
    }

    public function sections()
    {
        return $this->hasMany(TutorialSection::class);
    }

    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, TutorialSection::class);
    }
}
