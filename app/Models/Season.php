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