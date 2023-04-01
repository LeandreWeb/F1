<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class qualification_results01Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>101,
            "driver_id"=>1,
            'qualification_id'=>1,
            "q1"=>91.295,
            "q2"=>90.503,
            "q3"=>89.708,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>102,
            "driver_id"=>11,
            'qualification_id'=>1,
            "q1"=>91.479,
            "q2"=>90.746,
            "q3"=>89.846,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>103,
            "driver_id"=>16,
            'qualification_id'=>1,
            "q1"=>91.094,
            "q2"=>90.282,
            "q3"=>90.000,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>104,
            "driver_id"=>55,
            'qualification_id'=>1,
            "q1"=>90.993,
            "q2"=>90.515,
            "q3"=>90.154,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>105,
            "driver_id"=>14,
            'qualification_id'=>1,
            "q1"=>91.158,
            "q2"=>90.645,
            "q3"=>90.336,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>106,
            "driver_id"=>63,
            'qualification_id'=>1,
            "q1"=>91.057,
            "q2"=>90.645,
            "q3"=>89.336,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>107,
            "driver_id"=>44,
            'qualification_id'=>1,
            "q1"=>91.543,
            "q2"=>90.513,
            "q3"=>90.384,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>108,
            "driver_id"=>18,
            'qualification_id'=>1,
            "q1"=>91.184,
            "q2"=>91.127,
            "q3"=>90.836,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>109,
            "driver_id"=>31,
            'qualification_id'=>1,
            "q1"=>91.508,
            "q2"=>90.914,
            "q3"=>90.984,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>110,
            "driver_id"=>27,
            'qualification_id'=>1,
            "q1"=>91.204,
            "q2"=>90.91,
            "q3"=>null,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>111,
            "driver_id"=>4,
            'qualification_id'=>1,
            "q1"=>91.652,
            "q2"=>91.381,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>112,
            "driver_id"=>77,
            'qualification_id'=>1,
            "q1"=>91.504,
            "q2"=>91.443,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>113,
            "driver_id"=>24,
            'qualification_id'=>1,
            "q1"=>91.615,
            "q2"=>91.473,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>114,
            "driver_id"=>22,
            'qualification_id'=>1,
            "q1"=>91.400,
            "q2"=>92.510,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>115,
            "driver_id"=>23,
            'qualification_id'=>1,
            "q1"=>91.461,
            "q2"=>null,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>116,
            "driver_id"=>2,
            'qualification_id'=>1,
            "q1"=>91.652,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>117,
            "driver_id"=>20,
            'qualification_id'=>1,
            "q1"=>91.892,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>118,
            "driver_id"=>81,
            'qualification_id'=>1,
            "q1"=>92.101,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>119,
            "driver_id"=>21,
            'qualification_id'=>1,
            "q1"=>92.121,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>120,
            "driver_id"=>10,
            'qualification_id'=>1,
            "q1"=>92.181,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];

        Db::table('qualification_results')->delete();
        Db::table('qualification_results')->insert($qualificationResults);
    }
}
