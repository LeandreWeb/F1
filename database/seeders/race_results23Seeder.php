<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results23Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 2301,
            "driver_id" => 1,
            "race_id" => 23,
            "total_time" => "1:27:02.624",
            "best_lap" => 86.993,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 2302,
            "driver_id" => 16,
            "race_id" => 23,
            "total_time" => "1:27:20.617",
            "best_lap" => 88.199,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 2303,
            "driver_id" => 63,
            "race_id" => 23,
            "total_time" => "1:27:22.952",
            "best_lap" => 88.187,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 2304,
            "driver_id" => 11,
            "race_id" => 23,
            "total_time" => "1:27:24.077",
            "best_lap" => 87.493,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 2305,
            "driver_id" => 4,
            "race_id" => 23,
            "total_time" => "1:27:26.908",
            "best_lap" => 88.164,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 2306,
            "driver_id" => 81,
            "race_id" => 23,
            "total_time" => "1:27:34.111",
            "best_lap" => 88.138,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 2307,
            "driver_id" => 14,
            "race_id" => 23,
            "total_time" => "1:27:42.136",
            "best_lap" => 88.256,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 2308,
            "driver_id" => 22,
            "race_id" => 23,
            "total_time" => "1:27:45.712",
            "best_lap" => 89.256,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 2309,
            "driver_id" => 44,
            "race_id" => 23,
            "total_time" => "1:27:47.048",
            "best_lap" => 88.372,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 2310,
            "driver_id" => 18,
            "race_id" => 23,
            "total_time" => "1:27:58.256",
            "best_lap" => 88.050,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 2311,
            "driver_id" => 3,
            "race_id" => 23,
            "total_time" => "1:27:58.853",
            "best_lap" => 88.571,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2312,
            "driver_id" => 31,
            "race_id" => 23,
            "total_time" => "1:28:09.997",
            "best_lap" => 90.033,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2313,
            "driver_id" => 10,
            "race_id" => 23,
            "total_time" => "1:28:13.984",
            "best_lap" => 89.016,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2314,
            "driver_id" => 23,
            "race_id" => 23,
            "total_time" => "1:28:16.808",
            "best_lap" => 87.845,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2315,
            "driver_id" => 27,
            "race_id" => 23,
            "total_time" => "1:28:27.320",
            "best_lap" => 89.217,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2316,
            "driver_id" => 2,
            "race_id" => 23,
            "total_time" => "1:28:31.415",
            "best_lap" => 88.580,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2317,
            "driver_id" => 24,
            "race_id" => 23,
            "total_time" => "1:28:33.046",
            "best_lap" => 88.746,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2318,
            "driver_id" => 55,
            "race_id" => 23,
            "total_time" => null,
            "best_lap" => 89.452,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 2319,
            "driver_id" => 77,
            "race_id" => 23,
            "total_time" => "00:00:00.001",
            "best_lap" => 89.863,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 2320,
            "driver_id" => 20,
            "race_id" => 23,
            "total_time" => "00:00:00.001",
            "best_lap" => 89.934,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
