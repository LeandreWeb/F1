<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;


class DriverController extends Controller
{
    public function driver($id){
        $driver = Driver::find($id);
        
        return view('Driver.Driver', compact('driver'));

    }
}
