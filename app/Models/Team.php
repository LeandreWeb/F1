<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    // protected $table = "tables";

    // protected $primaryKey = "_id"

    public function teamChief(){
        return $this->hasOne(TeamChief::class);
    }
    public function drivers(){
        return $this->hasMany(Driver::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function socials(){
        return $this->belongsTo(Socials::class);
    }
    public function factory(){
        return $this->belongsTo(Factory::class);
    }
    public function points(){
        return $this->hasMany(Driver::class);
    }
    public function car(){
        return $this->hasOne(Car::class);
    }
    public function cars(){
        return $this->hasMany(Car::class);
    }
}
