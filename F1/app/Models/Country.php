<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function Grand_Prix(){
        return $this->hasMany(GrandsPrix::class);
    }
    public function Drivers(){
        return $this->hasMany(Driver::class);
    }
    public function Teams(){
        return $this->hasMany(Team::class);
    }
    // protected $table ="countries";
    // protected $primaryKey = "_id";
}
