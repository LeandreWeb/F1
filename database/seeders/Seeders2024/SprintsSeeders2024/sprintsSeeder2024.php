<?php

namespace Database\Seeders\Seeders2024\SprintsSeeders2024;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class sprintsSeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprints=[];
        $sprints[]=[
            "id"=>202405,
            "date"=>'2024-04-20',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/China.html
            'sprint_story_id'=>null
        ];
        $sprints[]=[
            "id"=>202406,
            "date"=>'2024-05-04',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Miami.html
            'sprint_story_id'=>null
        ];
        $sprints[]=[
            "id"=>202411,
            "date"=>'2024-06-29',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Austria.html
            'sprint_story_id'=>null
        ];
        $sprints[]=[
            "id"=>202419,
            "date"=>'2024-10-20',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/United_States.html
            'sprint_story_id'=>null
        ];
        $sprints[]=[
            "id"=>202421,
            "date"=>'2024-11-02',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Brazil.html
            'sprint_story_id'=>null
        ];
        $sprints[]=[
            "id"=>202423,
            "date"=>'2024-11-30',
            "start"=>'00:00:00', //TODO reverifier sur https://www.formula1.com/en/racing/2024/Qatar.html
            'sprint_story_id'=>null
        ];

        Db::table('sprints')->insert($sprints);
    }
}
