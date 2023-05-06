<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Driver;
use App\Models\QualificationStory;
use  App\Models\RaceStory;
use App\Models\SprintShootoutStory;
use App\Models\SprintStory;

class NewsController extends Controller
{
    public function race( $id )
    {
        $raceStory= RaceStory::where("id",$id)->first();

        return view('News.raceNews',compact("raceStory"));
    }

    public function quali($id){

        $qualiStory= QualificationStory::where("id",$id)->first();

        return view('News.qualiNews',compact('qualiStory'));
    }
    public function sprintShootout($id){

        $sprintShootoutStory= SprintShootoutStory::where("id",$id)->first();

        return view('News.sprintShootoutnews',compact('sprintShootoutStory'));
    }

    public function sprint( $id )
    {
        $sprintStory=SprintStory::where("id",$id)->first();

        return view('News.sprintNews',compact("sprintStory"));
    }
}
