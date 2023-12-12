<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class qualification_results21Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationResults=[];
        $qualificationResults[]=[
            "id"=>2101,
            "driver_id"=>1,
            'qualification_id'=>21,
            "q1"=>70.436,
            "q2"=>70.162,
            "q3"=>70.727,
            "position"=>1
        ];
        $qualificationResults[]=[
            "id"=>2102,
            "driver_id"=>16,
            'qualification_id'=>21,
            "q1"=>70.472,
            "q2"=>70.303,
            "q3"=>91.344,
            "position"=>2
        ];
        $qualificationResults[]=[
            "id"=>2103,
            "driver_id"=>18,
            'qualification_id'=>21,
            "q1"=>70.551,
            "q2"=>70.375,
            "q3"=>71.344,
            "position"=>3
        ];
        $qualificationResults[]=[
            "id"=>2104,
            "driver_id"=>14,
            'qualification_id'=>21,
            "q1"=>70.557,
            "q2"=>70.237,
            "q3"=>71.387,
            "position"=>4
        ];
        $qualificationResults[]=[
            "id"=>2105,
            "driver_id"=>44,
            'qualification_id'=>21,
            "q1"=>70.604,
            "q2"=>70.266,
            "q3"=>71.387,
            "position"=>5
        ];
        $qualificationResults[]=[
            "id"=>2106,
            "driver_id"=>63,
            'qualification_id'=>21,
            "q1"=>70.340,
            "q2"=>70.316,
            "q3"=>71.590,
            "position"=>6
        ];
        $qualificationResults[]=[
            "id"=>2107,
            "driver_id"=>4,
            'qualification_id'=>21,
            "q1"=>70.623,
            "q2"=>70.021,
            "q3"=>71.590,
            "position"=>7
        ];
        $qualificationResults[]=[
            "id"=>2108,
            "driver_id"=>55,
            'qualification_id'=>21,
            "q1"=>70.624,
            "q2"=>70.254,
            "q3"=>71.989,
            "position"=>8
        ];
        $qualificationResults[]=[
            "id"=>2109,
            "driver_id"=>11,
            'qualification_id'=>21,
            "q1"=>70.668,
            "q2"=>70.254,
            "q3"=>72.321,
            "position"=>9
        ];
        $qualificationResults[]=[
            "id"=>2110,
            "driver_id"=>81,
            'qualification_id'=>21,
            "q1"=>70.519,
            "q2"=>70.330,
            "q3"=>null,
            "position"=>10
        ];
        $qualificationResults[]=[
            "id"=>2111,
            "driver_id"=>27,
            'qualification_id'=>21,
            "q1"=>70.475,
            "q2"=>70.547,
            "q3"=>null,
            "position"=>11
        ];
        $qualificationResults[]=[
            "id"=>2112,
            "driver_id"=>31,
            'qualification_id'=>21,
            "q1"=>70.763,
            "q2"=>70.562,
            "q3"=>null,
            "position"=>12
        ];
        $qualificationResults[]=[
            "id"=>2113,
            "driver_id"=>10,
            'qualification_id'=>21,
            "q1"=>70.793,
            "q2"=>70.567,
            "q3"=>null,
            "position"=>13
        ];
        $qualificationResults[]=[
            "id"=>2114,
            "driver_id"=>20,
            'qualification_id'=>21,
            "q1"=>70.602,
            "q2"=>70.723,
            "q3"=>null,
            "position"=>14
        ];
        $qualificationResults[]=[
            "id"=>2115,
            "driver_id"=>23,
            'qualification_id'=>21,
            "q1"=>70.621,
            "q2"=>70.840,
            "q3"=>null,
            "position"=>15
        ];
        $qualificationResults[]=[
            "id"=>2116,
            "driver_id"=>22,
            'qualification_id'=>21,
            "q1"=>70.837,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $qualificationResults[]=[
            "id"=>2117,
            "driver_id"=>3,
            'qualification_id'=>21,
            "q1"=>70.843,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $qualificationResults[]=[
            "id"=>2118,
            "driver_id"=>77,
            'qualification_id'=>21,
            "q1"=>70.955,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $qualificationResults[]=[
            "id"=>2119,
            "driver_id"=>2,
            'qualification_id'=>21,
            "q1"=>71.035,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $qualificationResults[]=[
            "id"=>2120,
            "driver_id"=>24,
            'qualification_id'=>21,
            "q1"=>71.275,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];


        Db::table('qualification_results')->insert($qualificationResults);
    }
}