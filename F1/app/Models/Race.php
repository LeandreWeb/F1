<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Race extends Model
{
    use HasFactory;

    public function grandPrixWeekend(){
        return $this->hasOne(GrandPrixWeekend::class);
    }
    public function raceResult(){
        return $this->hasMany(RaceResult::class);
    }
    public function raceStory(){
        return $this->belongsTo(RaceStory::class);
    }
    public function country(){    
        return $this->belongsTo(Country::class);
    }
}
