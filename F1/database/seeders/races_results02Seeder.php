<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class races_results02Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $racesResults=[];

        $racesResults[]=[
            "id"=>201,
            "drivers_id"=>11,
            "races_id"=>2,
            "total_time"=>"01:21:14.894",
            "best-lap"=>"00:01:32.188",
            "position"=>1,
            "points"=>25,
        ];
        $racesResults[]=[
            "id"=>202,
            "drivers_id"=>1,
            "races_id"=>2,
            "total_time"=>"01:34:08.723", //+5.355
            "best-lap"=>"00:01:31.906",
            "position"=>2,
            "points"=>18,
        ];
        $racesResults[]=[
            "id"=>203,
            "drivers_id"=>14,
            "races_id"=>2,
            "total_time"=>"01:34:35.373",
            "best-lap"=>"00:01:32.240", //+20.728
            "position"=>3,
            "points"=>15,
        ];
        $racesResults[]=[
            "id"=>204,
            "drivers_id"=>63,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+25.866
            "best-lap"=>"00:01:32.433",
            "position"=>4,
            "points"=>12,
        ];
        $racesResults[]=[
            "id"=>205,
            "drivers_id"=>44,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+31.065
            "best-lap"=>"00:01:32.941",
            "position"=>5,
            "points"=>10,
        ];
        $racesResults[]=[
            "id"=>206,
            "drivers_id"=>55,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+35.876
            "best-lap"=>"00:01:32.822",
            "position"=>6,
            "points"=>8,
        ];
        $racesResults[]=[
            "id"=>207,
            "drivers_id"=>16,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+43.162
            "best-lap"=>"00:01:33.056",
            "position"=>7,
            "points"=>6
        ];
        $racesResults[]=[
            "id"=> 208,
            "drivers_id"=>31,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+52.832
            "best-lap"=>"00:01:33.222",
            "position"=>8,
            "points"=>4
        ];
        $racesResults[]=[
            "id"=> 209,
            "drivers_id"=>10,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+54.747
            "best-lap"=>"00:01:33.392",
            "position"=>9,
            "points"=>2
        ];
        $racesResults[]=[
            "id"=> 210,
            "drivers_id"=>20,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+64.826
            "best-lap"=>"00:01:33.374",
            "position"=>10,
            "points"=>1
        ];
        $racesResults[]=[
            "id"=> 211,
            "drivers_id"=>22,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+67.494
            "best-lap"=>"00:01:33.931",
            "position"=>11,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 212,
            "drivers_id"=>27,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+70.588
            "best-lap"=>"00:01:33.780",
            "position"=>12,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 213,
            "drivers_id"=>24,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+76.060
            "best-lap"=>"00:01:33.931",
            "position"=>13,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 214,
            "drivers_id"=>21,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+77.478
            "best-lap"=>"00:01:33.609",
            "position"=>14,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 215,
            "drivers_id"=>81,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+85.021
            "best-lap"=>"00:01:34.287",
            "position"=>15,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 216,
            "drivers_id"=>2,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+86.293
            "best-lap"=>"00:01:34.469",
            "position"=>16,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 217,
            "drivers_id"=>4,
            "races_id"=>2,
            "total_time"=>"01:34:35.373", //+86.445
            "best-lap"=>"00:01:34.122",
            "position"=>17,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 218,
            "drivers_id"=>77,
            "races_id"=>2,
            "total_time"=>"00:00:01.000", //+1lap
            "best-lap"=>"00:01:34.384",
            "position"=>18,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 219,
            "drivers_id"=>23,
            "races_id"=>2,
            "total_time"=>null, //+1
            "best-lap"=>null,
            "position"=>null,
            "points"=>null
        ];
        $racesResults[]=[
            "id"=> 220,
            "drivers_id"=>18,
            "races_id"=>2,
            "total_time"=>null, //+1
            "best-lap"=>null,
            "position"=>null,
            "points"=>null
        ];
        

        
        Db::table('races_results')->insert($racesResults);
    }
}
