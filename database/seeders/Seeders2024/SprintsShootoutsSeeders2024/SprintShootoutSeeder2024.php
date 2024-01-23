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
            "id"=>202405,
            "date"=>'2024-04-19',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/China.html
            "sprint_shootout_story_id"=>null
        ];
        $sprintsShootout[]=[
            "id"=>202406,
            "date"=>'2024-05-04',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Miami.html
            "sprint_shootout_story_id"=>null
        ];
        $sprintsShootout[]=[
            "id"=>202411,
            "date"=>'2024-06-29',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Austria.html
            "sprint_shootout_story_id"=>null
        ];
        $sprintsShootout[]=[
            "id"=>202419,
            "date"=>'2024-10-20',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/United_States.html
            "sprint_shootout_story_id"=>null
        ];
        $sprintsShootout[]=[
            "id"=>202421,
            "date"=>'2024-11-02',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Brazil.html
            "sprint_shootout_story_id"=>null
        ];
        $sprintsShootout[]=[
            "id"=>202423,
            "date"=>'2024-11-30',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Qatar.html
            "sprint_shootout_story_id"=>null
        ];

        Db::table('sprint_shootouts')->insert($sprintsShootout);
        //
    }
}
