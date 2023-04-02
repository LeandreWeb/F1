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
        return $this->hasMany(TeamChief::class);
    }
    public function driver(){
        return $this->hasMany(Driver::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
