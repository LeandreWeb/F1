<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use  App\Models\Country;
use  App\Models\Driver;
use  App\Models\Race;
use  App\Models\GrandPrixWeekend;
use App\Models\Qualification;
use  App\Models\QualificationResult;
use App\Models\RaceResult;
use App\Models\RaceStory;
use App\Models\Season;
use App\Models\Sprint;
use App\Models\SprintShootout;
use App\Models\TeamDriver;
use DateTime;

class HomePage extends Controller
{
    public function home()
    {
        $year = date('Y');

        $season = Season::with('seasonTeams.teamDrivers')->find($year);


        $teamDriver = TeamDriver::where("driver_id", 1)->first();



        $top5 = $season->top5Drivers();
        $article = Article::whereDate("created_time", "<=", now())->orderBy("created_time", "desc")->first();
        $nextRace = Race::whereDate("date", ">=", now())->orderBy("date", "asc")->first();


        if ($nextRace) {
            $interval =  now()->diff($nextRace->date);
            $dateDiff = $interval->format('%d') + ($interval->format('%m') * 30);
        } else {
            $dateDiff = 4;
        }


        $this->SetRacesToDone($year);

        $currentGp = GrandPrixWeekend::where("status", "current")->first();

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

        if ($currentGp) {
            if ($currentGp->race->date <= now()) {
                $lastGp = $currentGp;

                if (!$lastGp->qualification->qualification_story_id) {

                    $lastGp = Qualification::whereNotNull("qualification_story_id")->orderBy("id", "desc")->first()->grandPrixWeekend;
                }
            } else {
                $lastGp = Qualification::whereNotNull("qualification_story_id")->orderBy("id", "desc")->first()->grandPrixWeekend;
            }
        }



        if ($lastGp->status == "cancelled") {
            return view('Home.home', compact('top5', 'article', 'nextRace'));
        } else if ($lastGp->race->race_story_id) {
            $race = $lastGp->race;
            return view('Home.home', compact('top5', 'race', 'nextRace'));
        } else if ($lastGp->sprint->sprint_story_id ?? null) {
            $sprint = $lastGp->sprint;
            return view('Home.home', compact('top5', 'sprint', 'nextRace'));
        } else if ($lastGp->sprintShootout->sprint_shootout_story_id ?? null) {
            $sprintShootout = $lastGp->sprintShootout;
            return view('Home.home', compact('top5', 'sprintShootout', 'nextRace'));
        } else if ($lastGp->qualification->qualification_story_id) {
            $qualification = $lastGp->qualification;
            return view('Home.home', compact('top5', 'qualification', 'nextRace'));
        }
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
