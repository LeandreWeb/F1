<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Country;
use  App\Models\Driver;
use  App\Models\Race;
use  App\Models\GrandPrixWeekend;
use App\Models\Qualification;
use  App\Models\QualificationResult;
use App\Models\RaceResult;
use App\Models\RaceStory;


class HomePage extends Controller
{
    public function home()
    {
        $top3 = Driver::orderBy("points","desc")->limit(3)->get();
        $lastRace = Race::whereDate("date","<=",now())->orderBy("date","desc")->first();
        $qualification=Qualification::whereDate("date","<=",now())->orderBy("date","desc")->first();

        $nextRace = Race::whereDate("date",">=",now())->orderBy("date","asc")->first();;

        if($qualification->id>$lastRace->id)
        {
            return view('Home.home',compact('top3','qualification','nextRace'));
        }
        else{

            return view('Home.home',compact('top3','lastRace','nextRace'));
        }


    }
}
