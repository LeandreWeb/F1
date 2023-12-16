<?php

namespace Database\Seeders\Seeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GrandPrixWeekendSeeder2023 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

     $grandPrixWeekends=[];

     $grandPrixWeekends[]=[
        "id"=>202301,
        "name"=>"Grand Prix de Bahrain",
        "status"=>"done",
        "country_id"=>1,
        'race_id'=>202301,
        'qualification_id'=>202301,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>1,

     ];
     $grandPrixWeekends[]=[
        "id"=>202302,
        "name"=>"Grand Prix d'Arabie Saoudite",
        "status"=>"done",
        "country_id"=>2,
        'race_id'=>202302,
        'qualification_id'=>202302,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>2,


      ];
     $grandPrixWeekends[]=[
        "id"=>202303,
        "name"=>"Grand Prix d'Australie",
        "status"=>"done",
        "country_id"=>3,
        'race_id'=>202303,
        'qualification_id'=>202303,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>3

      ];
     $grandPrixWeekends[]=[
        "id"=>202304,
        "name"=>"Grand Prix d'Azerbaijan",
        "status"=>"done",
        "country_id"=>4,
        'race_id'=>202304,
        'qualification_id'=>202304,
        'sprint_id'=>202304,
        'sprint_shootout_id'=>202304,
        'track_id'=>4

      ];
     $grandPrixWeekends[]=[
        "id"=>202305,
        "name"=>"Grand Prix de Miami",
        "status"=>"done",
        "country_id"=>5,
        'race_id'=>202305,
        'qualification_id'=>202305,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>5

      ];
     $grandPrixWeekends[]=[
        "id"=>202306,
        "name"=>"Grand Prix Emilia-Rmagna",
        "status"=>"cancelled",
        "country_id"=>6,
        'race_id'=>202306,
        'qualification_id'=>202306,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>6

      ];
     $grandPrixWeekends[]=[
        "id"=>202307,
        "name"=>"Grand Prix de Monaco",
        "status"=>"done",
        "country_id"=>7,
        'race_id'=>202307,
        'qualification_id'=>202307,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>7

      ];
     $grandPrixWeekends[]=[
        "id"=>202308,
        "name"=>"Grand Prix d'Espagne",
        "status"=>"done",
        "country_id"=>8,
        'race_id'=>202308,
        'qualification_id'=>202308,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>8

      ];
     $grandPrixWeekends[]=[
        "id"=>202309,
        "name"=>"Grand Prix du Canada",
        "status"=>"done",
        "country_id"=>9,
        'race_id'=>202309,
        'qualification_id'=>202309,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>9

      ];
     $grandPrixWeekends[]=[
        "id"=>202310,
        "name"=>"Grand Prix d'Autriche",
        "status"=>"done",
        "country_id"=>10,
        'race_id'=>202310,
        'qualification_id'=>202310,
        'sprint_id'=>202310,
        'sprint_shootout_id'=>202310,
        'track_id'=>10

      ];
     $grandPrixWeekends[]=[
        "id"=>202311,
        "name"=>"Grand Prix Britanique",
        "status"=>"done",
        "country_id"=>11,
        'race_id'=>202311,
        'qualification_id'=>202311,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>11

      ];
     $grandPrixWeekends[]=[
        "id"=>202312,
        "name"=>"Grand Prix Hongrois",
        "status"=>"done",
        "country_id"=>12,
        'race_id'=>202312,
        'qualification_id'=>202312,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>12

      ];
     $grandPrixWeekends[]=[
        "id"=>202313,
        "name"=>"Grand Prix de la Belgique",
        "status"=>"done",
        "country_id"=>13,
        'race_id'=>202313,
        'qualification_id'=>202313,
        'sprint_id'=>202313,
        'sprint_shootout_id'=>202313,
        'track_id'=>13

      ];
     $grandPrixWeekends[]=[
        "id"=>202314,
        "name"=>"Grand Prix des Pays-Bas",
        "status"=>"done",
        "country_id"=>14,
        'race_id'=>202314,
        'qualification_id'=>202314,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>14

      ];
     $grandPrixWeekends[]=[
        "id"=>202315,
        "name"=>"Grand Prix d'Italie",
        "status"=>"done",
        "country_id"=>6,
        'race_id'=>202315,
        'qualification_id'=>202315,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>15

      ];

     $grandPrixWeekends[]=[
        "id"=>202316,
        "name"=>"Grand Prix de Singapore",
        "status"=>"done",
        "country_id"=>15,
        'race_id'=>202316,
        'qualification_id'=>202316,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>16

      ];
     $grandPrixWeekends[]=[
        "id"=>202317,
        "name"=>"Grand Prix du Japon",
        "status"=>"done",
        "country_id"=>16,
        'race_id'=>202317,
        'qualification_id'=>202317,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>17

      ];
     $grandPrixWeekends[]=[
        "id"=>202318,
        "name"=>"Grand Prix de Qatar",
        "status"=>"done",
        "country_id"=>17,
        'race_id'=>202318,
        'qualification_id'=>202318,
        'sprint_id'=>202318,
        'sprint_shootout_id'=>202318,
        'track_id'=>18

      ];
     $grandPrixWeekends[]=[
        "id"=>202319,
        "name"=>"Grand Prix des États Unis",
        "status"=>"done",
        "country_id"=>5,
        'race_id'=>202319,
        'qualification_id'=>202319,
        'sprint_id'=>202319,
        'sprint_shootout_id'=>202319,
        'track_id'=>19

      ];
     $grandPrixWeekends[]=[
        "id"=>202320,
        "name"=>"Grand Prix du Mexique",
        "status"=>"done",
        "country_id"=>18,
        'race_id'=>202320,
        'qualification_id'=>202320,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>20

      ];
     $grandPrixWeekends[]=[
        "id"=>202321,
        "name"=>"Grand Prix du Bresil",
        "status"=>"done",
        "country_id"=>19,
        'race_id'=>202321,
        'qualification_id'=>202321,
        'sprint_id'=>202321,
        'sprint_shootout_id'=>202321,
        'track_id'=>21

      ];
     $grandPrixWeekends[]=[
        "id"=>202322,
        "name"=>"Grand Prix de Las Vegas",
        "status"=>"done",
        "country_id"=>5,
        'race_id'=>202322,
        'qualification_id'=>202322,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>22

      ];
     $grandPrixWeekends[]=[
        "id"=>202323,
        "name"=>"Grand Prix d'Abu Dhabi",
        "status"=>"done",
        "country_id"=>20,
        'race_id'=>202323,
        'qualification_id'=>202323,
        'sprint_id'=>null,
        'sprint_shootout_id'=>null,
        'track_id'=>23

      ];

        Db::table('grand_prix_weekends')->delete();
        Db::table('grand_prix_weekends')->insert($grandPrixWeekends);
    }
}
