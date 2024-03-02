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
use App\Models\SprintShootout;
use App\Models\SprintStory;
use App\Models\Sprint;

class NewsController extends Controller
{
    public function race($id)
    {
        $race = Race::where("id", $id)->first();

        if ($race) {
            if ($race->grandPrixWeekend->status == "done" || $race->grandPrixWeekend->status == "current") {

                $raceStory = $race->raceStory;

                if ($raceStory) {
                    return view('News.raceNews', compact("raceStory"));
                }
            } elseif ($race->grandPrixWeekend->status == "cancelled") {

                $article = $race->grandPrixWeekend->article;

                return to_route('articleNews', ['id' => $article->id]);
            }
        }
        return view("components.404");
    }

    public function quali($id)
    {
        $quali = Qualification::where("id", $id)->first();

        if ($quali) {

            if ($quali->grandPrixWeekend->status == "done" || $quali->grandPrixWeekend->status == "current") {

                $qualiStory = $quali->qualificationStory;

                if ($qualiStory) {
                    return view('News.qualiNews', compact("qualiStory"));
                }
            } elseif ($quali->grandPrixWeekend->status == "cancelled") {

                $article = $quali->grandPrixWeekend->article;

                return to_route('articleNews', ['id' => $article->id]);
            }
        }
        return view("components.404");
    }
    public function sprintShootout($id)
    {

        $sprintShootout = SprintShootout::where("id", $id)->first();


        if ($sprintShootout) {

            $sprintShootoutStory = $sprintShootout->sprintShootoutStory;


            if ($sprintShootout->grandPrixWeekend->status == "done") {
                return view('News.sprintShootoutNews', compact('sprintShootoutStory'));
            }
        }

        return view("components.404");
    }

    public function sprint($id)
    {
        $sprint = Sprint::where("id", $id)->first();

        if ($sprint) {
            $sprintStory = $sprint->sprintStory;
            if ($sprint->grandPrixWeekend->status == "done")
                return view('News.sprintNews', compact("sprintStory"));
        }
        return view("components.404");
    }
    public function article($id)
    {
        $article = Article::where("id", $id)->first();

        return view('News.article', compact("article"));
    }
}
