<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results09Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults=[];

        $raceResults[]=[
            "id"=>901,
            "driver_id"=>1,
            "race_id"=>9,
            "total_time"=>"01:33:58.348",
            "best_lap"=>76.237,
            "position"=>1,
            "points"=>25,
        ];
        $raceResults[]=[
            "id"=>902,
            "driver_id"=>14,
            "race_id"=>9,
            "total_time"=>"01:34:07.918",
            "best_lap"=>76.346,
            "position"=>2,
            "points"=>18,
        ];
        $raceResults[]=[
            "id"=>903,
            "driver_id"=>44,
            "race_id"=>9,
            "total_time"=>"01:34:12.516 ",
            "best_lap"=>77.169,
            "position"=>3,
            "points"=>15,
        ];
        $raceResults[]=[
            "id"=>904,
            "driver_id"=>16,
            "race_id"=>9,
            "total_time"=>"01:34:16.996",
            "best_lap"=>77.197,
            "position"=>4,
            "points"=>12,
        ];
        $raceResults[]=[
            "id"=>905,
            "driver_id"=>55,
            "race_id"=>9,
            "total_time"=>"01:34:20.888",
            "best_lap"=>76.905,
            "position"=>5,
            "points"=>10,
        ];
        $raceResults[]=[
            "id"=>906,
            "driver_id"=>11,
            "race_id"=>9,
            "total_time"=>"01:34:49.376",
            "best_lap"=>74.481,
            "position"=>6,
            "points"=>8,
        ];
        $raceResults[]=[
            "id"=>907,
            "driver_id"=>23,
            "race_id"=>9,
            "total_time"=>"01:34:59.161",
            "best_lap"=>77.258,
            "position"=>7,
            "points"=>6
        ];
        $raceResults[]=[
            "id"=>908,
            "driver_id"=>31,
            "race_id"=>9,
            "total_time"=>"01:35:00.040",
            "best_lap"=>77.680,
            "position"=>8,
            "points"=>4
        ];
        $raceResults[]=[
            "id"=>909,
            "driver_id"=>18,
            "race_id"=>9,
            "total_time"=>"01:35:02.750",
            "best_lap"=>77.214,
            "position"=>9,
            "points"=>2
        ];
        $raceResults[]=[
            "id"=>910,
            "driver_id"=>77,
            "race_id"=>9,
            "total_time"=>"01:35:02.780",
            "best_lap"=>77.699,
            "position"=>10,
            "points"=>1
        ];
        $raceResults[]=[
            "id"=>911,
            "driver_id"=>81,
            "race_id"=>9,
            "total_time"=>"01:35:03.449 ",
            "best_lap"=>77.296,
            "position"=>11,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>912,
            "driver_id"=>10,
            "race_id"=>9,
            "total_time"=>"01:35:03.597",
            "best_lap"=>76.903,
            "position"=>12,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>913,
            "driver_id"=>4,
            "race_id"=>9,
            "total_time"=>"01:35:06.711",
            "best_lap"=>79.040,
            "position"=>13,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>914,
            "driver_id"=>22,
            "race_id"=>9,
            "total_time"=>"01:35:11.771 ",
            "best_lap"=>76.957,
            "position"=>14,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>915,
            "driver_id"=>27,
            "race_id"=>9,
            "total_time"=>"00:00:00.01",
            "best_lap"=>77.964,
            "position"=>15,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>916,
            "driver_id"=>24,
            "race_id"=>9,
            "total_time"=>"00:00:00.01",
            "best_lap"=>78.040,
            "position"=>16,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>917,
            "driver_id"=>20,
            "race_id"=>9,
            "total_time"=>"00:00:00.01",
            "best_lap"=>76.437,
            "position"=>17,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>918,
            "driver_id"=>21,
            "race_id"=>9,
            "total_time"=>"00:00:00.01",
            "best_lap"=>76.779,
            "position"=>18,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>919,
            "driver_id"=>63,
            "race_id"=>9,
            "total_time"=>null,
            "best_lap"=>null,
            "position"=>19,
            "points"=>null
        ];
        $raceResults[]=[
            "id"=>920,
            "driver_id"=>2,
            "race_id"=>9,
            "total_time"=>null,
            "best_lap"=>null,
            "position"=>20,
            "points"=>null
        ];





        Db::table('race_results')->insert($raceResults);
    }
}
