<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results12Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 1201,
            "driver_id" => 1,
            "race_id" => 12,
            "total_time" => "01:38:08.634",
            "best_lap" => 82.234,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 1202,
            "driver_id" => 4,
            "race_id" => 12,
            "total_time" => "01:38:42.365",
            "best_lap" => 83.385,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 1203,
            "driver_id" => 11,
            "race_id" => 12,
            "total_time" => "01:38:46.237",
            "best_lap" => 83.533,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 1204,
            "driver_id" => 44,
            "race_id" => 12,
            "total_time" => "01:38:47.768",
            "best_lap" => 83.429,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 1205,
            "driver_id" => 81,
            "race_id" => 12,
            "total_time" => "01:39:11.206",
            "best_lap" => 84.503,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 1206,
            "driver_id" => 63,
            "race_id" => 12,
            "total_time" => "01:39:14.459 ",
            "best_lap" => 84.254,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 1207,
            "driver_id" => 16,
            "race_id" => 12,
            "total_time" => "01:39:19.951",
            "best_lap" => 84.451,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 1208,
            "driver_id" => 55,
            "race_id" => 12,
            "total_time" => "01:39:20.707",
            "best_lap" => 84.177,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 1209,
            "driver_id" => 14,
            "race_id" => 12,
            "total_time" => "01:39:24.343",
            "best_lap" => 84.181,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 1210,
            "driver_id" => 18,
            "race_id" => 12,
            "total_time" => "00:00:00.01",
            "best_lap" => 85.228,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 1211,
            "driver_id" => 23,
            "race_id" => 12,
            "total_time" => "00:00:00.01",
            "best_lap" => 84.137,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1212,
            "driver_id" => 77,
            "race_id" => 12,
            "total_time" => "00:00:00.01",
            "best_lap" => 85.228,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1213,
            "driver_id" => 3,
            "race_id" => 12,
            "total_time" => "00:00:00.01",
            "best_lap" => 87.273,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1214,
            "driver_id" => 27,
            "race_id" => 12,
            "total_time" => "00:00:00.01",
            "best_lap" => 85.485,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1215,
            "driver_id" => 22,
            "race_id" => 12,
            "total_time" => "00:00:00.01",
            "best_lap" => 85.200,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1216,
            "driver_id" => 24,
            "race_id" => 12,
            "total_time" => "00:00:00.01",
            "best_lap" => 82.286,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1217,
            "driver_id" => 20,
            "race_id" => 12,
            "total_time" => "00:00:00.01",
            "best_lap" => 85.369,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1218,
            "driver_id" => 2,
            "race_id" => 12,
            "total_time" => null,
            "best_lap" => null,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 1219,
            "driver_id" => 10,
            "race_id" => 12,
            "total_time" => null,
            "best_lap" => null,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 1220,
            "driver_id" => 10,
            "race_id" => 12,
            "total_time" => null,
            "best_lap" => null,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
