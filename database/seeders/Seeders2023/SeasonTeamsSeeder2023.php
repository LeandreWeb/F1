<?php

namespace Database\Seeders\Seeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeasonTeamsSeeder2023 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seasonteams=[];
        $seasonteams[]=[
            'id'=> 202301,
            'season_id'=>2023,
            'team_id'=>1,
            'car_id'=>202301
        ];
        $seasonteams[]=[
            'id'=> 202302,
            'season_id'=>2023,
            'team_id'=>2,
            'car_id'=>202302
        ];
        $seasonteams[]=[
            'id'=> 202303,
            'season_id'=>2023,
            'team_id'=>3,
            'car_id'=>202303
        ];
        $seasonteams[]=[
            'id'=> 202304,
            'season_id'=>2023,
            'team_id'=>4,
            'car_id'=>202304
        ];
        $seasonteams[]=[
            'id'=> 202305,
            'season_id'=>2023,
            'team_id'=>5,
            'car_id'=>202305
        ];
        $seasonteams[]=[
            'id'=> 202306,
            'season_id'=>2023,
            'team_id'=>6,
            'car_id'=>202306
        ];
        $seasonteams[]=[
            'id'=> 202307,
            'season_id'=>2023,
            'team_id'=>7,
            'car_id'=>202307
        ];
        $seasonteams[]=[
            'id'=> 202308,
            'season_id'=>2023,
            'team_id'=>8,
            'car_id'=>202308
        ];
        $seasonteams[]=[
            'id'=> 202309,
            'season_id'=>2023,
            'team_id'=>9,
            'car_id'=>202309
        ];
        $seasonteams[]=[
            'id'=> 202310,
            'season_id'=>2023,
            'team_id'=>10,
            'car_id'=>202310
        ];

        DB::table('season_teams')->delete();
        DB::table('season_teams')->insert($seasonteams);
    }
}
