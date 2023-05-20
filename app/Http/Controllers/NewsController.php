<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use  App\Models\Driver;
use App\Models\Qualification;
use App\Models\QualificationStory;
use App\Models\Race;
use  App\Models\RaceStory;
use App\Models\SprintShootoutStory;
use App\Models\SprintStory;

class NewsController extends Controller
{
    public function race($id)
    {
        $race = Race::where("id", $id)->first();

        if ($race->grandPrixWeekend->status == "done") {

            $raceStory = $race->raceStory;

            return view('News.raceNews', compact("raceStory"));
        }

        if ($race->grandPrixWeekend->status == "cancelled") {


            $article = $race->grandPrixWeekend->article;

            return view('News.article', compact("article"));
        }
    }

    public function quali($id)
    {

        $quali = Qualification::where("id", $id)->first();

        if ($quali->grandPrixWeekend->status == "done") {

            $qualiStory = $quali->qualificationStory;

            return view('News.qualiNews', compact("qualiStory"));
        }

        if ($quali->grandPrixWeekend->status == "cancelled") {

            $article = $quali->grandPrixWeekend->article;

            return view('News.article', compact("article"));
        }

        $qualiStory = QualificationStory::where("id", $id)->first();

        return view('News.qualiNews', compact('qualiStory'));
    }
    public function sprintShootout($id)
    {

        $sprintShootoutStory = SprintShootoutStory::where("id", $id)->first();

        return view('News.sprintShootoutnews', compact('sprintShootoutStory'));
    }

    public function sprint($id)
    {
        $sprintStory = SprintStory::where("id", $id)->first();

        return view('News.sprintNews', compact("sprintStory"));
    }
    public function article($id)
    {
        $article = Article::where("id", $id)->first();

        return view('News.article', compact("article"));
    }
}
