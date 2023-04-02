<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tracks=[];
        $tracks[]=[
            "id"=>1,
            "name"=>"Circuit International de Bahrain",
            "length"=>5.412,
            "laps"=>57,
            "turns"=>15,
        ];$tracks[]=[
            "id"=>2,
            "name"=>"Circuit de la corniche de Djeddah",
            "length"=>6.174,
            "laps"=>50,
            "turns"=>27,
        ];
        $tracks[]=[
            "id"=>3,
            "name"=>"Circuit parcs Albert",
            "length"=>5.278,
            "laps"=>58,
            "turns"=>14,
        ];
        
        $tracks[]=[
            "id"=>4,
            "name"=>"Circuit ville de Baku",
            "length"=>6.003,
            "laps"=>51,
            "turns"=>20,
        ];
        $tracks[]=[
            "id"=>5,
            "name"=>"Autodrome International de Miami",
            "length"=>5.412,
            "laps"=>57,
            "turns"=>19,
        ];
        $tracks[]=[
            "id"=>6,
            "name"=>"Autodrome Enzo e Dino Ferrari",
            "length"=>4.909,
            "laps"=>63,
            "turns"=>19,
        ];
        $tracks[]=[
            "id"=>7,
            "name"=>"Circuit de Monaco",
            "length"=>3.337,
            "laps"=>78,
            "turns"=>19,
        ];
        $tracks[]=[
            "id"=>8,
            "name"=>"Circuit de Barcelona-Catalunya",
            "length"=>4.657,
            "laps"=>66,
            "turns"=>16,
        ];
        $tracks[]=[
            "id"=>9,
            "name"=>"Circuit Gilles-Villeneuve",
            "length"=>4.361,
            "laps"=>70,
            "turns"=>14,
        ];
        $tracks[]=[
            "id"=>10,
            "name"=>"Red Bull Ring",
            "length"=>4.318,
            "laps"=>71,
            "turns"=>11,
        ];
        $tracks[]=[
            "id"=>11,
            "name"=>"Circuit de Silverstone",
            "length"=>5.891,
            "laps"=>52,
            "turns"=>18,
        ];
        $tracks[]=[
            "id"=>12,
            "name"=>"Hungaroring",
            "length"=>4.381,
            "laps"=>70,
            "turns"=>14,
        ];
        $tracks[]=[
            "id"=>13,
            "name"=>"Circuit de Spa-Francorchamps",
            "length"=>7.004,
            "laps"=>44,
            "turns"=>19,
        ];
        $tracks[]=[
            "id"=>14,
            "name"=>"Circuit Zandvoort",
            "length"=>4.259,
            "laps"=>72,
            "turns"=>14,
        ];
        $tracks[]=[
            "id"=>15,
            "name"=>"Autodrome National de Monza",
            "length"=>5.793,
            "laps"=>53,
            "turns"=>11,
        ];
        $tracks[]=[
            "id"=>16,
            "name"=>"Circuit Rural de Marina Bay",
            "length"=>5.093,
            "laps"=>61,
            "turns"=>23,
        ];
        $tracks[]=[
            "id"=>17,
            "name"=>"Circuit International de Suzuka",
            "length"=>5.807,
            "laps"=>53,
            "turns"=>18,
        ];
        $tracks[]=[
            "id"=>18,
            "name"=>"Circuit International de Lusail",
            "length"=>5.418,
            "laps"=>57,
            "turns"=>16,
        ];
        $tracks[]=[
            "id"=>19,
            "name"=>"Circuit des Amériques",
            "length"=>5.513,
            "laps"=>56,
            "turns"=>20,
        ];
        $tracks[]=[
            "id"=>20,
            "name"=>"Autodrome Hermanos Rodriguez",
            "length"=>4.304,
            "laps"=>71,
            "turns"=>17,
        ];
        $tracks[]=[
            "id"=>21,
            "name"=>"Autodrome José Carlos Pace",
            "length"=>4.309,
            "laps"=>71,
            "turns"=>15,
        ];
        $tracks[]=[
            "id"=>22,
            "name"=>"Las Vegas",
            "length"=>6.12,
            "laps"=>50,
            "turns"=>17,
        ];
        $tracks[]=[
            "id"=>23,
            "name"=>"Circuit Yas Marina",
            "length"=>5.281,
            "laps"=>58,
            "turns"=>16,
        ];
        Db::table("traks")->delete();
        Db::table("traks")->insert($tracks);
    }
}
