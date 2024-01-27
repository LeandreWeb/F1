<?php

namespace Database\Seeders\Seeders2023\RacesSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Driver;


class race_results202302Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceResults=[];

        $raceResults[]=[
            "id"=>20230201,
            "driver_id"=>11,
            "race_id"=>202302,
            "total_time"=>"01:21:14.894",
            "best_lap"=>092.188,
            "position"=>1,
            "points"=>25,
        ];
        $raceResults[]=[
            "id"=>20230202,
            "driver_id"=>1,
            "race_id"=>202302,
            "total_time"=>"01:34:08.723", //+5.355
            "best_lap"=>091.906,
            "position"=>2,
            "points"=>18,
        ];
        $raceResults[]=[
            "id"=>20230203,
            "driver_id"=>14,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+20.728
            "best_lap"=>092.240, 
            "position"=>3,
            "points"=>15,
        ];
        $raceResults[]=[
            "id"=>20230204,
            "driver_id"=>63,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+25.866
            "best_lap"=>092.433,
            "position"=>4,
            "points"=>12,
        ];
        $raceResults[]=[
            "id"=>20230205,
            "driver_id"=>44,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+31.065
            "best_lap"=>092.941,
            "position"=>5,
            "points"=>10,
        ];
        $raceResults[]=[
            "id"=>20230206,
            "driver_id"=>55,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+35.876
            "best_lap"=>092.822,
            "position"=>6,
            "points"=>8,
        ];
        $raceResults[]=[
            "id"=>20230207,
            "driver_id"=>16,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+43.162
            "best_lap"=>093.056,
            "position"=>7,
            "points"=>6
        ];
        $raceResults[]=[
            "id"=>20230208,
            "driver_id"=>31,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+52.832
            "best_lap"=>093.222,
            "position"=>8,
            "points"=>4
        ];
        $raceResults[]=[
            "id"=>20230209,
            "driver_id"=>10,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+54.747
            "best_lap"=>093.392,
            "position"=>9,
            "points"=>2
        ];
        $raceResults[]=[
            "id"=>20230210,
            "driver_id"=>20,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+64.826
            "best_lap"=>093.374,
            "position"=>10,
            "points"=>1
        ];
        $raceResults[]=[
            "id"=>20230211,
            "driver_id"=>22,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+67.494
            "best_lap"=>093.931,
            "position"=>11,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230212,
            "driver_id"=>27,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+70.588
            "best_lap"=>093.780,
            "position"=>12,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230213,
            "driver_id"=>24,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+76.060
            "best_lap"=>093.931,
            "position"=>13,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230214,
            "driver_id"=>21,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+77.478
            "best_lap"=>093.609,
            "position"=>14,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230215,
            "driver_id"=>81,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+85.021
            "best_lap"=>094.287,
            "position"=>15,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230216,
            "driver_id"=>2,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+86.293
            "best_lap"=>094.469,
            "position"=>16,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230217,
            "driver_id"=>4,
            "race_id"=>202302,
            "total_time"=>"01:34:35.373", //+86.445
            "best_lap"=>094.122,
            "position"=>17,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230218,
            "driver_id"=>77,
            "race_id"=>202302,
            "total_time"=>"00:00:01.000", //+1lap
            "best_lap"=>094.384,
            "position"=>18,
            "points"=>0
        ];
        $raceResults[]=[
            "id"=>20230219,
            "driver_id"=>23,
            "race_id"=>202302,
            "total_time"=>null, //+1
            "best_lap"=>null,
            "position"=>null,
            "points"=>null
        ];
        $raceResults[]=[
            "id"=>20230220,
            "driver_id"=>18,
            "race_id"=>202302,
            "total_time"=>null, //+1
            "best_lap"=>null,
            "position"=>null,
            "points"=>null
        ];
        
        

        
        
        Db::table('race_results')->insert($raceResults);
    }
}
