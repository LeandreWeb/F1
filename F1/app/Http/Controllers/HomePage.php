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

        $drivers = Driver::all();

        foreach($drivers as $driver){
            echo $driver->Number;
            $test =RaceResult::where('drivers_id',"=",$driver->id)->get();
            
            echo $test[0];
            echo "<br>";
            echo "<br>";

            
            
        }
        
        return view('Home.home');
    }
}
