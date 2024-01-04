<?php

namespace Database\Seeders\Seeders2024;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeamPrincipalsSeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */

     /*
      Possibles status:
      -active
      -fired
     */ 
    public function run(): void
    {
        $teamPrincipals=[];
        
        // $teamPrincipals[]=[
        //     'id'=>202401,
        //     'principal_id'=>1,
        //     'season_team_id'=>202401,
        //     'status'=>"active"
        // ];
        // $teamPrincipals[]=[
        //     'id'=>202402,
        //     'principal_id'=>2,
        //     'season_team_id'=>202402,
        //     'status'=>"active"
        // ];
        // $teamPrincipals[]=[
        //     'id'=>202403,
        //     'principal_id'=>3,
        //     'season_team_id'=>202403,
        //     'status'=>"active"
        // ];
        // $teamPrincipals[]=[
        //     'id'=>202404,
        //     'principal_id'=>4,
        //     'season_team_id'=>202404,
        //     'status'=>"active"
        // ];
        // $teamPrincipals[]=[
        //     'id'=>202405,
        //     'principal_id'=>5,
        //     'season_team_id'=>202405,
        //     'status'=>"active"
        // ];
        // $teamPrincipals[]=[
        //     'id'=>202406,
        //     'principal_id'=>6,
        //     'season_team_id'=>202406,
        //     'status'=>"fired"
        // ];
        // $teamPrincipals[]=[
        //     'id'=>202407,
        //     'principal_id'=>7,
        //     'season_team_id'=>202407,
        //     'status'=>"active"
        // ];
        // $teamPrincipals[]=[
        //     'id'=>202408,
        //     'principal_id'=>8,
        //     'season_team_id'=>202408,
        //     'status'=>"active"
        // ];
        // $teamPrincipals[]=[
        //     'id'=>202409,
        //     'principal_id'=>9,
        //     'season_team_id'=>202409,
        //     'status'=>"active"
        // ];
        // $teamPrincipals[]=[
        //     'id'=>202410,
        //     'principal_id'=>10,
        //     'season_team_id'=>202410,
        //     'status'=>"active"
        // ];
        // $teamPrincipals[]=[
        //     'id'=>202411,
        //     'principal_id'=>11,
        //     'season_team_id'=>202406,
        //     'status'=>"active"
        // ];

        DB::table('team_principals')->delete();
        DB::table('team_principals')->insert($teamPrincipals);

    }
}
