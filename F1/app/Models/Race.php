<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    public function grandPrix(){
        return $this->hasMany(GrandsPrix::class);
    }
    public function raceResult(){
        return $this->hasMany(RaceResult::class);
    }
}
