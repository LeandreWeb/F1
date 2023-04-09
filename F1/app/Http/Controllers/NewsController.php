<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Driver;
use  App\Models\RaceStory;

class NewsController extends Controller
{
    public function Index( $id )
    {
        $raceStory= RaceStory::where("id",$id)->first();




        return view('News.news',['raceStory'=> $raceStory]);
    }
}
