<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SprintShootoutStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SprintShootoutStory=[];
        $SprintShootoutStory[]=[
            "id"=>4,
            "catchphrase"=>"Write something",
            "intro"=>"Bienvenue à la première session du Sprint Shootout ! Cette nouvelle format de la Formule 1 est similaire aux qualifications,
             mais avec un temps réduit, et déterminera la grille de départ pour le sprint qui aura lieu un peu plus tard dans la journée",
            "q3"=>"Write something",
            "q2"=>"Write something",
            "q1"=>"Write something",
            "conclusion"=>"write something",
            "extra"=>null
        ];;


        Db::table('sprint_shootout_stories')->delete();
        Db::table('sprint_shootout_stories')->insert($SprintShootoutStory);

    }
}
