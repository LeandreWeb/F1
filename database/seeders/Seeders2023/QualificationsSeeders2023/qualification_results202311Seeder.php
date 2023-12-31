<?php

namespace Database\Seeders\Seeders2023\QualificationsSeeders2023;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results202311Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>20231101,
            "driver_id"=>1,
            'qualification_id'=>202311,
            "q1"=>89.428,
            "q2"=>87.702,
            "q3"=>86.720,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>20231102,
            "driver_id"=>4,
            'qualification_id'=>202311,
            "q1"=>88.917,
            "q2"=>88.042,
            "q3"=>86.961,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>20231103,
            "driver_id"=>81,
            'qualification_id'=>202311,
            "q1"=>89.874,
            "q2"=>87.845,
            "q3"=>87.092,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>20231104,
            "driver_id"=>16,
            'qualification_id'=>202311,
            "q1"=>89.143,
            "q2"=>88.361,
            "q3"=>87.136,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>20231105,
            "driver_id"=>55,
            'qualification_id'=>202311,
            "q1"=>89.865,
            "q2"=>88.265,
            "q3"=>87.148,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>20231106,
            "driver_id"=>63,
            'qualification_id'=>202311,
            "q1"=>89.412,
            "q2"=>88.782,
            "q3"=>87.155,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>20231107,
            "driver_id"=>44,
            'qualification_id'=>202311,
            "q1"=>89.415,
            "q2"=>88.545,
            "q3"=>87.211,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>20231108,
            "driver_id"=>23,
            'qualification_id'=>202311,
            "q1"=>89.466,
            "q2"=>88.067,
            "q3"=>87.530,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>20231109,
            "driver_id"=>14,
            'qualification_id'=>202311,
            "q1"=>89.949,
            "q2"=>88.368,
            "q3"=>87.659,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>20231110,
            "driver_id"=>10,
            'qualification_id'=>202311,
            "q1"=>89.533,
            "q2"=>88.751,
            "q3"=>87.689,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>20231111,
            "driver_id"=>27,
            'qualification_id'=>202311,
            "q1"=>89.603,
            "q2"=>88.896,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>20231112,
            "driver_id"=>18,
            'qualification_id'=>202311,
            "q1"=>89.448,
            "q2"=>88.935,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>20231113,
            "driver_id"=>31,
            'qualification_id'=>202311,
            "q1"=>89.700,
            "q2"=>88.956,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>20231114,
            "driver_id"=>2,
            'qualification_id'=>202311,
            "q1"=>89.873,
            "q2"=>89.031,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>20231115,
            "driver_id"=>77,
            'qualification_id'=>202311,
            "q1"=>89.798,
            "q2"=>null,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>20231116,
            "driver_id"=>11,
            'qualification_id'=>202311,
            "q1"=>89.968,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>20231117,
            "driver_id"=>22,
            'qualification_id'=>202311,
            "q1"=>90.025,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>20231118,
            "driver_id"=>24,
            'qualification_id'=>202311,
            "q1"=>90.123,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>20231119,
            "driver_id"=>21,
            'qualification_id'=>202311,
            "q1"=>90.513,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>20231120,
            "driver_id"=>20,
            'qualification_id'=>202311,
            "q1"=>92.513,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}