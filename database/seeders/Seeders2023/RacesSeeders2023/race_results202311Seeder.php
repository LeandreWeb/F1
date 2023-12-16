<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results202311Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" =>20231101,
            "driver_id" => 1,
            "race_id" => 202311,
            "total_time" => "01:25:16.938",
            "best_lap" => 90.275,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" =>20231102,
            "driver_id" => 4,
            "race_id" => 202311,
            "total_time" => "01:25:20.736",
            "best_lap" => 91.251,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" =>20231103,
            "driver_id" => 44,
            "race_id" => 202311,
            "total_time" => "01:25:23.721",
            "best_lap" => 91.823,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" =>20231104,
            "driver_id" => 81,
            "race_id" => 202311,
            "total_time" => "01:25:24.714",
            "best_lap" => 90.941,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" =>20231105,
            "driver_id" => 63,
            "race_id" => 202311,
            "total_time" => "01:25:28.144",
            "best_lap" => 91.433,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" =>20231106,
            "driver_id" => 11,
            "race_id" => 202311,
            "total_time" => "01:25:29.820",
            "best_lap" => 91.188,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" =>20231107,
            "driver_id" => 14,
            "race_id" => 202311,
            "total_time" => "01:25:34.131",
            "best_lap" => 91.711,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" =>20231108,
            "driver_id" => 23,
            "race_id" => 202311,
            "total_time" => "01:25:34.816",
            "best_lap" => 91.809,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" =>20231109,
            "driver_id" => 16,
            "race_id" => 202311,
            "total_time" => "01:25:35.727 ",
            "best_lap" => 92.257,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" =>20231110,
            "driver_id" => 55,
            "race_id" => 202311,
            "total_time" => "01:25:36.486",
            "best_lap" => 91.880,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" =>20231111,
            "driver_id" => 2,
            "race_id" => 202311,
            "total_time" => "01:25:40.570",
            "best_lap" => 91.984,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" =>20231112,
            "driver_id" => 77,
            "race_id" => 202311,
            "total_time" => "01:25:42.768",
            "best_lap" => 91.852,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" =>20231113,
            "driver_id" => 27,
            "race_id" => 202311,
            "total_time" => "01:25:43.601",
            "best_lap" => 91.776,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" =>20231114,
            "driver_id" => 18,
            "race_id" => 202311,
            "total_time" => "01:25:44.421",
            "best_lap" => 92.138,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" =>20231115,
            "driver_id" => 24,
            "race_id" => 202311,
            "total_time" => "01:25:46.758",
            "best_lap" => 92.114,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" =>20231116,
            "driver_id" => 22,
            "race_id" => 202311,
            "total_time" => "01:25:48.163",
            "best_lap" => 92.780,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" =>20231117,
            "driver_id" => 21,
            "race_id" => 202311,
            "total_time" => "01:25:50.066",
            "best_lap" => 92.420,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" =>20231118,
            "driver_id" => 10,
            "race_id" => 202311,
            "total_time" => null,
            "best_lap" => null,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" =>20231119,
            "driver_id" => 20,
            "race_id" => 202311,
            "total_time" => null,
            "best_lap" => null,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" =>20231120,
            "driver_id" => 31,
            "race_id" => 202311,
            "total_time" => null,
            "best_lap" => null,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
