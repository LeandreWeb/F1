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
        $racesDones=RaceResult::select("race_id")->max("race_id");

        $fastestLapsPoint=[];



        for ($i=0; $i < $racesDones; $i++) {
            $fastestLap=RaceResult::where("race_id",$i+1)->min("best_lap");

            if($fastestLap){
                $fastestdriver=RaceResult::select("driver_id","position")->where("race_id",$i+1)->where("best_lap",$fastestLap)->get();
            }
            else{
                $fastestdriver[0]=null;
            }

            if ($fastestdriver[0]) {
                if ($fastestdriver[0]->position>10){
                    $fastestdriver[0]->driver_id=0;
                }
                $fastestLapsPoint[]=$fastestdriver[0];



            }


        }



        foreach($drivers as $driver){

            echo "\n \n" . $driver->Lastname . "\n" ;
            $totalPoints=0;
            $bestLap=0;

            $raceResults=$driver->raceResult;

            $sprintResults=$driver->sprintResult;

            echo "RacePoints \n";

            foreach($raceResults as $raceResult){
                if($raceResult->points){
                    $totalPoints+=$raceResult->points;
                    echo"--". $raceResult->points. "--\n" ;
                }

            }

            echo "SprintPoints\n";


            foreach($sprintResults as $sprintResult){
                if ($sprintResult->points) {
                    $totalPoints+=$sprintResult->points;
                    echo"--". $sprintResult->points. "--\n" ;

                }
            }

            echo "Fastestlap";

            foreach($fastestLapsPoint as $fastestLap){



                if($fastestLap->driver_id == $driver->id)
                {
                    $totalPoints+=1;
                    echo "+1";
                }
            }


            $driver->points = $totalPoints;
            $driver->save();
            // Driver::where('id',$driver->id)->update

        }

    }
}
