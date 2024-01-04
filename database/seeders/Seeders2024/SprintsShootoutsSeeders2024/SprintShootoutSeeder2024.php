<?php

namespace Database\Seeders\Seeders2024\SprintsShootoutsSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SprintShootoutSeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprintsShootout=[];
        $sprintsShootout[]=[
            "id"=>202404,
            "date"=>'2024-04-29',
            "start"=>'04:30:00',
            "sprint_shootout_story_id"=>null

        ];
        

        Db::table('sprint_shootouts')->delete();
        Db::table('sprint_shootouts')->insert($sprintsShootout);
        //
    }
}
