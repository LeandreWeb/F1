<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Driver;
use App\Models\Season;


class DriversController extends Controller
{
    public function menu( )
    {

        $year = date('Y') ;

        $season = Season::with('seasonTeams.teamDrivers')->find($year)->first();


        $drivers = $season->teamDrivers(); //TODO have only the drivers of th year

        $sortedDrivers = $drivers->sortBy(function ($d,$key){
            
            return $d->driver->Lastname;
        });
    
        $teamDrivers=$sortedDrivers;
        

        return view('Drivers.Drivers',compact('teamDrivers'));
    }
}
