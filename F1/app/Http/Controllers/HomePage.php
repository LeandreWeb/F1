<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Country;
use  App\Models\Driver;
use  App\Models\Race;
use  App\Models\GrandsPrix;
use  App\Models\QualificationResult;
use App\Models\RaceResult;


class HomePage extends Controller
{
    public function home()
    {
        

        $drivers = Driver::orderBy("points","desc")->limit(3)->get();
        $lastRace = Race::whereDate("date","<=",now())->orderBy("date","desc")->first();
        $lastGp =GrandsPrix::where("race_id",$lastRace->id)->first();
        $country =Country::where("id",$lastGp->country_id)->first();
        


       
        
        return view('Home.home',["top3"=>$drivers,"lastRace"=>$lastRace,"country"=>$country->name]);
    }
}
