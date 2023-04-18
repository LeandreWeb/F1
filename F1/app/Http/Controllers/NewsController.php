<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Driver;
use App\Models\QualificationStory;
use  App\Models\RaceStory;


class NewsController extends Controller
{
    public function race( $id )
    {
        $raceStory= RaceStory::where("id",$id)->first();

        return view('News.racenews',compact("raceStory"));
    }

    public function quali($id){

        $qualiStory= QualificationStory::where("id",$id)->first();

        return view('News.qualinews',compact('qualiStory'));

    }
}
