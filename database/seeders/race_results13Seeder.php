<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results13Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 1301,
            "driver_id" => 1,
            "race_id" => 13,
            "total_time" => "01:22:30.450",
            "best_lap" => 108.922,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 1302,
            "driver_id" => 11,
            "race_id" => 13,
            "total_time" => "01:22:52.755",
            "best_lap" => 110.308,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 1303,
            "driver_id" => 16,
            "race_id" => 13,
            "total_time" => "01:23:02.709",
            "best_lap" => 110.436,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 1304,
            "driver_id" => 44,
            "race_id" => 13,
            "total_time" => "01:23:20.121",
            "best_lap" => 107.305,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 1305,
            "driver_id" => 14,
            "race_id" => 13,
            "total_time" => "01:23:26.634",
            "best_lap" => 110.938,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 1306,
            "driver_id" => 63,
            "race_id" => 13,
            "total_time" => "01:23:33.551",
            "best_lap" => 110.603,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 1307,
            "driver_id" => 4,
            "race_id" => 13,
            "total_time" => "01:23:44.169",
            "best_lap" => 111.682,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 1308,
            "driver_id" => 31,
            "race_id" => 13,
            "total_time" => "01:23:45.169",
            "best_lap" => 110.439,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 1309,
            "driver_id" => 18,
            "race_id" => 13,
            "total_time" => "01:23:50.790",
            "best_lap" => 111.297,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 1310,
            "driver_id" => 22,
            "race_id" => 13,
            "total_time" => "01:23:51.671 ",
            "best_lap" => 111.394,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 1311,
            "driver_id" => 10,
            "race_id" => 13,
            "total_time" => "01:23:54.534",
            "best_lap" => 110.938,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1312,
            "driver_id" => 77,
            "race_id" => 13,
            "total_time" => "01:23:56.641",
            "best_lap" => 110.515,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1313,
            "driver_id" => 24,
            "race_id" => 13,
            "total_time" => "01:24:25.891",
            "best_lap" => 110.188,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1314,
            "driver_id" => 23,
            "race_id" => 13,
            "total_time" => "01:24:26.634",
            "best_lap" => 109.841,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1315,
            "driver_id" => 20,
            "race_id" => 13,
            "total_time" => "01:24:32.204",
            "best_lap" => 110.993,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1316,
            "driver_id" => 3,
            "race_id" => 13,
            "total_time" => "01:24:33.521",
            "best_lap" => 110.994,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1317,
            "driver_id" => 2,
            "race_id" => 13,
            "total_time" => "01:24:34.926",
            "best_lap" => 110.486,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1318,
            "driver_id" => 27,
            "race_id" => 13,
            "total_time" => "01:24:40.900",
            "best_lap" => 109.907,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 1319,
            "driver_id" => 55,
            "race_id" => 13,
            "total_time" => null,
            "best_lap" => 113.138,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 1320,
            "driver_id" => 81,
            "race_id" => 13,
            "total_time" => null,
            "best_lap" => null,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
