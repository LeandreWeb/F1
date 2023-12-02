<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results20Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults = [];

        $raceResults[] = [
            "id" => 2001,
            "driver_id" => 1,
            "race_id" => 20,
            "total_time" => "02:02:30.814",
            "best_lap" => 81.644,
            "position" => 1,
            "points" => 25,
        ];
        $raceResults[] = [
            "id" => 2002,
            "driver_id" => 44,
            "race_id" => 20,
            "total_time" => "02:02:44.689",
            "best_lap" => 81.334,
            "position" => 2,
            "points" => 18,
        ];
        $raceResults[] = [
            "id" => 2003,
            "driver_id" => 16,
            "race_id" => 20,
            "total_time" => "02:02:53.938",
            "best_lap" => 82.332,
            "position" => 3,
            "points" => 15,
        ];
        $raceResults[] = [
            "id" => 2004,
            "driver_id" => 55,
            "race_id" => 20,
            "total_time" => "02:02:57.968",
            "best_lap" => 82.539,
            "position" => 4,
            "points" => 12,
        ];
        $raceResults[] = [
            "id" => 2005,
            "driver_id" => 4,
            "race_id" => 20,
            "total_time" => "02:03:04.080",
            "best_lap" => 81.944,
            "position" => 5,
            "points" => 10,
        ];
        $raceResults[] = [
            "id" => 2006,
            "driver_id" => 63,
            "race_id" => 20,
            "total_time" => "02:03:11.834",
            "best_lap" => 82.780,
            "position" => 6,
            "points" => 8,
        ];
        $raceResults[] = [
            "id" => 2007,
            "driver_id" => 3,
            "race_id" => 20,
            "total_time" => "02:03:12.384",
            "best_lap" => 82.679,
            "position" => 7,
            "points" => 6
        ];
        $raceResults[] = [
            "id" => 2008,
            "driver_id" => 81,
            "race_id" => 20,
            "total_time" => "02:03:13.918",
            "best_lap" => 82.760,
            "position" => 8,
            "points" => 4
        ];
        $raceResults[] = [
            "id" => 2009,
            "driver_id" => 23,
            "race_id" => 20,
            "total_time" => "02:03:19.387",
            "best_lap" => 82.773,
            "position" => 9,
            "points" => 2
        ];
        $raceResults[] = [
            "id" => 2010,
            "driver_id" => 31,
            "race_id" => 20,
            "total_time" => "02:03:33.693",
            "best_lap" => 82.976,
            "position" => 10,
            "points" => 1
        ];
        $raceResults[] = [
            "id" => 2011,
            "driver_id" => 10,
            "race_id" => 20,
            "total_time" => "02:03:37.022",
            "best_lap" => 83.230,
            "position" => 11,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2012,
            "driver_id" => 22,
            "race_id" => 20,
            "total_time" => "02:03:49.796",
            "best_lap" => 82.501,
            "position" => 12,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2013,
            "driver_id" => 27,
            "race_id" => 20,
            "total_time" => "02:03:51.123",
            "best_lap" => 83.222,
            "position" => 13,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2014,
            "driver_id" => 24,
            "race_id" => 20,
            "total_time" => "02:03:52.490",
            "best_lap" => 83.567,
            "position" => 14,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2015,
            "driver_id" => 77,
            "race_id" => 20,
            "total_time" => "02:03:56.411",
            "best_lap" => 83.166,
            "position" => 15,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2016,
            "driver_id" => 2,
            "race_id" => 20,
            "total_time" => null,
            "best_lap" => 83.003,
            "position" => 16,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2017,
            "driver_id" => 18,
            "race_id" => 20,
            "total_time" => null,
            "best_lap" => 83.257,
            "position" => 17,
            "points" => 0
        ];
        $raceResults[] = [
            "id" => 2018,
            "driver_id" => 14,
            "race_id" => 20,
            "total_time" => null,
            "best_lap" => 83.531,
            "position" => 18,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 2019,
            "driver_id" => 20,
            "race_id" => 20,
            "total_time" => null,
            "best_lap" => 83.146,
            "position" => 19,
            "points" => null
        ];
        $raceResults[] = [
            "id" => 2020,
            "driver_id" => 11,
            "race_id" => 20,
            "total_time" => null,
            "best_lap" => null,
            "position" => 20,
            "points" => null
        ];

        Db::table('race_results')->insert($raceResults);
    }
}
