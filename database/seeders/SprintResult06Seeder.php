<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class SprintResult06Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sprintResults=[];

        $sprintResults[]=[
            "id"=>2101,
            "driver_id"=>1,
            "sprint_id"=>21,
            "total_time"=>"00:31:30.849",
            "position"=>1,
            "points"=>8,
        ];
        $sprintResults[]=[
            "id"=>2102,
            "driver_id"=>4,
            "sprint_id"=>21,
            "total_time"=>"00:30:11.496 ",
            "position"=>2,
            "points"=>7,
        ];
        $sprintResults[]=[
            "id"=>2103,
            "driver_id"=>11,
            "sprint_id"=>21,
            "total_time"=>"00:30:20.826",
            "position"=>3,
            "points"=>6,
        ];
        $sprintResults[]=[
            "id"=>2104,
            "driver_id"=>63,
            "sprint_id"=>21,
            "total_time"=>"00:30:33.088", //+48.052
            "position"=>4,
            "points"=>5,
        ];
        $sprintResults[]=[
            "id"=>2105,
            "driver_id"=>16,
            "sprint_id"=>21,
            "total_time"=>"00:30:35.769", //+50.977
            "position"=>5,
            "points"=>4,
        ];
        $sprintResults[]=[
            "id"=>2106,
            "driver_id"=>22,
            "sprint_id"=>21,
            "total_time"=>"00:30:36.419", //+54.502
            "position"=>6,
            "points"=>3,
        ];
        $sprintResults[]=[
            "id"=>2107,
            "driver_id"=>44,
            "sprint_id"=>21,
            "total_time"=>"00:30:41.935", //+55.873
            "position"=>7,
            "points"=>2
        ];
        $sprintResults[]=[
            "id"=>2108,
            "driver_id"=>55,
            "sprint_id"=>21,
            "total_time"=>"00:30:42.315", //+72.647
            "position"=>8,
            "points"=>1
        ];
        $sprintResults[]=[
            "id"=>2109,
            "driver_id"=>3,
            "sprint_id"=>21,
            "total_time"=>"00:30:42.512", //+73.753
            "position"=>9,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>2110,
            "driver_id"=>81,
            "sprint_id"=>21,
            "total_time"=>"00:30:45.428", //+89.774
            "position"=>10,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>2111,
            "driver_id"=>14,
            "sprint_id"=>21,
            "total_time"=>"00:30:46.270", //+90.870
            "position"=>11,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>2112,
            "driver_id"=>18,
            "sprint_id"=>21,
            "total_time"=>"00:30:46.687", //+1
            "position"=>12,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>2113,
            "driver_id"=>10,
            "sprint_id"=>21,
            "total_time"=>"00:30:47.830", //+1
            "position"=>13,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>2114,
            "driver_id"=>31,
            "sprint_id"=>21,
            "total_time"=>"00:30:50.057", //+1
            "position"=>14,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>2115,
            "driver_id"=>23,
            "sprint_id"=>21,
            "total_time"=>"00:30:50.603", //+1
            "position"=>15,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>2116,
            "driver_id"=>20,
            "sprint_id"=>21,
            "total_time"=>"00:31:03.716", //+1
            "position"=>16,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>2117,
            "driver_id"=>24,
            "sprint_id"=>21,
            "total_time"=>"00:31:05.932", //+2
            "position"=>17,
            "points"=>0
        ];
        $sprintResults[]=[
            "id"=>2118,
            "driver_id"=>27,
            "sprint_id"=>21,
            "total_time"=>"00:31:07.539", //+1
            "position"=>18,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=>2119,
            "driver_id"=>77,
            "sprint_id"=>21,
            "total_time"=>"00:31:07.958", //+1
            "position"=>19,
            "points"=>null
        ];
        $sprintResults[]=[
            "id"=>2120,
            "driver_id"=>2,
            "sprint_id"=>21,
            "total_time"=>"00:31:08.154", //+1
            "position"=>20,
            "points"=>null
        ];

        Db::table('sprint_results')->insert($sprintResults);
    }
}
