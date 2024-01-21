<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Season;


class StandingController extends Controller
{
    public function menu()
    {

        $year = date('Y') ;

        $season = Season::with('seasonTeams.teamDrivers')->find($year)->first();

        $teams = $season->rankedTeams();

        $drivers = $season->rankedDrivers();

        return view("Standing.standing", compact('drivers', 'teams'));
    }
}
