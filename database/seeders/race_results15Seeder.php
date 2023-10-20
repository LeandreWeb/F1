<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results15Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 1501,
            "driver_id" => 1,
            "race_id" => 15,
            "total_time" => "01:13:41.143",
            "best_lap" => 73.889,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 1502,
            "driver_id" => 11,
            "race_id" => 15,
            "total_time" => "02:24:08.155",
            "best_lap" => 73.837,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 1503,
            "driver_id" => 55,
            "race_id" => 15,
            "total_time" => "02:24:11.469",
            "best_lap" => 74.441,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 1504,
            "driver_id" => 16,
            "race_id" => 15,
            "total_time" => "02:24:14.479 ",
            "best_lap" => 74.231,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 1505,
            "driver_id" => 63,
            "race_id" => 15,
            "total_time" => "02:24:16.952",
            "best_lap" => 74.934,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 1506,
            "driver_id" => 44,
            "race_id" => 15,
            "total_time" => "02:24:17.620",
            "best_lap" => 73.904,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 1507,
            "driver_id" => 23,
            "race_id" => 15,
            "total_time" => "02:24:17.643",
            "best_lap" => 74.390,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 1508,
            "driver_id" => 4,
            "race_id" => 15,
            "total_time" => "02:24:19.566",
            "best_lap" => 74.468,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 1509,
            "driver_id" => 14,
            "race_id" => 15,
            "total_time" => "02:24:20.991",
            "best_lap" => 74.299,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 1510,
            "driver_id" => 77,
            "race_id" => 15,
            "total_time" => "02:24:22.757",
            "best_lap" => 74.570,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 1511,
            "driver_id" => 40,
            "race_id" => 15,
            "total_time" => "02:24:24.498",
            "best_lap" => 75.171,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1512,
            "driver_id" => 81,
            "race_id" => 15,
            "total_time" => "02:24:25.251",
            "best_lap" => 14.001,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1513,
            "driver_id" => 2,
            "race_id" => 15,
            "total_time" => "02:24:30.558",
            "best_lap" => 74.820,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1514,
            "driver_id" => 24,
            "race_id" => 15,
            "total_time" => "02:24:30.921",
            "best_lap" => 75.489,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1515,
            "driver_id" => 10,
            "race_id" => 15,
            "total_time" => "02:24:31.799",
            "best_lap" => 74.698,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1516,
            "driver_id" => 18,
            "race_id" => 15,
            "total_time" => "02:24:34.304",
            "best_lap" => 76.253,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1517,
            "driver_id" => 27,
            "race_id" => 15,
            "total_time" => "02:24:59.165",
            "best_lap" => 75.124,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1518,
            "driver_id" => 20,
            "race_id" => 15,
            "total_time" => "02:24:59.165",
            "best_lap" => 75.417,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 1519,
            "driver_id" => 31,
            "race_id" => 15,
            "total_time" => null,
            "best_lap" => 77.277,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 1520,
            "driver_id" => 22,
            "race_id" => 15,
            "total_time" => null,
            "best_lap" => 75.124,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
