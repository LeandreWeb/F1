<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class races_results01Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $racesResults=[];

        $racesResults[]=[
            "id"=>101,
            "drivers_id"=>1,
            "races_id"=>1,
            "total_time"=>"01:33:56.736",
            "best_lap"=>096.236,
            "position"=>1,
            "points"=>25,
        ];
        $racesResults[]=[
            "id"=>102,
            "drivers_id"=>11,
            "races_id"=>1,
            "total_time"=>"01:34:08.723",
            "best_lap"=>096.344,
            "position"=>2,
            "points"=>18,
        ];
        $racesResults[]=[
            "id"=>103,
            "drivers_id"=>14,
            "races_id"=>1,
            "total_time"=>"01:34:35.373",
            "best_lap"=>096.156,
            "position"=>3,
            "points"=>15,
        ];
        $racesResults[]=[
            "id"=>104,
            "drivers_id"=>55,
            "races_id"=>1,
            "total_time"=>"01:34:35.373", //+48.052
            "best_lap"=>097.130,
            "position"=>4,
            "points"=>12,
        ];
        $racesResults[]=[
            "id"=>105,
            "drivers_id"=>44,
            "races_id"=>1,
            "total_time"=>"01:34:35.373", //+50.977
            "best_lap"=>096.546,
            "position"=>5,
            "points"=>10,
        ];
        $racesResults[]=[
            "id"=>106,
            "drivers_id"=>18,
            "races_id"=>1,
            "total_time"=>"01:34:35.373", //+54.502
            "best_lap"=>096.546,
            "position"=>6,
            "points"=>8,
        ];
        $racesResults[]=[
            "id"=>107,
            "drivers_id"=>63,
            "races_id"=>1,
            "total_time"=>"01:34:35.373", //+55.873
            "best_lap"=>097.221,
            "position"=>7,
            "points"=>6
        ];
        $racesResults[]=[
            "id"=> 108,
            "drivers_id"=>77,
            "races_id"=>1,
            "total_time"=>"01:34:35.373", //+72.647
            "best_lap"=>097.379,
            "position"=>8,
            "points"=>4
        ];
        $racesResults[]=[
            "id"=> 109,
            "drivers_id"=>10,
            "races_id"=>1,
            "total_time"=>"01:34:35.373", //+73.753
            "best_lap"=>095.068,
            "position"=>9,
            "points"=>2
        ];
        $racesResults[]=[
            "id"=> 110,
            "drivers_id"=>23,
            "races_id"=>1,
            "total_time"=>"01:34:35.373", //+89.774
            "best_lap"=>097.144,
            "position"=>10,
            "points"=>1
        ];
        $racesResults[]=[
            "id"=> 111,
            "drivers_id"=>22,
            "races_id"=>1,
            "total_time"=>"01:34:35.373", //+90.870
            "best_lap"=>096.637,
            "position"=>11,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 112,
            "drivers_id"=>2,
            "races_id"=>1,
            "total_time"=>"00:00:01.000", //+1
            "best_lap"=>096.037,
            "position"=>12,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 113,
            "drivers_id"=>20,
            "races_id"=>1,
            "total_time"=>"00:00:01.000", //+1
            "best_lap"=>096.471,
            "position"=>13,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 114,
            "drivers_id"=>21,
            "races_id"=>1,
            "total_time"=>"00:00:01.000", //+1
            "best_lap"=>097.709,
            "position"=>14,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 115,
            "drivers_id"=>27,
            "races_id"=>1,
            "total_time"=>"00:00:01.000", //+1
            "best_lap"=>096.616,
            "position"=>15,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 116,
            "drivers_id"=>24,
            "races_id"=>1,
            "total_time"=>"00:00:01.000", //+1
            "best_lap"=>093.996,
            "position"=>16,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 117,
            "drivers_id"=>4,
            "races_id"=>1,
            "total_time"=>"00:00:02.000", //+2
            "best_lap"=>095.822,
            "position"=>17,
            "points"=>0
        ];
        $racesResults[]=[
            "id"=> 118,
            "drivers_id"=>31,
            "races_id"=>1,
            "total_time"=>null, //+1
            "best_lap"=>null,
            "position"=>null,
            "points"=>null
        ];
        $racesResults[]=[
            "id"=> 119,
            "drivers_id"=>16,
            "races_id"=>1,
            "total_time"=>null, //+1
            "best_lap"=>null,
            "position"=>null,
            "points"=>null
        ];
        $racesResults[]=[
            "id"=> 120,
            "drivers_id"=>81,
            "races_id"=>1,
            "total_time"=>null, //+1
            "best_lap"=>null,
            "position"=>null,
            "points"=>null
        ];
        

        Db::table('races_results')->delete();
        Db::table('races_results')->insert($racesResults);
    }
}
