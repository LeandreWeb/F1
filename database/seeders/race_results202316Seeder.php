<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results202316Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 20231601,
            "driver_id" => 55,
            "race_id" => 202316,
            "total_time" => "01:46:37.418",
            "best_lap" => 97.666,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 20231602,
            "driver_id" => 4,
            "race_id" => 202316,
            "total_time" => "01:46:38.230",
            "best_lap" => 98.046,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 20231603,
            "driver_id" => 44,
            "race_id" => 202316,
            "total_time" => "01:46:38.687",
            "best_lap" => 95.867,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 20231604,
            "driver_id" => 16,
            "race_id" => 202316,
            "total_time" => "01:46:58.595",
            "best_lap" => 96.575,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 20231605,
            "driver_id" => 1,
            "race_id" => 202316,
            "total_time" => "01:46:58.859",
            "best_lap" => 98.275,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 20231606,
            "driver_id" => 10,
            "race_id" => 202316,
            "total_time" => "01:47:15.859",
            "best_lap" => 98.277,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 20231607,
            "driver_id" => 81,
            "race_id" => 202316,
            "total_time" => "01:47:18.897",
            "best_lap" => 98.492,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 20231608,
            "driver_id" => 11,
            "race_id" => 202316,
            "total_time" => "01:47:36.952",
            "best_lap" => 97.108,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 20231609,
            "driver_id" => 40,
            "race_id" => 202316,
            "total_time" => "01:47:43.336",
            "best_lap" => 99.028,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 20231610,
            "driver_id" => 20,
            "race_id" => 202316,
            "total_time" => "01:47:49.534",
            "best_lap" => 98.107,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 20231611,
            "driver_id" => 23,
            "race_id" => 202316,
            "total_time" => "01:47:50.835",
            "best_lap" => 97.342,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231612,
            "driver_id" => 24,
            "race_id" => 202316,
            "total_time" => "01:48:00.067",
            "best_lap" => 99.316,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231613,
            "driver_id" => 27,
            "race_id" => 202316,
            "total_time" => "01:48:02.619",
            "best_lap" => 99.923,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231614,
            "driver_id" => 2,
            "race_id" => 202316,
            "total_time" => "01:48:03.307",
            "best_lap" => 98.531,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231615,
            "driver_id" => 14,
            "race_id" => 202316,
            "total_time" => "01:48:04.021",
            "best_lap" => 96.456,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231616,
            "driver_id" => 63,
            "race_id" => 202316,
            "total_time" => null,
            "best_lap" => 96.273,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231617,
            "driver_id" => 77,
            "race_id" => 202316,
            "total_time" => null,
            "best_lap" => 98.075,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231618,
            "driver_id" => 31,
            "race_id" => 202316,
            "total_time" => null,
            "best_lap" => 99.930,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20231619,
            "driver_id" => 22,
            "race_id" => 202316,
            "total_time" => null,
            "best_lap" => null,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20231620,
            "driver_id" => 18,
            "race_id" => 202316,
            "total_time" => null,
            "best_lap" => null,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
