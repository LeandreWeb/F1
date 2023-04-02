<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function Grand_Prix(){
        return $this->belongsTo(GrandsPrix::class);
    }
    public function Drivers(){
        return $this->belongsTo(Driver::class);
    }
    public function Teams(){
        return $this->belongsTo(Team::class);
    }
    // protected $table ="countries";
    // protected $primaryKey = "_id";
}
