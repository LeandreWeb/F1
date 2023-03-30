<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Country;
use  App\Models\Driver;
use  App\Models\GrandsPrix;
use  App\Models\QualificationResult;
use App\Models\RaceResult;


class HomePage extends Controller
{
    public function home()
    {
        $raceresults =RaceResult::all();

        $drivers = Driver::orderBy("points","desc")->limit(3)->get();

        foreach($drivers as $driver){
            
            
            
            
        }
        
        return view('Home.home',["top3"=>$drivers]);
    }
}
