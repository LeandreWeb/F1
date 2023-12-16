<?php

namespace Database\Seeders\Seeders2023\SprintsShootoutsSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SprintShootoutSeeder2023 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprintsShootout=[];
        $sprintsShootout[]=[
            "id"=>202304,
            "date"=>'2023-04-29',
            "start"=>'04:30:00',
            "sprint_shootout_story_id"=>202304

        ];
        $sprintsShootout[]=[
            "id"=>202310,
            "date"=>'2023-07-01',
            "start"=>'06:30:00',
            "sprint_shootout_story_id"=>202310
        ];$sprintsShootout[]=[
            "id"=>202313,
            "date"=>'2023-07-29',
            "start"=>'06:30:00',
            "sprint_shootout_story_id"=>202313
        ];
        $sprintsShootout[]=[
            "id"=>202318,
            "date"=>'2023-10-07',
            "start"=>'09:30:00',
            "sprint_shootout_story_id"=>202318
        ];
        $sprintsShootout[]=[
            "id"=>202319,
            "date"=>'2023-10-21',
            "start"=>'14:00:00',
            "sprint_shootout_story_id"=>202319
        ];
        $sprintsShootout[]=[
            "id"=>202321,
            "date"=>'2023-11-04',
            "start"=>'10:30:00',
            "sprint_shootout_story_id"=>null
        ];

        Db::table('sprint_shootouts')->delete();
        Db::table('sprint_shootouts')->insert($sprintsShootout);
        //
    }
}
