<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class grands_prixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     
     $grandsPrix=[];
     
     $grandsPrix[]=[
        "id"=>1,
        "country_id"=>1,
        'race_id'=>1,
        'qualification_id'=>1
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>2,
        "country_id"=>2,
        'race_id'=>2,
        'qualification_id'=>2
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>3,
        "country_id"=>3,
        'race_id'=>3,
        'qualification_id'=>3
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>4,
        "country_id"=>4,
        'race_id'=>4,
        'qualification_id'=>4,
        'sprint_id'=>4
     ];
     $grandsPrix[]=[
        "id"=>5,
        "country_id"=>5,
        'race_id'=>5,
        'qualification_id'=>5
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>6,
        "country_id"=>6,
        'race_id'=>6,
        'qualification_id'=>6
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>7,
        "country_id"=>1,
        'race_id'=>7,
        'qualification_id'=>7
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>8,
        "country_id"=>8,
        'race_id'=>8,
        'qualification_id'=>8
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>9,
        "country_id"=>9,
        'race_id'=>9,
        'qualification_id'=>9
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>10,
        "country_id"=>10,
        'race_id'=>10,
        'qualification_id'=>10,
        'sprint_id'=>10
     ];
     $grandsPrix[]=[
        "id"=>11,
        "country_id"=>11,
        'race_id'=>11,
        'qualification_id'=>11
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>12,
        "country_id"=>12,
        'race_id'=>12,
        'qualification_id'=>12
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>13,
        "country_id"=>13,
        'race_id'=>13,
        'qualification_id'=>13,
        'sprint_id'=>13
     ];
     $grandsPrix[]=[
        "id"=>14,
        "country_id"=>14,
        'race_id'=>14,
        'qualification_id'=>14
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>15,
        "country_id"=>6,
        'race_id'=>15,
        'qualification_id'=>15
        ,'sprint_id'=>null
     ];

     $grandsPrix[]=[
        "id"=>16,
        "country_id"=>15,
        'race_id'=>16,
        'qualification_id'=>16
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>17,
        "country_id"=>16,
        'race_id'=>17,
        'qualification_id'=>17
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>18,
        "country_id"=>17,
        'race_id'=>18,
        'qualification_id'=>18,
        'sprint_id'=>18
     ];
     $grandsPrix[]=[
        "id"=>19,
        "country_id"=>5,
        'race_id'=>19,
        'qualification_id'=>19,
        'sprint_id'=>19
     ];
     $grandsPrix[]=[
        "id"=>20,
        "country_id"=>18,
        'race_id'=>20,
        'qualification_id'=>20
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>21,
        "country_id"=>19,
        'race_id'=>21,
        'qualification_id'=>21,
        'sprint_id'=>21
     ];
     $grandsPrix[]=[
        "id"=>22,
        "country_id"=>5,
        'race_id'=>22,
        'qualification_id'=>22
        ,'sprint_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>23,
        "country_id"=>20,
        'race_id'=>23,
        'qualification_id'=>23
        ,'sprint_id'=>null
     ];




        Db::table('grands_prix')->delete();
        Db::table('grands_prix')->insert($grandsPrix);


    }
}
