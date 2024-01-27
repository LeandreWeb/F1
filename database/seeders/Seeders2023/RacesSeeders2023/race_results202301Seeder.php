<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class race_results202301Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults=[];

        $raceResults[]=[
            "id"=>20230101,
            "driver_id"=>1,
            "race_id"=>202301,
            "total_time"=>"01:33:56.736",
            "best_lap"=>096.236,
            "position"=>1,
            "points"=>25,
        ];
        $raceResults[]=[
            "id"=>20230102,
            "driver_id"=>11,
            "race_id"=>202301,
            "total_time"=>"01:34:08.723",
            "best_lap"=>096.344,
            "position"=>2,
            "points"=>18,
        ];
        $raceResults[]=[
            "id"=>20230103,
            "driver_id"=>14,
            "race_id"=>202301,
            "total_time"=>"01:34:35.373",
            "best_lap"=>096.156,
            "position"=>3,
            "points"=>15,
        ];
        $raceResults[]=[
            "id"=>20230104,
            "driver_id"=>55,
            "race_id"=>202301,
            "total_time"=>"01:34:35.373", //+48.052
            "best_lap"=>097.130,
            "position"=>4,
            "points"=>12,
        ];
        $raceResults[]=[
            "id"=>20230105,
            "driver_id"=>44,
            "race_id"=>202301,
            "total_time"=>"01:34:35.373", //+50.977
            "best_lap"=>096.546,
            "position"=>5,
            "points"=>10,
        ];
        $raceResults[]=[
            "id"=>20230106,
            "driver_id"=>18,
            "race_id"=>202301,
            "total_time"=>"01:34:35.373", //+54.502
            "best_lap"=>096.546,
            "position"=>6,
            "points"=>8,
        ];
        $raceResults[]=[
            "id"=>20230107,
            "driver_id"=>63,
            "race_id"=>202301,
            "total_time"=>"01:34:35.373", //+55.873
            "best_lap"=>097.221,
            "position"=>7,
            "points"=>6
        ];
        $raceResults[]=[
            "id"=>20230108,
            "driver_id"=>77,
            "race_id"=>202301,
            "total_time"=>"01:34:35.373", //+72.647
            "best_lap"=>097.379,
            "position"=>8,
            "points"=>4
        ];
        $raceResults[]=[
            "id"=>20230109,
            "driver_id"=>10,
            "race_id"=>202301,
            "total_time"=>"01:34:35.373", //+73.753
            "best_lap"=>095.068,
            "position"=>9,
            "points"=>2
        ];
        $raceResults[]=[
            "id"=>20230110,
            "driver_id"=>23,
            "race_id"=>202301,
            "total_time"=>"01:34:35.373", //+89.774
            "best_lap"=>097.144,
            "position"=>10,
            "points"=>1
        ];
        $raceResults[]=[
            "id"=>20230111,
            "driver_id"=>22,
            "race_id"=>202301,
            "total_time"=>"01:34:35.373", //+90.870
            "best_lap"=>096.637,
            "position"=>11,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230112,
            "driver_id"=>2,
            "race_id"=>202301,
            "total_time"=>"00:00:01.000", //+1
            "best_lap"=>096.037,
            "position"=>12,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230113,
            "driver_id"=>20,
            "race_id"=>202301,
            "total_time"=>"00:00:01.000", //+1
            "best_lap"=>096.471,
            "position"=>13,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230114,
            "driver_id"=>21,
            "race_id"=>202301,
            "total_time"=>"00:00:01.000", //+1
            "best_lap"=>097.709,
            "position"=>14,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230115,
            "driver_id"=>27,
            "race_id"=>202301,
            "total_time"=>"00:00:01.000", //+1
            "best_lap"=>096.616,
            "position"=>15,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230116,
            "driver_id"=>24,
            "race_id"=>202301,
            "total_time"=>"00:00:01.000", //+1
            "best_lap"=>093.996,
            "position"=>16,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230117,
            "driver_id"=>4,
            "race_id"=>202301,
            "total_time"=>"00:00:02.000", //+2
            "best_lap"=>095.822,
            "position"=>17,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230118,
            "driver_id"=>31,
            "race_id"=>202301,
            "total_time"=>null, //+1
            "best_lap"=>null,
            "position"=>null,
            "points"=>null
        ];
        $raceResults[]=[
            "id"=>20230119,
            "driver_id"=>16,
            "race_id"=>202301,
            "total_time"=>null, //+1
            "best_lap"=>null,
            "position"=>null,
            "points"=>null
        ];
        $raceResults[]=[
            "id"=>20230120,
            "driver_id"=>81,
            "race_id"=>202301,
            "total_time"=>null, //+1
            "best_lap"=>null,
            "position"=>null,
            "points"=>null
        ];
        

        Db::table('race_results')->delete();
        Db::table('race_results')->insert($raceResults);
    }
}
