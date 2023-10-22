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

        $dateDiff =  (int)now()->diff($nextRace->date)->format('%d');
        $currentGp = GrandPrixWeekend::where("status","current")->first();

        if($dateDiff<=3 && $nextRace->grandPrixWeekend->status != "current"){
            
            $currentGp = GrandPrixWeekend::where("status","current")->first();
            $nextRace->grandPrixWeekend->status= "current";
            $nextRace->grandPrixWeekend->save();
            
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

            if ($dateDiff >= 3 && $race->grandPrixWeekend->status != "done") {
                $race->grandPrixWeekend->status = "done";
                $race->grandPrixWeekend->save();
            }
        }
   }
}
