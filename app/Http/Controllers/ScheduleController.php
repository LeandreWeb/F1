<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Race;
use  App\Models\GrandPrixWeekend;
use App\Models\Season;



class ScheduleController extends Controller
{
    public function menu(){

        $year = date('Y') ;
        $seasons =Season::orderBy("id","desc")->get();
        $seasonSelect=Season::latest()->where("id",request()->query("year_id"))->get();
        
        
        if(count($seasonSelect)){
            
            $season= $seasonSelect[0];
        }
        else{
            $season = Season::with('seasonTeams.teamDrivers')->find($year);
            
        }
        
        
        $nextRace = Race::whereDate("date", ">=", now())->orderBy("date", "asc")->first();
        
        
        if($nextRace)
        {
            $dateDiff =  (int)now()->diff($nextRace->date)->format('%d');
        }
        else
        {
            $dateDiff = 4;
        }
        
        $this->SetRacesToDone();
        $currentGp = GrandPrixWeekend::where("status","current");

        if(!$currentGp && $nextRace != null &&  $dateDiff<3 ){
            $currentGp= Race::whereDate("date", "<=", now())->orderBy("date", "desc")->first()->grandPrixWeekend;
            if($currentGp){
                $currentGp->status="current";
                $currentGp->save();
            }

        }

        if($dateDiff<=3 && $nextRace->grandPrixWeekend->status != "current"){
            
            $currentGp = GrandPrixWeekend::where("status","current")->first();
            
            if($currentGp){

                $currentGpDatediff= (int)now()->diff($currentGp->date)->format('%d');
            

                if($nextRace && $currentGpDatediff >= 3){
                    $nextRace->grandPrixWeekend->status= "current";
                    $nextRace->grandPrixWeekend->save();
                }
                
                
                if($currentGp){
                    $currentGp->status="done";
                    $currentGp->save();
                    $currentGp = $nextRace->grandPrixWeekend;
                }

            }


            //$driver->save();
        }


        $GrandPrixWeekends = $season->grandPrix;

        return view("Schedule.schedule",compact('GrandPrixWeekends','seasons'));
    }

    public function SetRacesToDone(){

        $RacesDones = Race::whereDate("date", "<=", now())->orderBy("date", "asc")->get();

        foreach ($RacesDones as $race) {
            $dateDiff =  (int)now()->diff($race->date)->format('%d');
            $monthDiff =  (int)now()->diff($race->date)->format('%m');


            if ($dateDiff >= 3 && ($race->grandPrixWeekend->status != "done"&& $race->grandPrixWeekend->status != "cancelled")) {
                $race->grandPrixWeekend->status = "done";
                $race->grandPrixWeekend->save();
            }
            else if($dateDiff <= 3 & $monthDiff == 0){
                $race->grandPrixWeekend->status = "current";
                $race->grandPrixWeekend->save();


            }
        }
   }
}
