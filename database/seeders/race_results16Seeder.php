<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results16Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 1601,
            "driver_id" => 55,
            "race_id" => 16,
            "total_time" => "01:46:37.418",
            "best_lap" => 97.666,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 1602,
            "driver_id" => 4,
            "race_id" => 16,
            "total_time" => "02:24:08.155",
            "best_lap" => 98.046,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 1603,
            "driver_id" => 44,
            "race_id" => 16,
            "total_time" => "02:24:11.469",
            "best_lap" => 95.867,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 1604,
            "driver_id" => 16,
            "race_id" => 16,
            "total_time" => "02:24:14.479 ",
            "best_lap" => 96.575,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 1605,
            "driver_id" => 1,
            "race_id" => 16,
            "total_time" => "02:24:16.952",
            "best_lap" => 98.275,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 1606,
            "driver_id" => 10,
            "race_id" => 16,
            "total_time" => "02:24:17.620",
            "best_lap" => 98.277,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 1607,
            "driver_id" => 81,
            "race_id" => 16,
            "total_time" => "02:24:17.643",
            "best_lap" => 98.492,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 1608,
            "driver_id" => 11,
            "race_id" => 16,
            "total_time" => "02:24:19.566",
            "best_lap" => 97.108,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 1609,
            "driver_id" => 40,
            "race_id" => 16,
            "total_time" => "02:24:20.991",
            "best_lap" => 99.028,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 1610,
            "driver_id" => 20,
            "race_id" => 16,
            "total_time" => "02:24:22.757",
            "best_lap" => 98.107,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 1611,
            "driver_id" => 23,
            "race_id" => 16,
            "total_time" => "02:24:24.498",
            "best_lap" => 97.342,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1612,
            "driver_id" => 24,
            "race_id" => 16,
            "total_time" => "02:24:25.251",
            "best_lap" => 99.316,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1613,
            "driver_id" => 27,
            "race_id" => 16,
            "total_time" => "02:24:30.558",
            "best_lap" => 99.923,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1614,
            "driver_id" => 2,
            "race_id" => 16,
            "total_time" => "02:24:30.921",
            "best_lap" => 98.531,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1615,
            "driver_id" => 14,
            "race_id" => 16,
            "total_time" => "02:24:31.799",
            "best_lap" => 96.456,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1616,
            "driver_id" => 63,
            "race_id" => 16,
            "total_time" => null,
            "best_lap" => 96.273,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1617,
            "driver_id" => 77,
            "race_id" => 16,
            "total_time" => null,
            "best_lap" => 98.075,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 1618,
            "driver_id" => 31,
            "race_id" => 16,
            "total_time" => null,
            "best_lap" => 99.930,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 1619,
            "driver_id" => 22,
            "race_id" => 16,
            "total_time" => null,
            "best_lap" => null,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 1620,
            "driver_id" => 18,
            "race_id" => 16,
            "total_time" => null,
            "best_lap" => null,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
