<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamChief;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function menu (){


        $teams=Team::all()->sortBy('Name');


        return view("Teams.teams",compact('teams'));



    }
}
