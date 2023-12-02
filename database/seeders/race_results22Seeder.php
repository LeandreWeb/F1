<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results22Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 2201,
            "driver_id" => 1,
            "race_id" => 22,
            "total_time" => "1:29:08.289",
            "best_lap" => 85.614,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 2202,
            "driver_id" => 16,
            "race_id" => 22,
            "total_time" => "1:29:10.359",
            "best_lap" => 85.669,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 2203,
            "driver_id" =>11,
            "race_id" => 22,
            "total_time" => "1:29:10.530",
            "best_lap" => 85.939,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 2204,
            "driver_id" =>31,
            "race_id" => 22,
            "total_time" => "1:29:26.954",
            "best_lap" => 86.637,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 2205,
            "driver_id" => 18,
            "race_id" => 22,
            "total_time" => "1:29:28.356",
            "best_lap" => 86.584,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 2206,
            "driver_id" => 55,
            "race_id" => 22,
            "total_time" => "1:29:29.123",
            "best_lap" => 85.984,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 2207,
            "driver_id" => 44,
            "race_id" => 22,
            "total_time" => "1:29:30.044",
            "best_lap" => 85.716,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 2208,
            "driver_id" => 63,
            "race_id" => 22,
            "total_time" => "1:29:31.380",
            "best_lap" => 86.071,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 2209,
            "driver_id" => 14,
            "race_id" => 22,
            "total_time" => "1:29:34.253",
            "best_lap" => 86.559,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 2210,
            "driver_id" => 81,
            "race_id" => 22,
            "total_time" => "1:29:37.785",
            "best_lap" => 85.490,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 2211,
            "driver_id" => 10,
            "race_id" => 22,
            "total_time" => "1:29:42.559",
            "best_lap" => 86.913,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2212,
            "driver_id" => 23,
            "race_id" => 22,
            "total_time" => "1:29:51.687 ",
            "best_lap" => 87.357,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2213,
            "driver_id" => 20,
            "race_id" => 22,
            "total_time" => "1:29:53.114",
            "best_lap" => 87.455,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2214,
            "driver_id" => 3,
            "race_id" => 22,
            "total_time" => "1:29:56.814",
            "best_lap" => 87.108,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2215,
            "driver_id" => 24,
            "race_id" => 22,
            "total_time" => "1:29:58.451",
            "best_lap" => 87.375,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2216,
            "driver_id" => 2,
            "race_id" => 22,
            "total_time" => "1:29:59.171",
            "best_lap" => 87.740,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2217,
            "driver_id" => 77,
            "race_id" => 22,
            "total_time" => "1:30:33.639",
            "best_lap" => 87.562,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2218,
            "driver_id" => 22,
            "race_id" => 22,
            "total_time" => null,
            "best_lap" => 87.587,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 2219,
            "driver_id" => 27,
            "race_id" => 22,
            "total_time" => null,
            "best_lap" => 87.565,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 2220,
            "driver_id" => 4,
            "race_id" => 22,
            "total_time" => null,
            "best_lap" => 119.327,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
