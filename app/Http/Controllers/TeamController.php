<?php

namespace App\Http\Controllers;

use App\Models\SeasonTeam;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team ($teamName){
        
        $year = date('Y') ;

        $seasonTeam=SeasonTeam::with("team")
        ->where('season_id', $year)
        ->whereHas('team', function($query) use ($teamName){
            $query->where('Name',$teamName);
        })->first();

        

        return view("Team.TeamPage",compact('seasonTeam'));
    }
}
