<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Season extends Model
{
    use HasFactory;

    protected $table = 'seasons';
    
    public function seasonTeams()
    {
        return $this->hasMany(SeasonTeam::class);
    }

    public function grandPrix(){
        return $this->hasMany(GrandPrixWeekend::class);
    }

    public function teamDrivers(){

        return $this->seasonTeams->flatMap(function ($seasonTeam) {
            return $seasonTeam->teamdrivers;
        });
    }

    public function top3Drivers(){
        $drivers=$this->teamDrivers();

        $driver1points= -1;
        $driver2points= -1;
        $driver3points= -1;

        $driver1= null;
        $driver2= null;
        $driver3= null;


        for ($i=0; $i < count($drivers); $i++) { 
            
            $driverpoint = $drivers[$i]->points();

            if ($driverpoint > $driver1points) {
                $driver3=$driver2;
                $driver3points = $driver2points;
                $driver2=$driver1;
                $driver2points = $driver1points;
                $driver1 = $drivers[$i];
                $driver1points = $drivers[$i]->points();
                
            }
            elseif($driverpoint > $driver2points){
                $driver3=$driver2;
                $driver3points = $driver2points;
                $driver2 = $drivers[$i];
                $driver2points = $drivers[$i]->points();
            }
            elseif($driverpoint > $driver3points){
                $driver3 = $drivers[$i];
                $driver3points = $drivers[$i]->points();
            }


        }


        $top3 = [$driver1, $driver2, $driver3];

        return $top3;

    }
}


// public function Drivers(){

//     return $this->select('d.*')
//     ->from('drivers as d')
//     ->leftJoin('team_drivers as td', 'td.driver_id', '=', 'd.id')
//     ->leftJoin('season_teams as st', 'td.season_team_id', '=', 'st.id')
//     ->leftJoin('seasons as s', 'st.season_id', '=', 's.id')
//     ->where('s.id', '=', $this->id)
//     ->get();
// }

// public function Drivers2(){

//     return $this->hasManyThrough(
//         Driver::class,
//         TeamDriver::class,
//         'season_id', // Foreign key on season_teams table
//         'id', // Local key on seasons table
//         'id', // Local key on team_drivers table
//         'driver_id' // Foreign key on drivers table
//     )
//     ->leftJoin('team_drivers as td', 'td.driver_id', '=', 'drivers.id')
//     ->leftJoin('season_teams as st', 'td.season_team_id', '=', 'st.id')
//     ->leftJoin('seasons as s', 'st.season_id', '=', 's.id')
//     ->where('s.id', '=', $this->id);
// }

// select d.* FROM drivers as d
// left JOIN team_drivers as td on td.driver_id = d.id 
// LEFT JOIN season_teams as st on td.season_team_id =st.id
// LEFT JOIN seasons as s on st.season_id = s.id
// WHERE s.id = 2023