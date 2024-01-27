<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;


class DriversController extends Controller
{
    public function menu( )
    {

        $year = date('Y') ;
        
        $seasons =Season::orderBy("id","desc")->get();

        $seasonSelect=Season::latest()->where("id",request()->query("year_id"))->get();

        if(count($seasonSelect)){
            $season = $seasonSelect[0];
        }
        else{

            $season = Season::with('seasonTeams.teamDrivers')->find($year);
        }



        $drivers = $season->teamDrivers();

        $sortedDrivers = $drivers->sortBy(function ($d,$key){
            
            return $d->driver->Lastname;
        });

        $teamDrivers=$sortedDrivers;
        
        return view('Drivers.Drivers',compact('teamDrivers','seasons'));
    }
}
