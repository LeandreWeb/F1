<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RaceStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceStories=[];

        $raceStories[]=[
            "id"=>1,
            "catchphrase"=>"Aston Martin Surprenant",
            "intro"=>"Please write an Intro  you lazy ",
            "first_part"=>"Please Write a firstpart you lazy",
            "middle_part"=>"Please Write a middlepart you lazy",
            "last_part"=>"Please Write a firstpart you lazy",
            "conclusion"=>"Please Write a conclusion you lazy",
            "extra"=>null,
        ];
        $raceStories[]=[
            "id"=>2,
            "catchphrase"=>"Domination Red Bulls ",
            "intro"=>"Please write an Intro  you lazy ",
            "first_part"=>"Please Write a firstpart you lazy",
            "middle_part"=>"Please Write a middlepart you lazy",
            "last_part"=>"Please Write a firstpart you lazy",
            "conclusion"=>"Please Write a conclusion you lazy",
            "extra"=>null,
        ];
        $raceStories[]=[
            "id"=>3,
            "catchphrase"=>"Chaos a Melbourne",
            "intro"=>"Please write an Intro  you lazy ",
            "first_part"=>"Please Write a firstpart you lazy",
            "middle_part"=>"Please Write a middlepart you lazy",
            "last_part"=>"Please Write a firstpart you lazy",
            "conclusion"=>"Please Write a conclusion you lazy",
            "extra"=>null,
        ];

        Db::table('race_stories')->delete();
        Db::table('race_stories')->insert($raceStories);
    }
}
