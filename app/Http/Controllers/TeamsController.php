<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamChief;
use Illuminate\Http\Request;
use App\Models\Season;


class TeamsController extends Controller
{
    public function menu (){
        //TODO enlever lee -1 
        $year = date('Y') -1 ;

        $seasonTeams = Season::with('seasonTeams.teamDrivers')->find($year)->seasonTeams;

        return view("Teams.teams",compact('seasonTeams'));
    }
}
