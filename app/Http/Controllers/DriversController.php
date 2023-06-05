<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Driver;

class DriversController extends Controller
{
    public function menu( )
    {


        $drivers = Driver::all()->sortBy('Lastname');

        return view('Drivers.Drivers',compact('drivers'));
    }
}
