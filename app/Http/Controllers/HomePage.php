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
        $top3 = Driver::orderBy("points","desc")->limit(3)->get();
        $lastRace = Race::whereDate("date","<=",now())->orderBy("date","desc")->first();
        $qualification=Qualification::whereDate("date","<=",now())->orderBy("date","desc")->first();
        $sprintShootout=SprintShootout::whereDate("date","<=",now())->orderBy("date","desc")->first();
        $sprint=Sprint::whereDate("date","<=",now())->orderBy("date","desc")->first();
        $article=Article::whereDate("created_time","<=",now())->orderBy("created_time","desc")->first();


        $nextRace = Race::whereDate("date",">=",now())->orderBy("date","asc")->first();;

        

        if ($article->created_time>=$lastRace->date ){

            return view('Home.home',compact('top3','article','nextRace'));
        }

        else if($qualification->date<=$lastRace->date && $lastRace->race_story_id )
        {
            return view('Home.home',compact('top3','lastRace','nextRace'));
        }

        else if($qualification->date<=$sprint->date && $sprint->sprint_story_id)
        {
            return view('Home.home',compact('top3','sprint','nextRace'));
        }

        else if($qualification->date<=$sprintShootout->date &&  $sprintShootout->sprint_shootout_story_id)
        {
            return view('Home.home',compact('top3','sprintShootout','nextRace'));
        }
        else if($qualification->qualification_story_id){
            return view('Home.home',compact('top3','qualification','nextRace'));
        }
        else if($lastRace->race_story_id ){
            return view('Home.home',compact('top3','lastRace','nextRace'));

        }
        else{

            $lastRaceId =$lastRace->id;
            $lastRace = Race::where("id","<",$lastRaceId)->orderBy("date","desc")->first();
            return view('Home.home',compact('top3','lastRace','nextRace'));
        }





    }
}
