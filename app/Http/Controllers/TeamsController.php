<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamChief;
use Illuminate\Http\Request;
use App\Models\Season;


class TeamsController extends Controller
{
    public function menu()
    {
        $year = date('Y');

        $seasonTeamsYear = Season::with('seasonTeams.teamDrivers')->find($year);

        do {
            $seasonTeamsYear = Season::with('seasonTeams.teamDrivers')->find($year);
            if (is_null($seasonTeamsYear)) {
                $year = $year - 1;
            }
        } while (is_null($seasonTeamsYear));

        $seasonTeams = $seasonTeamsYear->seasonTeams;

        return view("Teams.teams", compact('seasonTeams'));
    }
}
