<?php

namespace Database\Seeders\Seeders2024\QualificationsSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class qualification_results202402Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $qualificationResults = [];

        $qualificationResults[] = [
            "id" => 20240201,
            "driver_id" => 1,
            'qualification_id' => 202402,
            "q1" => 88.171, //91.295
            "q2" => 88.033,
            "q3" => 87.472,
            "position" => 1
        ];
        $qualificationResults[] = [
            "id" => 20240202,
            "driver_id" => 16,
            'qualification_id' => 202402,
            "q1" => 88.318,
            "q2" => 88.112,
            "q3" => 87.791,
            "position" => 2
        ];
        $qualificationResults[] = [
            "id" => 20240203,
            "driver_id" => 11,
            'qualification_id' => 202402,
            "q1" => 88.638,
            "q2" => 88.467,
            "q3" => 87.807,
            "position" => 3
        ];
        $qualificationResults[] = [
            "id" => 20240204,
            "driver_id" => 14,
            'qualification_id' => 202402,
            "q1" => 88.706,
            "q2" => 88.122,
            "q3" => 87.846,
            "position" => 4
        ];
        $qualificationResults[] = [
            "id" => 20240205,
            "driver_id" => 81,
            'qualification_id' => 202402,
            "q1" => 88.755,
            "q2" => 88.343,
            "q3" => 88.089,
            "position" => 5
        ];
        $qualificationResults[] = [
            "id" => 20240206,
            "driver_id" => 4,
            'qualification_id' => 202402,
            "q1" => 88.805,
            "q2" => 88.479,
            "q3" => 88.132,
            "position" => 6
        ];
        $qualificationResults[] = [
            "id" => 20240207,
            "driver_id" => 63,
            'qualification_id' => 202402,
            "q1" => 88.749,
            "q2" => 88.448,
            "q3" => 88.316,
            "position" => 7
        ];
        $qualificationResults[] = [
            "id" => 20240208,
            "driver_id" => 44,
            'qualification_id' => 202402,
            "q1" => 88.994,
            "q2" => 88.606,
            "q3" => 88.460,
            "position" => 8
        ];
        $qualificationResults[] = [
            "id" => 20240209,
            "driver_id" => 22,
            'qualification_id' => 202402,
            "q1" => 88.988,
            "q2" => 88.564,
            "q3" => 88.547,
            "position" => 9
        ];
        $qualificationResults[] = [
            "id" => 20240210,
            "driver_id" => 18,
            'qualification_id' => 202402,
            "q1" => 88.250,
            "q2" => 88.578,
            "q3" => 88.572,
            "position" => 10
        ];
        $qualificationResults[] = [
            "id" => 20240211,
            "driver_id" => 38,
            'qualification_id' => 202402,
            "q1" => 88.984,
            "q2" => 88.642,
            "q3" => null,
            "position" => 11
        ];
        $qualificationResults[] = [
            "id" => 20240212,
            "driver_id" => 23,
            'qualification_id' => 202402,
            "q1" => 89.107,
            "q2" => 88.980,
            "q3" => null,
            "position" => 12
        ];
        $qualificationResults[] = [
            "id" => 20240213,
            "driver_id" => 20,
            'qualification_id' => 202402,
            "q1" => 89.069,
            "q2" => 89.020,
            "q3" => null,
            "position" => 13
        ];
        $qualificationResults[] = [
            "id" => 20240214,
            "driver_id" => 3,
            'qualification_id' => 202402,
            "q1" => 89.065,
            "q2" => 89.025,
            "q3" => null,
            "position" => 14
        ];
        $qualificationResults[] = [
            "id" => 20240215,
            "driver_id" => 27,
            'qualification_id' => 202402,
            "q1" => 89.065,
            "q2" => null,
            "q3" => null,
            "position" => 15
        ];
        $qualificationResults[] = [
            "id" => 20240216,
            "driver_id" => 77,
            'qualification_id' => 202402,
            "q1" => 89.179,
            "q2" => null,
            "q3" => null,
            "position" => 16
        ];
        $qualificationResults[] = [
            "id" => 20240217,
            "driver_id" => 31,
            'qualification_id' => 202402,
            "q1" => 89.475,
            "q2" => null,
            "q3" => null,
            "position" => 17
        ];
        $qualificationResults[] = [
            "id" => 20240218,
            "driver_id" => 10,
            'qualification_id' => 202402,
            "q1" => 89.479,
            "q2" => null,
            "q3" => null,
            "position" => 18
        ];
        $qualificationResults[] = [
            "id" => 20240219,
            "driver_id" => 2,
            'qualification_id' => 202402,
            "q1" => 89.526,
            "q2" => null,
            "q3" => null,
            "position" => 19
        ];
        $qualificationResults[] = [
            "id" => 20240220,
            "driver_id" => 24,
            'qualification_id' => 202402,
            "q1" => null,
            "q2" => null,
            "q3" => null,
            "position" => 20
        ];

        Db::table('qualification_results')->insert($qualificationResults);
    }
}
