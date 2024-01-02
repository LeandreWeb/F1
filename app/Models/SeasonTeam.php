<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeasonTeam extends Model
{
    use HasFactory;
    
    protected $table = 'season_teams';

    public function teamDrivers(){
        return $this->hasMany(TeamDriver::class);
    }

    public function teamPrincipal(){
        return $this->hasMany(TeamPrincipals::class);
    }

    public function team(){
        return $this->belongsTo(Team::class);
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function season(){
        return $this->belongsTo(Season::class);
    }
}
