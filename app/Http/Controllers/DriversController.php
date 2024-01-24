<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;


class DriversController extends Controller
{
    public function menu( )
    {

        $year = date('Y') ;

        $season = Season::with('seasonTeams.teamDrivers')->find($year);

        $drivers = $season->teamDrivers();

        $sortedDrivers = $drivers->sortBy(function ($d,$key){
            
            return $d->driver->Lastname;
        });

        $teamDrivers=$sortedDrivers;
        
        return view('Drivers.Drivers',compact('teamDrivers'));
    }
}
