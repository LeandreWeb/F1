<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Race extends Model
{
    use HasFactory;

    protected $table ="races";

    public function grandPrixWeekend(){
        return $this->hasOne(GrandPrixWeekend::class);
    }
    public function raceResults(){
        return $this->hasMany(RaceResult::class);
    }
    public function raceStory(){
        return $this->belongsTo(RaceStory::class);
    }

    public function fastestLap(){
        return $this->raceResults()->where("best_lap","!=","null")->orderBy('best_lap')->first();
    }
    
}
