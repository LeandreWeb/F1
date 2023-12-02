<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SprintShootoutResult03Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $sprintShootoutResults=[];
        $sprintShootoutResults[]=[
            "id"=>1901,
            "driver_id"=>1,
            'sprint_shootout_id'=>19,
            "q1"=>85.997,
            "q2"=>85.181,
            "q3"=>84.538,
            "position"=>1
        ];
        $sprintShootoutResults[]=[
            "id"=>1902,
            "driver_id"=>16,
            'sprint_shootout_id'=>19,
            "q1"=>85.999,
            "q2"=>85.386,
            "q3"=>84.593,
            "position"=>2
        ];
        $sprintShootoutResults[]=[
            "id"=>1903,
            "driver_id"=>44,
            'sprint_shootout_id'=>19,
            "q1"=>86.393,
            "q2"=>85.887,
            "q3"=>84.607,
            "position"=>3
        ];
        $sprintShootoutResults[]=[
            "id"=>1904,
            "driver_id"=>4,
            'sprint_shootout_id'=>19,
            "q1"=>86.499,
            "q2"=>85.594,
            "q3"=>84.639,
            "position"=>4
        ];
        $sprintShootoutResults[]=[
            "id"=>1905,
            "driver_id"=>81,
            'sprint_shootout_id'=>19,
            "q1"=>86.703,
            "q2"=>85.753,
            "q3"=>84.894,
            "position"=>5
        ];
        $sprintShootoutResults[]=[
            "id"=>1906,
            "driver_id"=>55,
            'sprint_shootout_id'=>19,
            "q1"=>86.268,
            "q2"=>85.542,
            "q3"=>84.939,
            "position"=>6
        ];
        $sprintShootoutResults[]=[
            "id"=>1907,
            "driver_id"=>11,
            'sprint_shootout_id'=>19,
            "q1"=> 86.347,
            "q2"=>85.718,
            "q3"=>85.041,
            "position"=>7
        ];
        $sprintShootoutResults[]=[
            "id"=>1908,
            "driver_id"=>63,
            'sprint_shootout_id'=>19,
            "q1"=>86.281,
            "q2"=>85.847,
            "q3"=>85.199,
            "position"=>8
        ];
        $sprintShootoutResults[]=[
            "id"=>1909,
            "driver_id"=>23,
            'sprint_shootout_id'=>19,
            "q1"=>86.230,
            "q2"=>85.947,
            "q3"=>85.366,
            "position"=>9
        ];
        $sprintShootoutResults[]=[
            "id"=>1910,
            "driver_id"=>10,
            'sprint_shootout_id'=>19,
            "q1"=>86.595,
            "q2"=>85.785,
            "q3"=>85.897,
            "position"=>10
        ];
        $sprintShootoutResults[]=[
            "id"=>1911,
            "driver_id"=>3,
            'sprint_shootout_id'=>19,
            "q1"=>86.737,
            "q2"=>85.978,
            "q3"=>null,
            "position"=>11
        ];
        $sprintShootoutResults[]=[
            "id"=>1912,
            "driver_id"=>14,
            'sprint_shootout_id'=>19,
            "q1"=>86.365,
            "q2"=>86.087,
            "q3"=>null,
            "position"=>12
        ];
        $sprintShootoutResults[]=[
            "id"=>1913,
            "driver_id"=>31,
            'sprint_shootout_id'=>19,
            "q1"=>86.372,
            "q2"=>86.131,
            "q3"=>null,
            "position"=>13
        ];
        $sprintShootoutResults[]=[
            "id"=>1914,
            "driver_id"=>18,
            'sprint_shootout_id'=>19,
            "q1"=>86.575,
            "q2"=>86.181,
            "q3"=>null,
            "position"=>14
        ];
        $sprintShootoutResults[]=[
            "id"=>1915,
            "driver_id"=>24,
            'sprint_shootout_id'=>19,
            "q1"=>86.554,
            "q2"=>86.182,
            "q3"=>null,
            "position"=>15
        ];
        $sprintShootoutResults[]=[
            "id"=>1916,
            "driver_id"=>27,
            'sprint_shootout_id'=>19,
            "q1"=>86.749,
            "q2"=>null,
            "q3"=>null,
            "position"=>16
        ];
        $sprintShootoutResults[]=[
            "id"=>1917,
            "driver_id"=>20,
            'sprint_shootout_id'=>19,
            "q1"=>86.922,
            "q2"=>null,
            "q3"=>null,
            "position"=>17
        ];
        $sprintShootoutResults[]=[
            "id"=>1918,
            "driver_id"=>77,
            'sprint_shootout_id'=>19,
            "q1"=>86.922,
            "q2"=>null,
            "q3"=>null,
            "position"=>18
        ];
        $sprintShootoutResults[]=[
            "id"=>1919,
            "driver_id"=>22,
            'sprint_shootout_id'=>19,
            "q1"=>86.945,
            "q2"=>null,
            "q3"=>null,
            "position"=>19
        ];
        $sprintShootoutResults[]=[
            "id"=>1920,
            "driver_id"=>2,
            'sprint_shootout_id'=>19,
            "q1"=>87.186,
            "q2"=>null,
            "q3"=>null,
            "position"=>20
        ];
        Db::table('sprint_shootout_results')->insert($sprintShootoutResults);
    }
}
