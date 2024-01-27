<?php

namespace Database\Seeders\Seeders2024\RacesSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RaceStorySeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceStories = [];

        $raceStories[] = [
            "id" => 202401,

            "catchphrase" => "",
            
            "intro" => "",

            "first_part" => "",

            "middle_part" => "",

            "last_part" => "",

            "conclusion" => "",

            "extra" => null,
        ];

        Db::table('race_stories')->insert($raceStories);
    }
}
