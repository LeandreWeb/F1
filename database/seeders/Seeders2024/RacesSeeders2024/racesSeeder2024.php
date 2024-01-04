<?php

namespace Database\Seeders\Seeders2024\RacesSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class racesSeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $races=[];
        // $races[]=[
        //     "id"=>202401,
        //     "date"=>'2024-03-05',
        //     "start"=>'09:00:00',
        //     'race_story_id'=>202401
        // ];
        // $races[]=[
        //     "id"=>202402,
        //     "date"=>'2024-03-19',
        //     "start"=>'13:00:00',
        //     'race_story_id'=>202402
        // ];
        // $races[]=[
        //     "id"=>202403,
        //     "date"=>'2024-04-02',
        //     "start"=>'01:00:00',
        //     'race_story_id'=>202403
        // ];
        // $races[]=[
        //     "id"=>202404,
        //     "date"=>'2024-04-30',
        //     "start"=>'07:00:00',
        //     'race_story_id'=>202404
        // ];
        // $races[]=[
        //     "id"=>202405,
        //     "date"=>'2024-05-07',
        //     "start"=>'15:30:00',
        //     'race_story_id'=>202405
        // ];
        // $races[]=[
        //     "id"=>202406,
        //     "date"=>'2024-05-21',
        //     "start"=>'09:00:00',
        //     'race_story_id'=>null
        // ];
        // $races[]=[
        //     "id"=>202407,
        //     "date"=>'2024-05-28',
        //     "start"=>'09:00:00',
        //     'race_story_id'=>202407
        // ];
        // $races[]=[
        //     "id"=>202408,
        //     "date"=>'2024-06-04',
        //     "start"=>'09:00:00',
        //     'race_story_id'=>202408
        // ];
        // $races[]=[
        //     "id"=>202409,
        //     "date"=>'2024-06-18',
        //     "start"=>'14:00:00',
        //     'race_story_id'=>202409
        // ];
        // $races[]=[
        //     "id"=>202410,
        //     "date"=>'2024-07-02',
        //     "start"=>'09:00:00',
        //     'race_story_id'=>202410
        // ];
        // $races[]=[
        //     "id"=>202411,
        //     "date"=>'2024-07-09',
        //     "start"=>'10:00:00',
        //     'race_story_id'=>202411
        // ];
        // $races[]=[
        //     "id"=>202412,
        //     "date"=>'2024-07-23',
        //     "start"=>'09:00:00',
        //     'race_story_id'=>202412
        // ];
        // $races[]=[
        //     "id"=>202413,
        //     "date"=>'2024-07-30',
        //     "start"=>'09:00:00',
        //     'race_story_id'=>202413
        // ];
        // $races[]=[
        //     "id"=>202414,
        //     "date"=>'2024-08-27',
        //     "start"=>'09:00:00',
        //     'race_story_id'=>202414
        // ];
        // $races[]=[
        //     "id"=>202415,
        //     "date"=>'2024-09-03',
        //     "start"=>'09:00:00',
        //     'race_story_id'=>202415
        // ];
        // $races[]=[
        //     "id"=>202416,
        //     "date"=>'2024-09-17',
        //     "start"=>'08:00:00',
        //     'race_story_id'=>202416
        // ];
        // $races[]=[
        //     "id"=>202417,
        //     "date"=>'2024-09-24',
        //     "start"=>'01:00:00',
        //     'race_story_id'=>202417
        // ];
        // $races[]=[
        //     "id"=>202418,
        //     "date"=>'2024-10-08',
        //     "start"=>'13:00:00',
        //     'race_story_id'=>202418
        // ];
        // $races[]=[
        //     "id"=>202419,
        //     "date"=>'2024-10-22',
        //     "start"=>'15:00:00',
        //     'race_story_id'=>null
        // ];
        // $races[]=[
        //     "id"=>202420,
        //     "date"=>'2024-10-29',
        //     "start"=>'16:00:00',
        //     'race_story_id'=>null
        // ];
        // $races[]=[
        //     "id"=>202421,
        //     "date"=>'2024-11-05',
        //     "start"=>'12:00:00',
        //     'race_story_id'=>null
        // ];
        // $races[]=[
        //     "id"=>202422,
        //     "date"=>'2024-11-19',
        //     "start"=>'01:00:00',
        //     'race_story_id'=>null
        // ];
        // $races[]=[
        //     "id"=>202423,
        //     "date"=>'2024-11-26',
        //     "start"=>'08:00:00',
        //     'race_story_id'=>null
        // ];




        Db::table('races')->delete();
        Db::table('races')->insert($races);

    }
}
