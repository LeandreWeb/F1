<?php

namespace Database\Seeders\Seeders2024;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeamDriversSeeder2024 extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * status
     * -active
     * -reserve
     * -fired
     */
    public function run(): void
    {
        $teamDrivers=[];

        $teamDrivers[]=[
            'id'=>202401,
            'driver_id'=>16,
            'season_team_id'=>202401,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202402,
            'driver_id'=>55,
            'season_team_id'=>202401,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202403,
            'driver_id'=>1,
            'season_team_id'=>202402,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202404,
            'driver_id'=>11,
            'season_team_id'=>202402,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202405,
            'driver_id'=>14,
            'season_team_id'=>202403,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202406,
            'driver_id'=>18,
            'season_team_id'=>202403,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202407,
            'driver_id'=>44,
            'season_team_id'=>202404,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202408,
            'driver_id'=>63,
            'season_team_id'=>202404,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202409,
            'driver_id'=>77,
            'season_team_id'=>202405,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202410,
            'driver_id'=>24,
            'season_team_id'=>202405,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202411,
            'driver_id'=>10,
            'season_team_id'=>202406,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202412,
            'driver_id'=>31,
            'season_team_id'=>202406,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202413,
            'driver_id'=>2,
            'season_team_id'=>202407,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202414,
            'driver_id'=>23,
            'season_team_id'=>202407,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202415,
            'driver_id'=>3,
            'season_team_id'=>202408,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202416,
            'driver_id'=>22,
            'season_team_id'=>202408,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202417,
            'driver_id'=>40,
            'season_team_id'=>202408,
            'status'=>'reserve'
        ];
        $teamDrivers[]=[
            'id'=>202418,
            'driver_id'=>21,
            'season_team_id'=>202408,
            'status'=>'fired'
        ];
        $teamDrivers[]=[
            'id'=>202419,
            'driver_id'=>27,
            'season_team_id'=>202409,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202420,
            'driver_id'=>20,
            'season_team_id'=>202409,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202421,
            'driver_id'=>4,
            'season_team_id'=>202410,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202422,
            'driver_id'=>81,
            'season_team_id'=>202410,
            'status'=>'active'
        ];

        DB::table('team_drivers')->delete();
        DB::table('team_drivers')->insert($teamDrivers);

    }
}
