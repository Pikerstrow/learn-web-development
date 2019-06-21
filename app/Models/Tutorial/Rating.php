<?php

namespace App\Models\Tutorial;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use SoftDeletes;

    public function tutorial()
    {
        return $this->belongsTo(Tutorial::class);
    }
}
