<?php

namespace Database\Seeders\Seeders2024\SprintsSeeders2024;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SprintStorySeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $SprintStory = [];
        $SprintStory[] = [
            "id" => 202404,
            
            "catchphrase" => "",
            
            "intro" => "",

            "first_part" => "",

            "last_part" => "",

            "conclusion" => "",

            "extra" => null,
        ];
        

        Db::table('sprint_stories')->delete();
        Db::table('sprint_stories')->insert($SprintStory);
    }
}
