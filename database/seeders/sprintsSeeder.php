<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class sprintsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprints=[];
        $sprints[]=[
            "id"=>4,
            "date"=>'2023-04-29',
            "start"=>'09:30:00',
            'sprint_story_id'=>4
        ];
        $sprints[]=[
            "id"=>10,
            "date"=>'2023-07-01',
            "start"=>'10:30:00',
            'sprint_story_id'=>10

        ];$sprints[]=[
            "id"=>13,
            "date"=>'2023-07-29',
            "start"=>'10:30:00',
            'sprint_story_id'=>13
        ];
        $sprints[]=[
            "id"=>18,
            "date"=>'2023-10-07',
            "start"=>'13:30:00',
            'sprint_story_id'=>null
        ];
        $sprints[]=[
            "id"=>19,
            "date"=>'2023-10-21',
            "start"=>'18:00:00',
            'sprint_story_id'=>null
        ];
        $sprints[]=[
            "id"=>21,
            "date"=>'2023-11-04',
            "start"=>'14:30:00',
            'sprint_story_id'=>null
        ];

        Db::table('sprints')->delete();
        Db::table('sprints')->insert($sprints);
    }
}
