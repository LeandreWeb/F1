<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SprintShootoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprintsShootout=[];
        $sprintsShootout[]=[
            "id"=>4,
            "date"=>'2023-04-29',
            "start"=>'04:30:00',
            "sprint_shootout_story_id"=>null

        ];
        $sprintsShootout[]=[
            "id"=>10,
            "date"=>'2023-07-01',
            "start"=>'06:30:00',
            "sprint_shootout_story_id"=>null
        ];$sprintsShootout[]=[
            "id"=>13,
            "date"=>'2023-07-29',
            "start"=>'06:30:00',
            "sprint_shootout_story_id"=>null
        ];
        $sprintsShootout[]=[
            "id"=>18,
            "date"=>'2023-10-07',
            "start"=>'09:30:00',
            "sprint_shootout_story_id"=>null
        ];
        $sprintsShootout[]=[
            "id"=>19,
            "date"=>'2023-10-21',
            "start"=>'14:00:00',
            "sprint_shootout_story_id"=>null
        ];
        $sprintsShootout[]=[
            "id"=>21,
            "date"=>'2023-11-04',
            "start"=>'10:30:00',
            "sprint_shootout_story_id"=>null
        ];

        Db::table('sprint_shootouts')->delete();
        Db::table('sprint_shootouts')->insert($sprintsShootout);
        //
    }
}
