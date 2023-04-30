<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results03Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults=[];

        $raceResults[]=[
            "id"=>301,
            "driver_id"=>1,
            "race_id"=>3,
            "total_time"=>"02:32:38.371",
            "best_lap"=>080.342,
            "position"=>1,
            "points"=>25,
        ];
        $raceResults[]=[
            "id"=>302,
            "driver_id"=>44,
            "race_id"=>3,
            "total_time"=>"02:32:38.55",
            "best_lap"=>080.613,
            "position"=>2,
            "points"=>18,
        ];
        $raceResults[]=[
            "id"=>303,
            "driver_id"=>14,
            "race_id"=>3,
            "total_time"=>"02:32:39.14",
            "best_lap"=>080.476,
            "position"=>3,
            "points"=>15,
        ];
        $raceResults[]=[
            "id"=>304,
            "driver_id"=>18,
            "race_id"=>3,
            "total_time"=>"02:32:41.453",
            "best_lap"=>080.934,
            "position"=>4,
            "points"=>12,
        ];
        $raceResults[]=[
            "id"=>305,
            "driver_id"=>11,
            "race_id"=>3,
            "total_time"=>"02:32:41.691",
            "best_lap"=>080.235,
            "position"=>5,
            "points"=>10,
        ];
        $raceResults[]=[
            "id"=>306,
            "driver_id"=>4,
            "race_id"=>3,
            "total_time"=>"02:32:42.072",
            "best_lap"=>081.173,
            "position"=>6,
            "points"=>8,
        ];
        $raceResults[]=[
            "id"=>307,
            "driver_id"=>27,
            "race_id"=>3,
            "total_time"=>"02:32:43.310",
            "best_lap"=>081.124,
            "position"=>7,
            "points"=>6
        ];
        $raceResults[]=[
            "id"=> 308,
            "driver_id"=>81,
            "race_id"=>3,
            "total_time"=>"02:32:43.753",
            "best_lap"=>081.335,
            "position"=>8,
            "points"=>4
        ];
        $raceResults[]=[
            "id"=> 309,
            "driver_id"=>24,
            "race_id"=>3,
            "total_time"=>"02:32:44.084",
            "best_lap"=>081.819,
            "position"=>9,
            "points"=>2
        ];
        $raceResults[]=[
            "id"=> 310,
            "driver_id"=>22,
            "race_id"=>3,
            "total_time"=>"02:32:44.423",
            "best_lap"=>081.789,
            "position"=>10,
            "points"=>1
        ];
        $raceResults[]=[
            "id"=> 311,
            "driver_id"=>77,
            "race_id"=>3,
            "total_time"=>"02:32:44.884",
            "best_lap"=>082.233,
            "position"=>11,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=> 312,
            "driver_id"=>55,
            "race_id"=>3,
            "total_time"=>"02:32:44.965",
            "best_lap"=>080.462,
            "position"=>12,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=> 313,
            "driver_id"=>10,
            "race_id"=>3,
            "total_time"=>null,
            "best_lap"=>080.995,
            "position"=>13,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=> 314,
            "driver_id"=>31,
            "race_id"=>3,
            "total_time"=>null,
            "best_lap"=>081.203,
            "position"=>14,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=> 315,
            "driver_id"=>21,
            "race_id"=>3,
            "total_time"=>null,
            "best_lap"=>081.183,
            "position"=>15,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=> 316,
            "driver_id"=>2,
            "race_id"=>3,
            "total_time"=>null,
            "best_lap"=>081.456,
            "position"=>16,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=> 317,
            "driver_id"=>20,
            "race_id"=>3,
            "total_time"=>null,
            "best_lap"=>081.685,
            "position"=>17,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=> 318,
            "driver_id"=>63,
            "race_id"=>3,
            "total_time"=>null,
            "best_lap"=>082.680,
            "position"=>18,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=> 319,
            "driver_id"=>23,
            "race_id"=>3,
            "total_time"=>null,
            "best_lap"=>83.349,
            "position"=>null,
            "points"=>null
        ];
        $raceResults[]=[
            "id"=> 320,
            "driver_id"=>16,
            "race_id"=>3,
            "total_time"=>null,
            "best_lap"=>null,
            "position"=>null,
            "points"=>null
        ];





        Db::table('race_results')->insert($raceResults);
    }
}
