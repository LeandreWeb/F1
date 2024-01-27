<?php

namespace Database\Seeders\Seeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeamPrincipalsSeeder2023 extends Seeder
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
        
        $teamPrincipals[]=[
            'id'=>202301,
            'principal_id'=>1,
            'season_team_id'=>202301,
            'status'=>"active"
        ];
        $teamPrincipals[]=[
            'id'=>202302,
            'principal_id'=>2,
            'season_team_id'=>202302,
            'status'=>"active"
        ];
        $teamPrincipals[]=[
            'id'=>202303,
            'principal_id'=>3,
            'season_team_id'=>202303,
            'status'=>"active"
        ];
        $teamPrincipals[]=[
            'id'=>202304,
            'principal_id'=>4,
            'season_team_id'=>202304,
            'status'=>"active"
        ];
        $teamPrincipals[]=[
            'id'=>202305,
            'principal_id'=>5,
            'season_team_id'=>202305,
            'status'=>"active"
        ];
        $teamPrincipals[]=[
            'id'=>202306,
            'principal_id'=>6,
            'season_team_id'=>202306,
            'status'=>"fired"
        ];
        $teamPrincipals[]=[
            'id'=>202307,
            'principal_id'=>7,
            'season_team_id'=>202307,
            'status'=>"active"
        ];
        $teamPrincipals[]=[
            'id'=>202308,
            'principal_id'=>8,
            'season_team_id'=>202308,
            'status'=>"active"
        ];
        $teamPrincipals[]=[
            'id'=>202309,
            'principal_id'=>9,
            'season_team_id'=>202309,
            'status'=>"active"
        ];
        $teamPrincipals[]=[
            'id'=>202310,
            'principal_id'=>10,
            'season_team_id'=>202310,
            'status'=>"active"
        ];
        $teamPrincipals[]=[
            'id'=>202311,
            'principal_id'=>11,
            'season_team_id'=>202306,
            'status'=>"active"
        ];

        DB::table('team_principals')->delete();
        DB::table('team_principals')->insert($teamPrincipals);

    }
}
