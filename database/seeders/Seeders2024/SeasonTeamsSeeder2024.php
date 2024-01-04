<?php

namespace Database\Seeders\Seeders2024;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SeasonTeamsSeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seasonteams=[];
        // $seasonteams[]=[
        //     'id'=> 202401,
        //     'season_id'=>2024,
        //     'team_id'=>1,
        //     'car_id'=>202401
        // ];
        // $seasonteams[]=[
        //     'id'=> 202402,
        //     'season_id'=>2024,
        //     'team_id'=>2,
        //     'car_id'=>202402
        // ];
        // $seasonteams[]=[
        //     'id'=> 202403,
        //     'season_id'=>2024,
        //     'team_id'=>3,
        //     'car_id'=>202403
        // ];
        // $seasonteams[]=[
        //     'id'=> 202404,
        //     'season_id'=>2024,
        //     'team_id'=>4,
        //     'car_id'=>202404
        // ];
        // $seasonteams[]=[
        //     'id'=> 202405,
        //     'season_id'=>2024,
        //     'team_id'=>5,
        //     'car_id'=>202405
        // ];
        // $seasonteams[]=[
        //     'id'=> 202406,
        //     'season_id'=>2024,
        //     'team_id'=>6,
        //     'car_id'=>202406
        // ];
        // $seasonteams[]=[
        //     'id'=> 202407,
        //     'season_id'=>2024,
        //     'team_id'=>7,
        //     'car_id'=>202407
        // ];
        // $seasonteams[]=[
        //     'id'=> 202408,
        //     'season_id'=>2024,
        //     'team_id'=>8,
        //     'car_id'=>202408
        // ];
        // $seasonteams[]=[
        //     'id'=> 202409,
        //     'season_id'=>2024,
        //     'team_id'=>9,
        //     'car_id'=>202409
        // ];
        // $seasonteams[]=[
        //     'id'=> 202410,
        //     'season_id'=>2024,
        //     'team_id'=>10,
        //     'car_id'=>202410
        // ];

        DB::table('season_teams')->delete();
        DB::table('season_teams')->insert($seasonteams);
    }
}
