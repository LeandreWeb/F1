<?php

namespace Database\Seeders\Seeders2024;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GrandPrixWeekendSeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

     $grandPrixWeekends=[];

     $grandPrixWeekends[]=[
        "id"=>202401,
        "name"=>"Grand Prix de Bahrain",
        "round"=>1,
        "status"=>"incoming",
        "country_id"=>1,
        'race_id'=>202401,
        'qualification_id'=>202401,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>1,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202402,
        "name"=>"Grand Prix d'Arabie Saoudite",
        "round"=>2,
        "status"=>"incoming",
        "country_id"=>2,
        'race_id'=>202402,
        'qualification_id'=>202402,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>2,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202403,
        "name"=>"Grand Prix de l'Australie",
        "round"=>3,
        "status"=>"incoming",
        "country_id"=>3,
        'race_id'=>202403,
        'qualification_id'=>202403,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>3,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202404,
        "name"=>"Grand Prix du Japon",
        "round"=>4,
        "status"=>"incoming",
        "country_id"=>16,
        'race_id'=>202404,
        'qualification_id'=>202404,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>17,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202405,
        "name"=>"Grand Prix de la Chine",
        "round"=>5,
        "status"=>"incoming",
        "country_id"=>26,
        'race_id'=>202405,
        'qualification_id'=>202405,
        'sprint_id'=>202405,
        'sprint_shootout_id'=>202405,
        'track_id'=>24,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202406,
        "name"=>"Grand Prix de Miami",
        "round"=>6,
        "status"=>"incoming",
        "country_id"=>5,
        'race_id'=>202406,
        'qualification_id'=>202406,
        'sprint_id'=>202406,
        'sprint_shootout_id'=>202406,
        'track_id'=>5,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202407,
        "name"=>"Grand Prix d'Emilia Romagna",
        "round"=>7,
        "status"=>"incoming",
        "country_id"=>6,
        'race_id'=>202407,
        'qualification_id'=>202407,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>6,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202408,
        "name"=>"Grand Prix de Monaco",
        "round"=>8,
        "status"=>"incoming",
        "country_id"=>7,
        'race_id'=>202408,
        'qualification_id'=>202408,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>7,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202409,
        "name"=>"Grand Prix du Canada",
        "round"=>9,
        "status"=>"incoming",
        "country_id"=>9,
        'race_id'=>202409,
        'qualification_id'=>202409,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>9,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202410,
        "name"=>"Grand Prix d'Espagne",
        "round"=>10,
        "status"=>"incoming",
        "country_id"=>8,
        'race_id'=>202410,
        'qualification_id'=>202410,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>8,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202411,
        "name"=>"Grand Prix d'Autriche",
        "round"=>11,
        "status"=>"incoming",
        "country_id"=>10,
        'race_id'=>202411,
        'qualification_id'=>202411,
        'sprint_id'=>202411,
        'sprint_shootout_id'=>202411,
        'track_id'=>10,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202412,
        "name"=>"Grand Prix Britanique",
        "round"=>12,
        "status"=>"incoming",
        "country_id"=>11,
        'race_id'=>202412,
        'qualification_id'=>202412,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>11,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202413,
        "name"=>"Grand Prix de la Hongrie",
        "round"=>13,
        "status"=>"incoming",
        "country_id"=>12,
        'race_id'=>202413,
        'qualification_id'=>202413,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>12,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202414,
        "name"=>"Grand Prix Belge",
        "round"=>14,
        "status"=>"incoming",
        "country_id"=>13,
        'race_id'=>202414,
        'qualification_id'=>202414,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>13,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202415,
        "name"=>"Grand Prix des Pays-Bas",
        "round"=>15,
        "status"=>"incoming",
        "country_id"=>14,
        'race_id'=>202415,
        'qualification_id'=>202415,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>14,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202416,
        "name"=>"Grand Prix d'Italie",
        "round"=>16,
        "status"=>"incoming",
        "country_id"=>6,
        'race_id'=>202416,
        'qualification_id'=>202416,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>15,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202417,
        "name"=>"Grand Prix d'Azerbaijan",
        "round"=>17,
        "status"=>"incoming",
        "country_id"=>4,
        'race_id'=>202417,
        'qualification_id'=>202417,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>4,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202418,
        "name"=>"Grand Prix de Singapour",
        "round"=>18,
        "status"=>"incoming",
        "country_id"=>15,
        'race_id'=>202418,
        'qualification_id'=>202418,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>16,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202419,
        "name"=>"Grand Prix des États-Unis",
        "round"=>19,
        "status"=>"incoming",
        "country_id"=>5,
        'race_id'=>202419,
        'qualification_id'=>202419,
        'sprint_id'=>202419,
        'sprint_shootout_id'=>202419,
        'track_id'=>19,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202420,
        "name"=>"Grand Prix du Mexique",
        "round"=>20,
        "status"=>"incoming",
        "country_id"=>18,
        'race_id'=>202420,
        'qualification_id'=>202420,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>20,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202421,
        "name"=>"Grand Prix du Brezil",
        "round"=>21,
        "status"=>"incoming",
        "country_id"=>19,
        'race_id'=>202421,
        'qualification_id'=>202421,
        'sprint_id'=>202421,
        'sprint_shootout_id'=>202421,
        'track_id'=>21,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202422,
        "name"=>"Grand Prix de Las Vegas",
        "round"=>22,
        "status"=>"incoming",
        "country_id"=>5,
        'race_id'=>202422,
        'qualification_id'=>202422,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>22,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202423,
        "name"=>"Grand Prix de Qatar",
        "round"=>23,
        "status"=>"incoming",
        "country_id"=>17,
        'race_id'=>202423,
        'qualification_id'=>202423,
        'sprint_id'=>202423,
        'sprint_shootout_id'=>202423,
        'track_id'=>18,
        'season_id'=>2024
      ];
      $grandPrixWeekends[]=[
        "id"=>202424,
        "name"=>"Grand Prix d'Abou Dabi",
        "round"=>24,
        "status"=>"incoming",
        "country_id"=>20,
        'race_id'=>202424,
        'qualification_id'=>202424,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>23,
        'season_id'=>2024
      ];
      
        Db::table('grand_prix_weekends')->insert($grandPrixWeekends);
    }
}
