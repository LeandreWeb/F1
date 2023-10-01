<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Race;
use  App\Models\GrandPrixWeekend;


class ScheduleController extends Controller
{
    public function menu(){

        $nextRace = Race::whereDate("date", ">=", now())->orderBy("date", "asc")->first();
        



        $dateDiff =  (int)now()->diff($nextRace->date)->format('%d');

        if($dateDiff<=3 && $nextRace->grandPrixWeekend->status != "current"){
            $currentGp = GrandPrixWeekend::where("status","current")->first();

            $nextRace->grandPrixWeekend->status= "current";

            $nextRace->grandPrixWeekend->save();

            $currentGp->status="done";

            $currentGp->save();

            $currentGp = $nextRace;
            //$driver->save();
        }


        $GrandPrixWeekends = GrandPrixWeekend::get();

        return view("Schedule.schedule",compact('GrandPrixWeekends'));
    }
}
