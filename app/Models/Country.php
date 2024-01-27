<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table ="countries";
    
    public function grandPrix(){
        return $this->hasMany(GrandPrixWeekend::class);
    }
    public function drivers(){
        return $this->hasMany(Driver::class);
    }
    public function teams(){
        return $this->hasMany(Team::class);
    }
    public function principals(){
        return $this->hasMany(Principal::class);
    }
    
    // protected $primaryKey = "_id";
}
