<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\GrandPrixWeekend;


class ScheduleController extends Controller
{
    public function menu(){


        $GrandPrixWeekends = GrandPrixWeekend::all();


       

        return view("Schedule.schedule",compact('GrandPrixWeekends'));
    }
}
