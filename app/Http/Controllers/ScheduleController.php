<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Race;
use  App\Models\GrandPrixWeekend;
use App\Models\Season;
use DateTime;




class ScheduleController extends Controller
{
    public function menu()
    {

        $year = date('Y');
        $seasons = Season::orderBy("id", "desc")->get();
        $seasonSelect = Season::latest()->where("id", request()->query("year_id"))->get();
        $nextRace = Race::whereDate("date", ">=", now())->orderBy("date", "asc")->first();
        $currentGp = GrandPrixWeekend::where("status", "current")->first();



        if (count($seasonSelect)) {

            $season = $seasonSelect[0];
        } else {
            $season = Season::with('seasonTeams.teamDrivers')->find($year);

            do {
                $season = Season::with('seasonTeams.teamDrivers')->find($year);
                if (is_null($season)) {
                    $year = $year - 1;
                }
            } while (is_null($season));
        }

        if ($nextRace) {
            $interval =  now()->diff($nextRace->date);
            $dateDiff = $interval->format('%d') + ($interval->format('%m') * 30);
        } else {
            $dateDiff = 4;
        }

        $this->SetRacesToDone($year);

        if ($dateDiff <= 3 && $nextRace->grandPrixWeekend->status != "current" && $nextRace != null) {
            $nextRace->grandPrixWeekend->status = "current";
            $nextRace->grandPrixWeekend->save();

            if ($currentGp) {
                $currentGp->status = "done";
                $currentGp->save();
                $currentGp = $nextRace->grandPrixWeekend;
            }

            //$driver->save();
        }
        if (!$currentGp) {

            $currentGp = Race::whereDate("date", "<=", now())->orderBy("date", "desc")->first()->grandPrixWeekend;
            $currentGpDatediff = (int)now()->diff($currentGp->date)->format('%d');


            if ($currentGp && $currentGpDatediff >= 3) {
                $currentGp->status = "current";
                $currentGp->save();
            }
        }

        $GrandPrixWeekends = $season->grandPrix;

        return view("Schedule.schedule", compact('GrandPrixWeekends', 'seasons'));
    }

    public function SetRacesToDone($year)
    {
        $RacesDones = Race::whereDate("date", "<=", now())->orderBy("date", "asc")->get();

        foreach ($RacesDones as $race) {
            $dateDiff =  (int)now()->diff($race->date)->format('%d');
            $monthDiff =  (int)now()->diff($race->date)->format('%m');
            $yearDiff =  (int)now()->diff($race->date)->format('%y');

            $raceDate = new DateTime($race->date);
            $raceYear = $raceDate->format('Y');

            if (($year > $raceYear || $dateDiff > 2) && ($race->grandPrixWeekend->status != "done" && $race->grandPrixWeekend->status != "cancelled")) {
                $race->grandPrixWeekend->status = "done";
                $race->grandPrixWeekend->save();
            } else if ($dateDiff <= 2 && $monthDiff == 0 && $yearDiff == 0) {
                $race->grandPrixWeekend->status = "current";
                $race->grandPrixWeekend->save();
            }
        }
    }
}
