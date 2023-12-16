<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results202317Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 20231701,
            "driver_id" => 1,
            "race_id" => 202317,
            "total_time" => "1:30:58.421",
            "best_lap" => 94.183,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 20231702,
            "driver_id" => 4,
            "race_id" => 202317,
            "total_time" => "01:31:17.808",
            "best_lap" => 95.247,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 20231703,
            "driver_id" => 81,
            "race_id" => 202317,
            "total_time" => "01:31:34.915",
            "best_lap" => 96.328,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 20231704,
            "driver_id" => 16,
            "race_id" => 202317,
            "total_time" => "01:31:42.419",
            "best_lap" => 96.362,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 20231705,
            "driver_id" => 44,
            "race_id" => 202317,
            "total_time" => "01:31:47.797",
            "best_lap" => 95.611,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 20231706,
            "driver_id" => 55,
            "race_id" => 202317,
            "total_time" => "01:31:48.642",
            "best_lap" => 96.187,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 20231707,
            "driver_id" => 63,
            "race_id" => 202317,
            "total_time" => "01:31:56.080",
            "best_lap" => 97.653,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 20231708,
            "driver_id" => 14,
            "race_id" => 202317,
            "total_time" => "01:32:13.146",
            "best_lap" => 97.203,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 20231709,
            "driver_id" => 31,
            "race_id" => 202317,
            "total_time" => "01:32:18.099",
            "best_lap" => 97.398,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 20231710,
            "driver_id" => 10,
            "race_id" => 202317,
            "total_time" => "01:32:21.576",
            "best_lap" => 96.371,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 20231711,
            "driver_id" => 40,
            "race_id" => 202317,
            "total_time" => "00:00:00.001",
            "best_lap" => 98.267,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231712,
            "driver_id" => 22,
            "race_id" => 202317,
            "total_time" => "00:00:00.001",
            "best_lap" => 97.768,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231713,
            "driver_id" => 24,
            "race_id" => 202317,
            "total_time" => "00:00:00.001",
            "best_lap" => 97.791,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231714,
            "driver_id" => 27,
            "race_id" => 202317,
            "total_time" => "00:00:00.001",
            "best_lap" => 97.250,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231715,
            "driver_id" => 20,
            "race_id" => 202317,
            "total_time" => "00:00:00.001",
            "best_lap" => 97.842,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231716,
            "driver_id" => 23,
            "race_id" => 202317,
            "total_time" => null,
            "best_lap" => 99.185,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231717,
            "driver_id" => 2,
            "race_id" => 202317,
            "total_time" => "02:24:59.165",
            "best_lap" => 98.848,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 20231718,
            "driver_id" => 18,
            "race_id" => 202317,
            "total_time" => null,
            "best_lap" => 99.050,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20231719,
            "driver_id" => 11,
            "race_id" => 202317,
            "total_time" => null,
            "best_lap" => 99.704,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 20231720,
            "driver_id" => 77,
            "race_id" => 202317,
            "total_time" => null,
            "best_lap" => 122.755,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
