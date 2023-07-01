<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class SprintResult02Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprintResults=[];

        $sprintResults[]=[
            "id"=>1001,
            "driver_id"=>1,
            "sprint_id"=>10,
            "total_time"=>"00:33:17.667",
            "position"=>1,
            "points"=>8,
        ];
        $sprintResults[]=[
            "id"=>1002,
            "driver_id"=>11,
            "sprint_id"=>10,
            "total_time"=>"00:33:22.130",
            "position"=>2,
            "points"=>7,
        ];
        $sprintResults[]=[
            "id"=>1003,
            "driver_id"=>55,
            "sprint_id"=>10,
            "total_time"=>"00:33:22.732",
            "position"=>3,
            "points"=>6,
        ];
        $sprintResults[]=[
            "id"=>1004,
            "driver_id"=>18,
            "sprint_id"=>10,
            "total_time"=>"00:33:26.199", //+48.052
            "position"=>4,
            "points"=>5,
        ];
        $sprintResults[]=[
            "id"=>1005,
            "driver_id"=>14,
            "sprint_id"=>10,
            "total_time"=>"00:33:28.055", //+50.977
            "position"=>5,
            "points"=>4,
        ];
        $sprintResults[]=[
            "id"=>1006,
            "driver_id"=>27,
            "sprint_id"=>10,
            "total_time"=>"00:33:29.280", //+54.502
            "position"=>6,
            "points"=>3,
        ];
        $sprintResults[]=[
            "id"=>1007,
            "driver_id"=>31,
            "sprint_id"=>10,
            "total_time"=>"00:33:34.170", //+55.873
            "position"=>7,
            "points"=>2
        ];
        $sprintResults[]=[
            "id"=> 1008,
            "driver_id"=>63,
            "sprint_id"=>10,
            "total_time"=>"00:33:35.084", //+72.647
            "position"=>8,
            "points"=>1
        ];
        $sprintResults[]=[
            "id"=> 1009,
            "driver_id"=>4,
            "sprint_id"=>10,
            "total_time"=>"00:33:38.424", //+73.753
            "position"=>9,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1010,
            "driver_id"=>44,
            "sprint_id"=>10,
            "total_time"=>"00:33:40.518", //+89.774
            "position"=>10,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1011,
            "driver_id"=>81,
            "sprint_id"=>10,
            "total_time"=>"00:33:45.657", //+90.870
            "position"=>11,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1012,
            "driver_id"=>16,
            "sprint_id"=>10,
            "total_time"=>"00:33:52.269", //+1
            "position"=>12,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1013,
            "driver_id"=>23,
            "sprint_id"=>10,
            "total_time"=>"00:33:54.586", //+1
            "position"=>13,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1014,
            "driver_id"=>20,
            "sprint_id"=>10,
            "total_time"=>"00:34:01.254", //+1
            "position"=>14,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1015,
            "driver_id"=>10,
            "sprint_id"=>10,
            "total_time"=>"00:34:06.254", //+1
            "position"=>15,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1016,
            "driver_id"=>22,
            "sprint_id"=>10,
            "total_time"=>"00:34:07.584", //+1
            "position"=>16,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1017,
            "driver_id"=>21,
            "sprint_id"=>10,
            "total_time"=>"00:34:09.771", //+2
            "position"=>17,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=> 1018,
            "driver_id"=>2,
            "sprint_id"=>10,
            "total_time"=>"00:34:18.288", //+1
            "position"=>null,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=> 1019,
            "driver_id"=>24,
            "sprint_id"=>10,
            "total_time"=>null, //+1
            "position"=>null,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=> 1020,
            "driver_id"=>77,
            "sprint_id"=>10,
            "total_time"=>null, //+1
            "position"=>null,
            "points"=>null
        ];


        Db::table('sprint_results')->delete();
        Db::table('sprint_results')->insert($sprintResults);
    }
}
