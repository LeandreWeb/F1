<?php

namespace Database\Seeders\Seeders2023;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeamDriversSeeder2023 extends Seeder
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
            'id'=>202301,
            'driver_id'=>16,
            'season_team_id'=>202301,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202302,
            'driver_id'=>55,
            'season_team_id'=>202301,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202303,
            'driver_id'=>1,
            'season_team_id'=>202302,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202304,
            'driver_id'=>11,
            'season_team_id'=>202302,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202305,
            'driver_id'=>14,
            'season_team_id'=>202303,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202306,
            'driver_id'=>18,
            'season_team_id'=>202303,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202307,
            'driver_id'=>44,
            'season_team_id'=>202304,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202308,
            'driver_id'=>63,
            'season_team_id'=>202304,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202309,
            'driver_id'=>77,
            'season_team_id'=>202305,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202310,
            'driver_id'=>24,
            'season_team_id'=>202305,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202311,
            'driver_id'=>10,
            'season_team_id'=>202306,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202312,
            'driver_id'=>31,
            'season_team_id'=>202306,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202313,
            'driver_id'=>2,
            'season_team_id'=>202307,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202314,
            'driver_id'=>23,
            'season_team_id'=>202307,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202315,
            'driver_id'=>3,
            'season_team_id'=>202308,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202316,
            'driver_id'=>22,
            'season_team_id'=>202308,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202317,
            'driver_id'=>40,
            'season_team_id'=>202308,
            'status'=>'reserve'
        ];
        $teamDrivers[]=[
            'id'=>202318,
            'driver_id'=>21,
            'season_team_id'=>202308,
            'status'=>'fired'
        ];
        $teamDrivers[]=[
            'id'=>202319,
            'driver_id'=>27,
            'season_team_id'=>202309,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202320,
            'driver_id'=>20,
            'season_team_id'=>202309,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202321,
            'driver_id'=>4,
            'season_team_id'=>202310,
            'status'=>'active'
        ];
        $teamDrivers[]=[
            'id'=>202322,
            'driver_id'=>81,
            'season_team_id'=>202310,
            'status'=>'active'
        ];

        DB::table('team_drivers')->delete();
        DB::table('team_drivers')->insert($teamDrivers);

    }
}
