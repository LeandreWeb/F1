<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results202322Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 20232201,
            "driver_id" => 1,
            "race_id" => 202322,
            "total_time" => "1:29:08.289",
            "best_lap" => 85.614,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 20232202,
            "driver_id" => 16,
            "race_id" => 202322,
            "total_time" => "1:29:10.359",
            "best_lap" => 85.669,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 20232203,
            "driver_id" =>11,
            "race_id" => 202322,
            "total_time" => "1:29:10.530",
            "best_lap" => 85.939,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 20232204,
            "driver_id" =>31,
            "race_id" => 202322,
            "total_time" => "1:29:26.954",
            "best_lap" => 86.637,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 20232205,
            "driver_id" => 18,
            "race_id" => 202322,
            "total_time" => "1:29:28.356",
            "best_lap" => 86.584,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 20232206,
            "driver_id" => 55,
            "race_id" => 202322,
            "total_time" => "1:29:29.123",
            "best_lap" => 85.984,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 20232207,
            "driver_id" => 44,
            "race_id" => 202322,
            "total_time" => "1:29:30.044",
            "best_lap" => 85.716,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 20232208,
            "driver_id" => 63,
            "race_id" => 202322,
            "total_time" => "1:29:31.380",
            "best_lap" => 86.071,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 20232209,
            "driver_id" => 14,
            "race_id" => 202322,
            "total_time" => "1:29:34.253",
            "best_lap" => 86.559,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 20232210,
            "driver_id" => 81,
            "race_id" => 202322,
            "total_time" => "1:29:37.785",
            "best_lap" => 85.490,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 20232211,
            "driver_id" => 10,
            "race_id" => 202322,
            "total_time" => "1:29:42.559",
            "best_lap" => 86.913,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232212,
            "driver_id" => 23,
            "race_id" => 202322,
            "total_time" => "1:29:51.687 ",
            "best_lap" => 87.357,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232213,
            "driver_id" => 20,
            "race_id" => 202322,
            "total_time" => "1:29:53.114",
            "best_lap" => 87.455,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232214,
            "driver_id" => 3,
            "race_id" => 202322,
            "total_time" => "1:29:56.814",
            "best_lap" => 87.108,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232215,
            "driver_id" => 24,
            "race_id" => 202322,
            "total_time" => "1:29:58.451",
            "best_lap" => 87.375,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232216,
            "driver_id" => 2,
            "race_id" => 202322,
            "total_time" => "1:29:59.171",
            "best_lap" => 87.740,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232217,
            "driver_id" => 77,
            "race_id" => 202322,
            "total_time" => "1:30:33.639",
            "best_lap" => 87.562,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232218,
            "driver_id" => 22,
            "race_id" => 202322,
            "total_time" => null,
            "best_lap" => 87.587,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20232219,
            "driver_id" => 27,
            "race_id" => 202322,
            "total_time" => null,
            "best_lap" => 87.565,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20232220,
            "driver_id" => 4,
            "race_id" => 202322,
            "total_time" => null,
            "best_lap" => 119.327,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
