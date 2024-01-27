<?php

namespace App\Http\Controllers;

use App\Models\SeasonTeam;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team ($teamName){
        
        $year = date('Y')  ;

        $seasonTeam=SeasonTeam::
        join('teams',"season_teams.team_id" , '=', 'teams.id')
        ->join('team_principals', "season_teams.id" ,'=','team_principals.season_team_id')
        ->where ('teams.Name',$teamName)
        ->where('season_teams.season_id',$year)->first();

        
        

        

        return view("Team.TeamPage",compact('seasonTeam'));
    }
}
