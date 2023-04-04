<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Country;
use  App\Models\Driver;
use  App\Models\Race;
use  App\Models\GrandPrixWeekend;
use  App\Models\QualificationResult;
use App\Models\RaceResult;
use App\Models\RaceStory;


class HomePage extends Controller
{
    public function home()
    {
        

        $drivers = Driver::orderBy("points","desc")->limit(3)->get();
        $lastRace = Race::whereDate("date","<=",now())->orderBy("date","desc")->first();
        $lastGp =GrandPrixWeekend::where("race_id",$lastRace->id)->first();
        

        $nextRace = Race::whereDate("date",">=",now())->orderBy("date","asc")->first();;


        


        

        
        

        return view('Home.home',["top3"=>$drivers,"lastRace"=>$lastRace,"nextRace"=>$nextRace]);
    }
}
