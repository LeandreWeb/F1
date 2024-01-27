<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results202318Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 20231801,
            "driver_id" => 1,
            "race_id" => 202318,
            "total_time" => "02:24:04.411",
            "best_lap" => 15.001,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 20231802,
            "driver_id" => 81,
            "race_id" => 202318,
            "total_time" => "02:24:08.155",
            "best_lap" => 73.837,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 20231803,
            "driver_id" => 4,
            "race_id" => 202318,
            "total_time" => "02:24:11.469",
            "best_lap" => 74.441,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 20231804,
            "driver_id" => 63,
            "race_id" => 202318,
            "total_time" => "02:24:14.479 ",
            "best_lap" => 74.231,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 20231805,
            "driver_id" => 16,
            "race_id" => 202318,
            "total_time" => "02:24:16.952",
            "best_lap" => 74.934,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 20231806,
            "driver_id" => 14,
            "race_id" => 202318,
            "total_time" => "02:24:17.620",
            "best_lap" => 73.904,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 20231807,
            "driver_id" => 31,
            "race_id" => 202318,
            "total_time" => "02:24:17.643",
            "best_lap" => 74.390,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 20231808,
            "driver_id" => 77,
            "race_id" => 202318,
            "total_time" => "02:24:19.566",
            "best_lap" => 74.468,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 20231809,
            "driver_id" => 24,
            "race_id" => 202318,
            "total_time" => "02:24:20.991",
            "best_lap" => 74.299,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 20231810,
            "driver_id" => 11,
            "race_id" => 202318,
            "total_time" => "02:24:22.757",
            "best_lap" => 74.570,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 20231811,
            "driver_id" => 18,
            "race_id" => 202318,
            "total_time" => "02:24:24.498",
            "best_lap" => 75.171,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231812,
            "driver_id" => 10,
            "race_id" => 202318,
            "total_time" => "02:24:25.251",
            "best_lap" => 74.472,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231813,
            "driver_id" => 23,
            "race_id" => 202318,
            "total_time" => "02:24:30.558",
            "best_lap" => 74.820,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231814,
            "driver_id" => 20,
            "race_id" => 202318,
            "total_time" => "02:24:30.921",
            "best_lap" => 75.489,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231815,
            "driver_id" => 22,
            "race_id" => 202318,
            "total_time" => "02:24:31.799",
            "best_lap" => 74.698,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231816,
            "driver_id" => 27,
            "race_id" => 202318,
            "total_time" => "02:24:34.304",
            "best_lap" => 76.253,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231817,
            "driver_id" => 40,
            "race_id" => 202318,
            "total_time" => "02:24:59.165",
            "best_lap" => 75.124,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231818,
            "driver_id" => 2,
            "race_id" => 202318,
            "total_time" => null,
            "best_lap" => 75.417,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20231819,
            "driver_id" => 44,
            "race_id" => 202318,
            "total_time" => null,
            "best_lap" => 77.277,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20231820,
            "driver_id" => 55,
            "race_id" => 202318,
            "total_time" => null,
            "best_lap" => 75.124,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
