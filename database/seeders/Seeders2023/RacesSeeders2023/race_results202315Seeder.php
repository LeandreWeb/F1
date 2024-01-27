<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results202315Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 20231501,
            "driver_id" => 1,
            "race_id" => 202315,
            "total_time" => "1:13:41.143",
            "best_lap" => 85.240,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 20231502,
            "driver_id" => 11,
            "race_id" => 202315,
            "total_time" => "1:13:47.207 ",
            "best_lap" => 85.522,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 20231503,
            "driver_id" => 55,
            "race_id" => 202315,
            "total_time" => "1:13:52.336",
            "best_lap" => 85.501,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 20231504,
            "driver_id" => 16,
            "race_id" => 202315,
            "total_time" => "1:13:52.520",
            "best_lap" => 85.580,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 20231505,
            "driver_id" => 63,
            "race_id" => 202315,
            "total_time" => "1:14:04.171",
            "best_lap" => 85.847,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 20231506,
            "driver_id" => 44,
            "race_id" => 202315,
            "total_time" => "1:14:23.822",
            "best_lap" => 85.582,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 20231507,
            "driver_id" => 23,
            "race_id" => 202315,
            "total_time" => "1:14:26.249",
            "best_lap" => 86.389,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 20231508,
            "driver_id" => 4,
            "race_id" => 202315,
            "total_time" => "1:14:26.592",
            "best_lap" => 86.144,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 20231509,
            "driver_id" => 14,
            "race_id" => 202315,
            "total_time" => "1:14:27.437",
            "best_lap" => 86.105,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 20231510,
            "driver_id" => 77,
            "race_id" => 202315,
            "total_time" => "1:14:45.199",
            "best_lap" => 85.983,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 20231511,
            "driver_id" => 40,
            "race_id" => 202315,
            "total_time" => "1:14:51.781",
            "best_lap" => 85.842,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231512,
            "driver_id" => 81,
            "race_id" => 202315,
            "total_time" => "1:14:54.217",
            "best_lap" => 85.072,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231513,
            "driver_id" => 2,
            "race_id" => 202315,
            "total_time" => "1:14:59.700",
            "best_lap" => 86.840,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231514,
            "driver_id" => 24,
            "race_id" => 202315,
            "total_time" => "1:15:01.307",
            "best_lap" => 85.983,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231515,
            "driver_id" => 10,
            "race_id" => 202315,
            "total_time" => "1:15:03.653 ",
            "best_lap" => 85.758,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231516,
            "driver_id" => 18,
            "race_id" => 202315,
            "total_time" => "1:15:08.409",
            "best_lap" => 86.617,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231517,
            "driver_id" => 27,
            "race_id" => 202315,
            "total_time" => "00:00:00.001",
            "best_lap" => 85.894,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231518,
            "driver_id" => 20,
            "race_id" => 202315,
            "total_time" => "00:00:00.001",
            "best_lap" => 86.278,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20231519,
            "driver_id" => 31,
            "race_id" => 202315,
            "total_time" => null,
            "best_lap" => 86.963,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20231520,
            "driver_id" => 22,
            "race_id" => 202315,
            "total_time" => null,
            "best_lap" => null,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
