<?php

namespace Database\Seeders\Seeders2024\RacesSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class race_results202403Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 20240301,
            "driver_id" => 55,
            "race_id" => 202403,
            "total_time" => "01:20:26.843", //"01:33:56.736"
            "best_lap" => 80.031, // 096.236
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 20240302,
            "driver_id" => 16,
            "race_id" => 202403,
            "total_time" => "01:20:29.209",
            "best_lap" => 79.813,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 20240303,
            "driver_id" => 4,
            "race_id" => 202403,
            "total_time" => "01:20:32.747",
            "best_lap" => 79.915,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 20240304,
            "driver_id" => 81,
            "race_id" => 202403,
            "total_time" => "01:21:02.613 ",
            "best_lap" => 80.199,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 20240305,
            "driver_id" => 11,
            "race_id" => 202403,
            "total_time" => "01:21:23.152",
            "best_lap" => 80.388,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 20240306,
            "driver_id" => 18,
            "race_id" => 202403,
            "total_time" => "01:21:59.065",
            "best_lap" => 80.930,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 20240307,
            "driver_id" => 22,
            "race_id" => 202403,
            "total_time" => "01:22:02.444",
            "best_lap" => 81.134,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 20240308,
            "driver_id" => 14,
            "race_id" => 202403,
            "total_time" => "01:22:07.835",
            "best_lap" => 80.493,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 20240309,
            "driver_id" => 27,
            "race_id" => 202403,
            "total_time" => "01:22:11.396",
            "best_lap" => 81.145,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 20240310,
            "driver_id" => 20,
            "race_id" => 202403,
            "total_time" => "00:00:00.001",
            "best_lap" => 81.082,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 20240311,
            "driver_id" => 23,
            "race_id" => 202403,
            "total_time" => "00:00:00.001",
            "best_lap" => 81.618,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20240312,
            "driver_id" => 3,
            "race_id" => 202403,
            "total_time" => "00:00:00.001",
            "best_lap" => 81.239,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20240313,
            "driver_id" => 10,
            "race_id" => 202403,
            "total_time" => "00:00:00.001",
            "best_lap" => 81.090,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20240314,
            "driver_id" => 77,
            "race_id" => 202403,
            "total_time" => "00:00:00.001",
            "best_lap" => 81.422,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20240315,
            "driver_id" => 24,
            "race_id" => 202403,
            "total_time" => "00:00:00.001",
            "best_lap" => 81.327,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20240316,
            "driver_id" => 31,
            "race_id" => 202403,
            "total_time" => "00:00:00.001",
            "best_lap" => 91.354,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20240317,
            "driver_id" => 63,
            "race_id" => 202403,
            "total_time" => null,
            "best_lap" => 80.284,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20240318,
            "driver_id" => 44,
            "race_id" => 202403,
            "total_time" => null,
            "best_lap" => 82.444,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20240319,
            "driver_id" => 1,
            "race_id" => 202403,
            "total_time" => null,
            "best_lap" => 83.115,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20240320,
            "driver_id" => 2,
            "race_id" => 202403,
            "total_time" => null,
            "best_lap" => null,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
