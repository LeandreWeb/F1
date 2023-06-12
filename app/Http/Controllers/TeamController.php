<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team ($id){


        $team=Team::where("id",$id)->first();


        echo $team;


        return view("Team.TeamPage",compact('team'));



    }
}
