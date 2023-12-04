<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Race;
use  App\Models\GrandPrixWeekend;


class ScheduleController extends Controller
{
    public function menu(){

        $nextRace = Race::whereDate("date", ">=", now())->orderBy("date", "asc")->first();
        
        $this->SetRacesToDone();

        if($nextRace)
        {
            $dateDiff =  (int)now()->diff($nextRace->date)->format('%d');
        }
        else
        {
            $dateDiff = 4;
        }

        $currentGp = GrandPrixWeekend::where("status","current")->first();

        if(!$currentGp && $nextRace != null ){
            $currentGp= Race::whereDate("date", "<=", now())->orderBy("date", "desc")->first()->grandPrixWeekend;
            if($currentGp){
                $currentGp->status="current";
                $currentGp->save();
            }

        }

        if($dateDiff<=3 && $nextRace->grandPrixWeekend->status != "current"){
            
            $currentGp = GrandPrixWeekend::where("status","current")->first();
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

            //$driver->save();
        }


        $GrandPrixWeekends = GrandPrixWeekend::get();

        return view("Schedule.schedule",compact('GrandPrixWeekends'));
    }

    public function SetRacesToDone(){

        $RacesDones = Race::whereDate("date", "<=", now())->orderBy("date", "asc")->get();

        foreach ($RacesDones as $race) {
            $dateDiff =  (int)now()->diff($race->date)->format('%d');

            if ($dateDiff >= 3 && ($race->grandPrixWeekend->status != "done"&& $race->grandPrixWeekend->status != "cancelled")) {
                $race->grandPrixWeekend->status = "done";
                $race->grandPrixWeekend->save();
            }
        }
   }
}
