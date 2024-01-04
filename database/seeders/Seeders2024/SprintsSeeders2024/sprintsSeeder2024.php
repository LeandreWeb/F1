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
        // $sprints[]=[
        //     "id"=>202404,
        //     "date"=>'2024-04-29',
        //     "start"=>'09:30:00',
        //     'sprint_story_id'=>202404
        // ];
        // $sprints[]=[
        //     "id"=>202410,
        //     "date"=>'2024-07-01',
        //     "start"=>'10:30:00',
        //     'sprint_story_id'=>202410

        // ];$sprints[]=[
        //     "id"=>202413,
        //     "date"=>'2024-07-29',
        //     "start"=>'10:30:00',
        //     'sprint_story_id'=>202413
        // ];
        // $sprints[]=[
        //     "id"=>202418,
        //     "date"=>'2024-10-07',
        //     "start"=>'13:30:00',
        //     'sprint_story_id'=>202418
        // ];
        // $sprints[]=[
        //     "id"=>202419,
        //     "date"=>'2024-10-21',
        //     "start"=>'18:00:00',
        //     'sprint_story_id'=>202419
        // ];
        // $sprints[]=[
        //     "id"=>202421,
        //     "date"=>'2024-11-04',
        //     "start"=>'14:30:00',
        //     'sprint_story_id'=>null
        // ];

        Db::table('sprints')->delete();
        Db::table('sprints')->insert($sprints);
    }
}
