<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SprintShootout extends Model
{
    use HasFactory;


    public function grandPrixWeekend(){
        return $this->hasOne(GrandPrixWeekend::class);
    }
    public function sprintShootoutResult(){
        return $this->hasMany(SprintShootoutResult::class);
    }

    public function sprintShootoutStory(){
        return $this->belongsTo(SprintShootoutStory::class);
    }


    public function q1out(){
        return $this->hasMany(SprintShootoutResult::class)->orderBy("position","desc")->take(5);
    }
    public function q2out(){
        return $this->hasMany(SprintShootoutResult::class)->orderBy("position","desc")->skip(5)->take(5);
    }
    public function q3results(){
        return $this->hasMany(SprintShootoutResult::class)->orderBy("position","desc")->skip(10)->take(10);
    }
    public function winner(){
        return $this->hasMany(SprintShootoutResult::class)->orderBy("position","asc")->take(1);
    }
}
