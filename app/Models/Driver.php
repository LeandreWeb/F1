<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $table = 'drivers';



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
    public function Country(){
        return $this->belongsTo(Country::class);
    }
    public function teamDriver(){
        return $this->hasMany(TeamDriver::class);
    }
    public function currentTeam(){
        
    }
    
    

}
