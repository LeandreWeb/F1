<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results07Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>701,
            "driver_id"=>1,
            'qualification_id'=>7,
            "q1"=>82.386,
            "q2"=>81.908,
            "q3"=>81.365,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>702,
            "driver_id"=>14,
            'qualification_id'=>7,
            "q1"=>82.886,
            "q2"=>82.107,
            "q3"=>81.449,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>703,
            "driver_id"=>16,
            'qualification_id'=>7,
            "q1"=>82.912,
            "q2"=>82.103,
            "q3"=>81.471,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>704,
            "driver_id"=>31,
            'qualification_id'=>7,
            "q1"=>82.967,
            "q2"=>82.248,
            "q3"=>81.553,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>705,
            "driver_id"=>55,
            'qualification_id'=>7,
            "q1"=>82.717,
            "q2"=>82.248,
            "q3"=>81.553,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>706,
            "driver_id"=>44,
            'qualification_id'=>7,
            "q1"=>82.872,
            "q2"=>82.156,
            "q3"=>81.725,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>707,
            "driver_id"=>10,
            'qualification_id'=>7,
            "q1"=>83.033,
            "q2"=>82.156,
            "q3"=>81.725,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>708,
            "driver_id"=>63,
            'qualification_id'=>7,
            "q1"=>82.769,
            "q2"=>82.151,
            "q3"=>81.964,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>709,
            "driver_id"=>22,
            'qualification_id'=>7,
            "q1"=>82.642,
            "q2"=>82.249,
            "q3"=>82.082,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>710,
            "driver_id"=>4,
            'qualification_id'=>7,
            "q1"=>82.877,
            "q2"=>82.377,
            "q3"=>82.254,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>711,
            "driver_id"=>81,
            'qualification_id'=>7,
            "q1"=>83.054,
            "q2"=>82.395,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>712,
            "driver_id"=>21,
            'qualification_id'=>7,
            "q1"=>83.054,
            "q2"=>82.428,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>713,
            "driver_id"=>23,
            'qualification_id'=>7,
            "q1"=>82.706,
            "q2"=>82.527,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>714,
            "driver_id"=>18,
            'qualification_id'=>7,
            "q1"=>82.722,
            "q2"=>82.623,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>715,
            "driver_id"=>77,
            'qualification_id'=>7,
            "q1"=>83.038,
            "q2"=>82.625,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>716,
            "driver_id"=>2,
            'qualification_id'=>7,
            "q1"=>83.113,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>717,
            "driver_id"=>20,
            'qualification_id'=>7,
            "q1"=>83.270,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>718,
            "driver_id"=>27,
            'qualification_id'=>7,
            "q1"=>83.279,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>719,
            "driver_id"=>24,
            'qualification_id'=>7,
            "q1"=>83.523,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>720,
            "driver_id"=>11,
            'qualification_id'=>7,
            "q1"=>83.850,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}
