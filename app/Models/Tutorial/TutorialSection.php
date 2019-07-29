<?php

namespace App\Models\Tutorial;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TutorialSection extends Model
{
    use SoftDeletes;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function tutorial()
    {
        return $this->belongsTo(Tutorial::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
