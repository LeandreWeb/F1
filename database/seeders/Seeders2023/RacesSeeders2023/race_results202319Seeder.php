<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results202319Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 20231901,
            "driver_id" => 1,
            "race_id" => 202319,
            "total_time" => "01:35:21.362",
            "best_lap" => 100.028,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 20231902,
            "driver_id" => 4,
            "race_id" => 202319,
            "total_time" => "01:35:32.092",
            "best_lap" => 99.985,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 20231903,
            "driver_id" =>55,
            "race_id" => 202319,
            "total_time" => "01:35:36.496",
            "best_lap" => 100.034,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 20231904,
            "driver_id" => 11,
            "race_id" => 202319,
            "total_time" => "01:35:39.822",
            "best_lap" => 99.737,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 20231905,
            "driver_id" => 63,
            "race_id" => 202319,
            "total_time" => "01:35:46.361",
            "best_lap" => 99.393,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 20231906,
            "driver_id" => 10,
            "race_id" => 202319,
            "total_time" => "01:36:09.358",
            "best_lap" => 100.412,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 20231907,
            "driver_id" => 18,
            "race_id" => 202319,
            "total_time" => "01:36:10.058",
            "best_lap" => 99.908,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 20231908,
            "driver_id" => 22,
            "race_id" => 202319,
            "total_time" => "01:36:35.747",
            "best_lap" => 98.139,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 20231909,
            "driver_id" => 23,
            "race_id" => 202319,
            "total_time" => "01:36:48.076",
            "best_lap" => 101.371,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 20231910,
            "driver_id" => 2,
            "race_id" => 202319,
            "total_time" => "01:36:49.360",
            "best_lap" => 101.238,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 20231911,
            "driver_id" => 27,
            "race_id" => 202319,
            "total_time" => "01:36:51.266",
            "best_lap" => 100.925,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231912,
            "driver_id" => 77,
            "race_id" => 202319,
            "total_time" => "01:37:00.963",
            "best_lap" => 101.972,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231913,
            "driver_id" => 24,
            "race_id" => 202319,
            "total_time" => "00:00:00.001",
            "best_lap" => 101.879,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231914,
            "driver_id" => 20,
            "race_id" => 202319,
            "total_time" => "00:00:00.001",
            "best_lap" => 101.506,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231915,
            "driver_id" => 3,
            "race_id" => 202319,
            "total_time" => "00:00:00.001",
            "best_lap" => 99.366,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231916,
            "driver_id" => 44,
            "race_id" => 202319,
            "total_time" => "01:35:23.587",
            "best_lap" => 99.582,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231917,
            "driver_id" => 16,
            "race_id" => 202319,
            "total_time" => "01:35:46.024",
            "best_lap" => 101.025,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231918,
            "driver_id" => 14,
            "race_id" => 202319,
            "total_time" => null,
            "best_lap" => 99.954,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20231919,
            "driver_id" => 81,
            "race_id" => 202319,
            "total_time" => null,
            "best_lap" => 102.705,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20231920,
            "driver_id" => 31,
            "race_id" => 202319,
            "total_time" => null,
            "best_lap" => 104.789,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
