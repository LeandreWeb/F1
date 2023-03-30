<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Driver;
use App\Models\RaceResult;
use App\Models\Race;

class pointsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raceresults =RaceResult::all();

        $drivers = Driver::all();
        $racesDones=RaceResult::select("races_id")->max("races_id");

        $fastestLapsPoint=[];
        
        for ($i=0; $i < $racesDones; $i++) { 
            $fastestLap=RaceResult::where("races_id",$i+1)->min("best_lap");
            $fastestdriver=RaceResult::select("drivers_id","position")->where("races_id",$i+1)->where("best_lap",$fastestLap)->get();
            
            echo $fastestLap. "\n";
            echo $fastestdriver. "\n";
            
            echo $fastestdriver[0]->position . "\n";
            
            if ($fastestdriver[0]->position>10){
                $fastestdriver[0]->drivers_id=0;
            }
            
            $fastestLapsPoint[]=$fastestdriver[0];
        }

        

        foreach($drivers as $driver){

            $totalPoints=0;
            $bestLap=0;

            $raceResults=RaceResult::select("points","best_lap")->where('drivers_id',$driver->id)->get();


            foreach($raceResults as $raceResult){
                if($raceResult->points){
                    $totalPoints+=$raceResult->points;
                }
                
            }
            
            foreach($fastestLapsPoint as $fastestLap){
                
                if($fastestLap->drivers_id == $driver->id)
                {
                    $totalPoints+=1;
                }
            }


            $driver->points = $totalPoints;
            $driver->save();
            // Driver::where('id',$driver->id)->update
            
        }

    }
}
