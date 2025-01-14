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

        $year = date('Y');
        $seasons = Season::orderBy("id", "desc")->get();


        $seasonSelect = Season::latest()->where("id", request()->query("year_id"))->get();

        if (count($seasonSelect)) {
            $season = $seasonSelect[0];
        } else {


            do {
                $season = Season::with('seasonTeams.teamDrivers')->find($year);
                if (is_null($season)) {
                    $year = $year - 1;
                }
            } while (is_null($season));
        }

        $teams = $season->rankedTeams();

        $drivers = $season->rankedDrivers();

        return view("Standing.standing", compact('drivers', 'teams', 'seasons'));
    }
}
