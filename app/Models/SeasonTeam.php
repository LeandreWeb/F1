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

    public function teamPrincipals(){
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

    public function activeTeamPrincipal(){
        return Principal::join('team_principals',"team_principals.principal_id", "=" ,'principals.id')
        ->where('team_principals.status' , "active")
        ->where('team_principals.season_team_id',$this->id)
        ->first();
    }

    public function points(){
        $drivers= $this->teamDrivers;

        $points= 0;

        foreach ($drivers as $driver){
            $points += $driver->points();

        }

        

        return $points;
    }
}
