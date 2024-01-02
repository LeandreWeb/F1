<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceStory extends Model
{
    use HasFactory;

    protected $table ="race_stories";

    public function race(){
        return $this->hasOne(Race::class);
    }
}
