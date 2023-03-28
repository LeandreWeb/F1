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
        "countries_id"=>1,
        'races_id'=>1,
        'qualifications_id'=>1
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>2,
        "countries_id"=>2,
        'races_id'=>2,
        'qualifications_id'=>2
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>3,
        "countries_id"=>3,
        'races_id'=>3,
        'qualifications_id'=>3
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>4,
        "countries_id"=>4,
        'races_id'=>4,
        'qualifications_id'=>4,
        'sprints_id'=>4
     ];
     $grandsPrix[]=[
        "id"=>5,
        "countries_id"=>5,
        'races_id'=>5,
        'qualifications_id'=>5
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>6,
        "countries_id"=>6,
        'races_id'=>6,
        'qualifications_id'=>6
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>7,
        "countries_id"=>1,
        'races_id'=>7,
        'qualifications_id'=>7
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>8,
        "countries_id"=>8,
        'races_id'=>8,
        'qualifications_id'=>8
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>9,
        "countries_id"=>9,
        'races_id'=>9,
        'qualifications_id'=>9
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>10,
        "countries_id"=>10,
        'races_id'=>10,
        'qualifications_id'=>10,
        'sprints_id'=>10
     ];
     $grandsPrix[]=[
        "id"=>11,
        "countries_id"=>11,
        'races_id'=>11,
        'qualifications_id'=>11
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>12,
        "countries_id"=>12,
        'races_id'=>12,
        'qualifications_id'=>12
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>13,
        "countries_id"=>13,
        'races_id'=>13,
        'qualifications_id'=>13,
        'sprints_id'=>13
     ];
     $grandsPrix[]=[
        "id"=>14,
        "countries_id"=>14,
        'races_id'=>14,
        'qualifications_id'=>14
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>15,
        "countries_id"=>6,
        'races_id'=>15,
        'qualifications_id'=>15
        ,'sprints_id'=>null
     ];

     $grandsPrix[]=[
        "id"=>16,
        "countries_id"=>15,
        'races_id'=>16,
        'qualifications_id'=>16
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>17,
        "countries_id"=>16,
        'races_id'=>17,
        'qualifications_id'=>17
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>18,
        "countries_id"=>17,
        'races_id'=>18,
        'qualifications_id'=>18,
        'sprints_id'=>18
     ];
     $grandsPrix[]=[
        "id"=>19,
        "countries_id"=>5,
        'races_id'=>19,
        'qualifications_id'=>19,
        'sprints_id'=>19
     ];
     $grandsPrix[]=[
        "id"=>20,
        "countries_id"=>18,
        'races_id'=>20,
        'qualifications_id'=>20
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>21,
        "countries_id"=>19,
        'races_id'=>21,
        'qualifications_id'=>21,
        'sprints_id'=>21
     ];
     $grandsPrix[]=[
        "id"=>22,
        "countries_id"=>5,
        'races_id'=>22,
        'qualifications_id'=>22
        ,'sprints_id'=>null
     ];
     $grandsPrix[]=[
        "id"=>23,
        "countries_id"=>20,
        'races_id'=>23,
        'qualifications_id'=>23
        ,'sprints_id'=>null
     ];




        Db::table('grands_prix')->delete();
        Db::table('grands_prix')->insert($grandsPrix);


    }
}
