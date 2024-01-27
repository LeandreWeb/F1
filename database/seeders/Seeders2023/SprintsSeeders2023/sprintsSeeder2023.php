<?php

namespace Database\Seeders\Seeders2023\SprintsSeeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class sprintsSeeder2023 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprints=[];
        $sprints[]=[
            "id"=>202304,
            "date"=>'2023-04-29',
            "start"=>'09:30:00',
            'sprint_story_id'=>202304
        ];
        $sprints[]=[
            "id"=>202310,
            "date"=>'2023-07-01',
            "start"=>'10:30:00',
            'sprint_story_id'=>202310

        ];$sprints[]=[
            "id"=>202313,
            "date"=>'2023-07-29',
            "start"=>'10:30:00',
            'sprint_story_id'=>202313
        ];
        $sprints[]=[
            "id"=>202318,
            "date"=>'2023-10-07',
            "start"=>'13:30:00',
            'sprint_story_id'=>202318
        ];
        $sprints[]=[
            "id"=>202319,
            "date"=>'2023-10-21',
            "start"=>'18:00:00',
            'sprint_story_id'=>202319
        ];
        $sprints[]=[
            "id"=>202321,
            "date"=>'2023-11-04',
            "start"=>'14:30:00',
            'sprint_story_id'=>null
        ];

        Db::table('sprints')->delete();
        Db::table('sprints')->insert($sprints);
    }
}
