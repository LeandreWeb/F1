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
use App\Models\Sprint;
use App\Models\SprintShootout;

class HomePage extends Controller
{
    public function home()
    {
        $top3 = Driver::orderBy("points", "desc")->limit(3)->get();
        $article = Article::whereDate("created_time", "<=", now())->orderBy("created_time", "desc")->first();
        $nextRace = Race::whereDate("date", ">=", now())->orderBy("date", "asc")->first();
        $currentGp = GrandPrixWeekend::where("status","current")->first();

        $dateDiff =  (int)now()->diff($nextRace->date)->format('%d');

        $this->SetRacesToDone();

        // $allRaces = GrandPrixWeekend::get();

        // dd($allRaces);

        if($dateDiff<=3 && $nextRace->grandPrixWeekend->status != "current"){

            $nextRace->grandPrixWeekend->status= "current";
            $nextRace->grandPrixWeekend->save();
            
            if($currentGp)
            {
                $currentGp->status="done";
                $currentGp->save();
                $currentGp = $nextRace->grandPrixWeekend;
            }

            //$driver->save();
        }
        if(!$currentGp){
            $currentGp= Race::whereDate("date", "<=", now())->orderBy("date", "desc")->first()->grandPrixWeekend;
            $currentGp->status="current";
            $currentGp->save();
        }

        if($currentGp)
        {
            if ($currentGp->race->date <= now()) {
                $lastGp=$currentGp;
    
                if(!$lastGp->qualification->qualification_story_id){
    
                $lastGp=Qualification::whereNotNull("qualification_story_id")->orderBy("id","desc")->first()->grandPrixWeekend;
                }
            }
            else{
                $lastGp=Qualification::whereNotNull("qualification_story_id")->orderBy("id","desc")->first()->grandPrixWeekend;
            }

        }

 
        
        if ($lastGp->status == "cancelled") {
            return view('Home.home', compact('top3', 'article', 'nextRace'));
        } else if ($lastGp->race->race_story_id) {
            $race = $lastGp->race;
            return view('Home.home', compact('top3', 'race', 'nextRace'));
        } else if ($lastGp->sprint->sprint_story_id ?? null) {
            $sprint=$lastGp->sprint;
            return view('Home.home', compact('top3', 'sprint', 'nextRace'));
        } else if ($lastGp->sprintShootout->sprint_shootout_story_id ?? null) {
            $sprintShootout=$lastGp->sprintShootout;
            return view('Home.home', compact('top3', 'sprintShootout', 'nextRace'));
        } else if ($lastGp->qualification->qualification_story_id) {
            $qualification = $lastGp->qualification;
            return view('Home.home', compact('top3', 'qualification', 'nextRace'));
        }
    }

    public function SetRacesToDone(){

        $RacesDones = Race::whereDate("date", "<=", now())->orderBy("date", "asc")->get();

        foreach ($RacesDones as $race) {
            $dateDiff =  (int)now()->diff($race->date)->format('%d');


            if ($dateDiff >= 3 && $race->grandPrixWeekend->status != "done") {

                $race->grandPrixWeekend->status = "done";
                $race->grandPrixWeekend->save();
            }
        }
   }
}
