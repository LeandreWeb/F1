<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;



    public function raceResult()
    {
        return $this->hasMany(RaceResult::class);
    }
    public function qualiResult()
    {
        return $this->hasMany(QualificationResult::class);
    }
    public function sprintResult(){
        return $this->hasMany(SprintResult::class);
    }
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
