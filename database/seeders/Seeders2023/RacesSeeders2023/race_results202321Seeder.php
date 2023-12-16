<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results202321Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 20232101,
            "driver_id" => 1,
            "race_id" => 202321,
            "total_time" => "1:56:48.894",
            "best_lap" => 73.422,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 20232102,
            "driver_id" => 4,
            "race_id" => 202321,
            "total_time" => "1:56:57.171",
            "best_lap" => 72.486,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 20232103,
            "driver_id" => 14,
            "race_id" => 202321,
            "total_time" => "1:57:23.049",
            "best_lap" => 74.442,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 20232104,
            "driver_id" => 11,
            "race_id" => 202321,
            "total_time" => "1:57:23.102",
            "best_lap" => 74.124,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 20232105,
            "driver_id" => 18,
            "race_id" => 202321,
            "total_time" => "1:57:28.739",
            "best_lap" => 74.007,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 20232106,
            "driver_id" => 55,
            "race_id" => 202321,
            "total_time" => "1:57:38.082",
            "best_lap" => 77.406,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 20232107,
            "driver_id" => 10,
            "race_id" => 202321,
            "total_time" => "1:57:43.977",
            "best_lap" => 74.521,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 20232108,
            "driver_id" => 44,
            "race_id" => 202321,
            "total_time" => "1:57:50.743",
            "best_lap" => 74.739,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 20232109,
            "driver_id" => 22,
            "race_id" => 202321,
            "total_time" => "1:57:57.764",
            "best_lap" => 74.231,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 20232110,
            "driver_id" => 31,
            "race_id" => 202321,
            "total_time" => "00:00:00.001",
            "best_lap" => 74.206,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 20232111,
            "driver_id" => 2,
            "race_id" => 202321,
            "total_time" => "00:00:00.001",
            "best_lap" => 75.738,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232112,
            "driver_id" => 27,
            "race_id" => 202321,
            "total_time" => "00:00:00.001",
            "best_lap" => 75.036,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232113,
            "driver_id" => 3,
            "race_id" => 202321,
            "total_time" => "00:00:00.001",
            "best_lap" => 73.866,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232114,
            "driver_id" => 81,
            "race_id" => 202321,
            "total_time" => "00:00:00.002",
            "best_lap" => 74.310,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232115,
            "driver_id" => 63,
            "race_id" => 202321,
            "total_time" => null,
            "best_lap" => 74.934,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232116,
            "driver_id" => 77,
            "race_id" => 202321,
            "total_time" => null,
            "best_lap" => 75.731,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232117,
            "driver_id" => 24,
            "race_id" => 202321,
            "total_time" => null,
            "best_lap" => 76.232,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20232118,
            "driver_id" => 20,
            "race_id" => 202321,
            "total_time" => null,
            "best_lap" => null,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20232119,
            "driver_id" => 23,
            "race_id" => 202321,
            "total_time" => null,
            "best_lap" => null,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20232120,
            "driver_id" => 16,
            "race_id" => 202321,
            "total_time" => null,
            "best_lap" => null,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
