<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results202307Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults=[];

        $raceResults[]=[
            "id"=>20230701,
            "driver_id"=>1,
            "race_id"=>202307,
            "total_time"=>"01:48:51.980",
            "best_lap"=>76.604,
            "position"=>1,
            "points"=>25,
        ];
        $raceResults[]=[
            "id"=>20230702,
            "driver_id"=>14,
            "race_id"=>202307,
            "total_time"=>"01:49:19.901",
            "best_lap"=>76.674,
            "position"=>2,
            "points"=>18,
        ];
        $raceResults[]=[
            "id"=>20230703,
            "driver_id"=>31,
            "race_id"=>202307,
            "total_time"=>"01:49:19.901",
            "best_lap"=>76.528,
            "position"=>3,
            "points"=>15,
        ];
        $raceResults[]=[
            "id"=>20230704,
            "driver_id"=>44,
            "race_id"=>202307,
            "total_time"=>"01:49:19.901",
            "best_lap"=>75.650,
            "position"=>4,
            "points"=>12,
        ];
        $raceResults[]=[
            "id"=>20230705,
            "driver_id"=>63,
            "race_id"=>202307,
            "total_time"=>"01:49:19.901",
            "best_lap"=>76.798,
            "position"=>5,
            "points"=>10,
        ];
        $raceResults[]=[
            "id"=>20230706,
            "driver_id"=>16,
            "race_id"=>202307,
            "total_time"=>"01:49:19.901",
            "best_lap"=>75.773,
            "position"=>6,
            "points"=>8,
        ];
        $raceResults[]=[
            "id"=>20230707,
            "driver_id"=>10,
            "race_id"=>202307,
            "total_time"=>"01:49:19.901",
            "best_lap"=>75.831,
            "position"=>7,
            "points"=>6
        ];
        $raceResults[]=[
            "id"=>20230708,
            "driver_id"=>55,
            "race_id"=>202307,
            "total_time"=>"01:49:19.901",
            "best_lap"=>76.449,
            "position"=>8,
            "points"=>4
        ];
        $raceResults[]=[
            "id"=>20230709,
            "driver_id"=>4,
            "race_id"=>202307,
            "total_time"=>"00:00:00.01",
            "best_lap"=>77.844,
            "position"=>9,
            "points"=>2
        ];
        $raceResults[]=[
            "id"=>20230710,
            "driver_id"=>81,
            "race_id"=>202307,
            "total_time"=>"00:00:00.01",
            "best_lap"=>77.513,
            "position"=>10,
            "points"=>1
        ];
        $raceResults[]=[
            "id"=>20230711,
            "driver_id"=>77,
            "race_id"=>202307,
            "total_time"=>"00:00:00.01",
            "best_lap"=>77.824,
            "position"=>11,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230712,
            "driver_id"=>21,
            "race_id"=>202307,
            "total_time"=>"00:00:00.01",
            "best_lap"=>77.561,
            "position"=>12,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230713,
            "driver_id"=>24,
            "race_id"=>202307,
            "total_time"=>"00:00:00.01",
            "best_lap"=>76.926,
            "position"=>13,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230714,
            "driver_id"=>23,
            "race_id"=>202307,
            "total_time"=>"00:00:00.01",
            "best_lap"=>76.672,
            "position"=>14,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230715,
            "driver_id"=>22,
            "race_id"=>202307,
            "total_time"=>"00:00:00.02",
            "best_lap"=>77.680,
            "position"=>15,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230716,
            "driver_id"=>11,
            "race_id"=>202307,
            "total_time"=>"00:00:00.02",
            "best_lap"=>76.269,
            "position"=>16,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230717,
            "driver_id"=>27,
            "race_id"=>202307,
            "total_time"=>"00:00:00.02",
            "best_lap"=>76.991,
            "position"=>17,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230718,
            "driver_id"=>2,
            "race_id"=>202307,
            "total_time"=>"00:00:00.02",
            "best_lap"=>77.302,
            "position"=>18,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230719,
            "driver_id"=>20,
            "race_id"=>202307,
            "total_time"=>null,
            "best_lap"=>78.851,
            "position"=>19,
            "points"=>null
        ];
        $raceResults[]=[
            "id"=>20230720,
            "driver_id"=>18,
            "race_id"=>202307,
            "total_time"=> null,
            "best_lap"=>77.769,
            "position"=>20,
            "points"=>null
        ];





        Db::table('race_results')->insert($raceResults);
    }
}
