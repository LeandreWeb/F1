<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Team;
use Illuminate\Http\Request;

class StandingController extends Controller
{
    public function menu()
    {
        $drivers =  Driver::orderBy('points', 'desc')->get();
        $teamsFinder =  Team::all();



        $sortedTeams = $teamsFinder->sortByDesc(function ($team) {
            $points = 0;

            foreach ($team->drivers as $driver) {
                $points += $driver->points;
            }

            return $points;
        });

        $teams = $sortedTeams;

        foreach ($teams as $team) {
            $points = 0;

            foreach ($team->drivers as $driver) {
                $points += $driver->points;
            }

            $team->{'points'} = $points;
        }








        return view("Standing.standing", compact('drivers', 'teams'));
    }
}
