<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Driver;
use App\Models\RaceResult;

class pointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceresults =RaceResult::all();

        $drivers = Driver::all();

        foreach($drivers as $driver){
            $totalPoints=0;
            $bestLap=0;

            $raceResults=RaceResult::select("points","best_lap")->where('drivers_id',$driver->id)->get();

            foreach($raceResults as $raceResult){
                if($raceResult->points){
                    $totalPoints+=$raceResult->points;
                }
                if($raceResult->best_lap){
                    echo "Best Lap :" . $raceResult->best_lap;
                }
            }
            echo $driver->Lastname. " : " . $totalPoints . "\n" ;
            
        }

    }
}
