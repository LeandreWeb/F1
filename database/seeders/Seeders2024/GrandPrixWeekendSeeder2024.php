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
        "status"=>"done",
        "country_id"=>1,
        'race_id'=>202401,
        'qualification_id'=>202401,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>1,
        'season_id'=>2024

      ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202402,
   //      "name"=>"Grand Prix d'Arabie Saoudite",
   //      "status"=>"done",
   //      "country_id"=>2,
   //      'race_id'=>202402,
   //      'qualification_id'=>202402,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>2,
   //      'season_id'=>2024


   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202403,
   //      "name"=>"Grand Prix d'Australie",
   //      "status"=>"done",
   //      "country_id"=>3,
   //      'race_id'=>202403,
   //      'qualification_id'=>202403,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>3,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202404,
   //      "name"=>"Grand Prix d'Azerbaijan",
   //      "status"=>"done",
   //      "country_id"=>4,
   //      'race_id'=>202404,
   //      'qualification_id'=>202404,
   //      'sprint_id'=>202404,
   //      'sprint_shootout_id'=>202404,
   //      'track_id'=>4,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202405,
   //      "name"=>"Grand Prix de Miami",
   //      "status"=>"done",
   //      "country_id"=>5,
   //      'race_id'=>202405,
   //      'qualification_id'=>202405,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>5,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202406,
   //      "name"=>"Grand Prix Emilia-Rmagna",
   //      "status"=>"cancelled",
   //      "country_id"=>6,
   //      'race_id'=>202406,
   //      'qualification_id'=>202406,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>6,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202407,
   //      "name"=>"Grand Prix de Monaco",
   //      "status"=>"done",
   //      "country_id"=>7,
   //      'race_id'=>202407,
   //      'qualification_id'=>202407,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>7,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202408,
   //      "name"=>"Grand Prix d'Espagne",
   //      "status"=>"done",
   //      "country_id"=>8,
   //      'race_id'=>202408,
   //      'qualification_id'=>202408,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>8,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202409,
   //      "name"=>"Grand Prix du Canada",
   //      "status"=>"done",
   //      "country_id"=>9,
   //      'race_id'=>202409,
   //      'qualification_id'=>202409,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>9,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202410,
   //      "name"=>"Grand Prix d'Autriche",
   //      "status"=>"done",
   //      "country_id"=>10,
   //      'race_id'=>202410,
   //      'qualification_id'=>202410,
   //      'sprint_id'=>202410,
   //      'sprint_shootout_id'=>202410,
   //      'track_id'=>10,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202411,
   //      "name"=>"Grand Prix Britanique",
   //      "status"=>"done",
   //      "country_id"=>11,
   //      'race_id'=>202411,
   //      'qualification_id'=>202411,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>11,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202412,
   //      "name"=>"Grand Prix Hongrois",
   //      "status"=>"done",
   //      "country_id"=>12,
   //      'race_id'=>202412,
   //      'qualification_id'=>202412,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>12,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202413,
   //      "name"=>"Grand Prix de la Belgique",
   //      "status"=>"done",
   //      "country_id"=>13,
   //      'race_id'=>202413,
   //      'qualification_id'=>202413,
   //      'sprint_id'=>202413,
   //      'sprint_shootout_id'=>202413,
   //      'track_id'=>13,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202414,
   //      "name"=>"Grand Prix des Pays-Bas",
   //      "status"=>"done",
   //      "country_id"=>14,
   //      'race_id'=>202414,
   //      'qualification_id'=>202414,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>14,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202415,
   //      "name"=>"Grand Prix d'Italie",
   //      "status"=>"done",
   //      "country_id"=>6,
   //      'race_id'=>202415,
   //      'qualification_id'=>202415,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>15,
   //      'season_id'=>2024

   //    ];

   //   $grandPrixWeekends[]=[
   //      "id"=>202416,
   //      "name"=>"Grand Prix de Singapore",
   //      "status"=>"done",
   //      "country_id"=>15,
   //      'race_id'=>202416,
   //      'qualification_id'=>202416,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>16,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202417,
   //      "name"=>"Grand Prix du Japon",
   //      "status"=>"done",
   //      "country_id"=>16,
   //      'race_id'=>202417,
   //      'qualification_id'=>202417,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>17,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202418,
   //      "name"=>"Grand Prix de Qatar",
   //      "status"=>"done",
   //      "country_id"=>17,
   //      'race_id'=>202418,
   //      'qualification_id'=>202418,
   //      'sprint_id'=>202418,
   //      'sprint_shootout_id'=>202418,
   //      'track_id'=>18,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202419,
   //      "name"=>"Grand Prix des États Unis",
   //      "status"=>"done",
   //      "country_id"=>5,
   //      'race_id'=>202419,
   //      'qualification_id'=>202419,
   //      'sprint_id'=>202419,
   //      'sprint_shootout_id'=>202419,
   //      'track_id'=>19,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202420,
   //      "name"=>"Grand Prix du Mexique",
   //      "status"=>"done",
   //      "country_id"=>18,
   //      'race_id'=>202420,
   //      'qualification_id'=>202420,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>20,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202421,
   //      "name"=>"Grand Prix du Bresil",
   //      "status"=>"done",
   //      "country_id"=>19,
   //      'race_id'=>202421,
   //      'qualification_id'=>202421,
   //      'sprint_id'=>202421,
   //      'sprint_shootout_id'=>202421,
   //      'track_id'=>21,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202422,
   //      "name"=>"Grand Prix de Las Vegas",
   //      "status"=>"done",
   //      "country_id"=>5,
   //      'race_id'=>202422,
   //      'qualification_id'=>202422,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>22,
   //      'season_id'=>2024

   //    ];
   //   $grandPrixWeekends[]=[
   //      "id"=>202423,
   //      "name"=>"Grand Prix d'Abu Dhabi",
   //      "status"=>"done",
   //      "country_id"=>20,
   //      'race_id'=>202423,
   //      'qualification_id'=>202423,
   //      'sprint_id'=>null,
   //      'sprint_shootout_id'=>null,
   //      'track_id'=>23,
   //      'season_id'=>2024

   //    ];

        Db::table('grand_prix_weekends')->delete();
        Db::table('grand_prix_weekends')->insert($grandPrixWeekends);
    }
}
