<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    use HasFactory;

    protected $table = "principals";

    public function teamPrincipals(){
        return $this->hasMany(TeamPrincipals::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
