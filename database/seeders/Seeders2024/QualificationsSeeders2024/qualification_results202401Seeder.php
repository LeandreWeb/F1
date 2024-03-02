<?php

namespace Database\Seeders\Seeders2024\QualificationsSeeders2024;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class qualification_results202401Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $qualificationResults = [];

        $qualificationResults[] = [
            "id" => 20240101,
            "driver_id" => 1,
            'qualification_id' => 202401,
            "q1" => 90.031, //91.295
            "q2" => 89.374,
            "q3" => 89.179,
            "position" => 1
        ];
        $qualificationResults[] = [
            "id" => 20240102,
            "driver_id" => 16,
            'qualification_id' => 202401,
            "q1" => 90.243,
            "q2" => 89.165,
            "q3" => 89.407,
            "position" => 2
        ];
        $qualificationResults[] = [
            "id" => 20240103,
            "driver_id" => 63,
            'qualification_id' => 202401,
            "q1" => 90.350,
            "q2" => 89.922,
            "q3" => 89.485,
            "position" => 3
        ];
        $qualificationResults[] = [
            "id" => 20240104,
            "driver_id" => 55,
            'qualification_id' => 202401,
            "q1" => 89.909,
            "q2" => 89.573,
            "q3" => 89.507,
            "position" => 4
        ];
        $qualificationResults[] = [
            "id" => 20240105,
            "driver_id" => 11,
            'qualification_id' => 202401,
            "q1" => 90.221,
            "q2" => 89.935,
            "q3" => 89.537,
            "position" => 5
        ];
        $qualificationResults[] = [
            "id" => 20240106,
            "driver_id" => 14,
            'qualification_id' => 202401,
            "q1" => 90.179,
            "q2" => 89.801,
            "q3" => 89.542,
            "position" => 6
        ];
        $qualificationResults[] = [
            "id" => 20240107,
            "driver_id" => 4,
            'qualification_id' => 202401,
            "q1" => 90.143,
            "q2" => 89.941,
            "q3" => 89.614,
            "position" => 7
        ];
        $qualificationResults[] = [
            "id" => 20240108,
            "driver_id" => 81,
            'qualification_id' => 202401,
            "q1" => 90.531,
            "q2" => 90.122,
            "q3" => 89.683,
            "position" => 8
        ];
        $qualificationResults[] = [
            "id" => 20240109,
            "driver_id" => 44,
            'qualification_id' => 202401,
            "q1" => 90.451,
            "q2" => 89.718,
            "q3" => 89.710,
            "position" => 9
        ];
        $qualificationResults[] = [
            "id" => 20240110,
            "driver_id" => 27,
            'qualification_id' => 202401,
            "q1" => 90.566,
            "q2" => 89.851,
            "q3" => 90.502,
            "position" => 10
        ];
        $qualificationResults[] = [
            "id" => 20240111,
            "driver_id" => 22,
            'qualification_id' => 202401,
            "q1" => 90.481,
            "q2" => 90.129,
            "q3" => null,
            "position" => 11
        ];
        $qualificationResults[] = [
            "id" => 20240112,
            "driver_id" => 18,
            'qualification_id' => 202401,
            "q1" => 89.965,
            "q2" => 90.200,
            "q3" => null,
            "position" => 12
        ];
        $qualificationResults[] = [
            "id" => 20240113,
            "driver_id" => 23,
            'qualification_id' => 202401,
            "q1" => 90.397,
            "q2" => 90.221,
            "q3" => null,
            "position" => 13
        ];
        $qualificationResults[] = [
            "id" => 20240114,
            "driver_id" => 3,
            'qualification_id' => 202401,
            "q1" => 90.562,
            "q2" => 90.278,
            "q3" => null,
            "position" => 14
        ];
        $qualificationResults[] = [
            "id" => 20240115,
            "driver_id" => 20,
            'qualification_id' => 202401,
            "q1" => 90.646,
            "q2" => 90.529,
            "q3" => null,
            "position" => 15
        ];
        $qualificationResults[] = [
            "id" => 20240116,
            "driver_id" => 77,
            'qualification_id' => 202401,
            "q1" => 90.756,
            "q2" => null,
            "q3" => null,
            "position" => 16
        ];
        $qualificationResults[] = [
            "id" => 20240117,
            "driver_id" => 24,
            'qualification_id' => 202401,
            "q1" => 90.757,
            "q2" => null,
            "q3" => null,
            "position" => 17
        ];
        $qualificationResults[] = [
            "id" => 20240118,
            "driver_id" => 2,
            'qualification_id' => 202401,
            "q1" => 90.770,
            "q2" => null,
            "q3" => null,
            "position" => 18
        ];
        $qualificationResults[] = [
            "id" => 20240119,
            "driver_id" => 31,
            'qualification_id' => 202401,
            "q1" => 90.793,
            "q2" => null,
            "q3" => null,
            "position" => 19
        ];
        $qualificationResults[] = [
            "id" => 20240120,
            "driver_id" => 10,
            'qualification_id' => 202401,
            "q1" => 90.948,
            "q2" => null,
            "q3" => null,
            "position" => 20
        ];

        Db::table('qualification_results')->insert($qualificationResults);
    }
}
