<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function Index( )
    {
        $drivers = [
            1=> ["name"=> "Fernando","Lastname"=>"Alonso"],
            2=> ["name"=> "Lance","Lastname"=>"Stroll"],
        ];

        return view('Drivers.allDrivers',['drivers'=> $drivers]);
    }
}
