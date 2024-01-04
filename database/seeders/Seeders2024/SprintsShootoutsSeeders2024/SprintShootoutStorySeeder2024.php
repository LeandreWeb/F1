<?php

namespace Database\Seeders\Seeders2024\SprintsShootoutsSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SprintShootoutStorySeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SprintShootoutStory = [];
        $SprintShootoutStory[] = [
            "id" => 202404,

            "catchphrase" => "",

            "intro" => "",

            "q1" => "",

            "q2" => "",

            "q3" => "",

            "conclusion" => "",
            
            "extra" => null
        ];
    
        Db::table('sprint_shootout_stories')->delete();
        Db::table('sprint_shootout_stories')->insert($SprintShootoutStory);
    }
}
