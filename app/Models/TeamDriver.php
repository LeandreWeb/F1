<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamDriver extends Model
{
    use HasFactory;

    protected $table = 'team_drivers';

    public function driver(){
        return $this->belongsTo(Driver::class);
    }
    
    public function seasonTeam(){
        return $this->belongsTo(SeasonTeam::class);
    }

    public function points(){
        $driverId= $this->driver->id;
        $year = $this->seasonTeam->season_id;

        $racePoints = RaceResult::join('races', 'race_results.race_id', '=', 'races.id')
        ->join('grand_prix_weekends', 'races.id', '=', 'grand_prix_weekends.id')
        ->where('grand_prix_weekends.Season_id',$year )
        ->where('race_results.driver_id',$driverId )
        ->sum('points');

        $sprintPoints = SprintResult::join('sprints', 'sprint_results.sprint_id', '=', 'sprints.id')
        ->join('grand_prix_weekends', 'sprints.id', '=', 'grand_prix_weekends.id')
        ->where('grand_prix_weekends.Season_id', $year)
        ->where('sprint_results.driver_id', $driverId)
        ->sum('points');

        $races = Race::join('grand_prix_weekends', 'races.id', '=', 'grand_prix_weekends.id')
        ->where('grand_prix_weekends.Season_id',$year)->get();

        $totalPoints = $racePoints +$sprintPoints ;
        
        foreach ($races as $race ){

            $fastestLap = $race->fastestLap();
                
                if($fastestLap && $fastestLap->driver_id == $driverId && $fastestLap->position < 11)
                {
                    $totalPoints += 1;
                }

        }

        if($totalPoints = null){

            $totalPoints = 0;
        }

    return $totalPoints;
    }

}
