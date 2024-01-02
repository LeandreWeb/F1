<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = "teams";

    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function socials(){
        return $this->belongsTo(Socials::class);
    }
    public function factory(){
        return $this->belongsTo(Factory::class);
    }
    public function seasonTeams(){
        return $this->hasMany(SeasonTeam::class);
    }
}
