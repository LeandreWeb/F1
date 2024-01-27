<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrandPrixWeekend extends Model
{
    use HasFactory;
    
    protected $table ="grand_prix_weekends";

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function race(){
        return $this->belongsTo(Race::class);
    }

    public function qualification(){
        return $this->belongsTo(Qualification::class);
    }

    public function sprint(){
        return $this->belongsTo(Sprint::class);
    }
    public function sprintShootout(){
        return $this->belongsTo(SprintShootout::class);
    }

    public function track(){
        return $this->belongsTo(Track::class);
    }
    public function season(){
        return $this->belongsTo(Season::class);
    }
    public function article(){
        return $this->hasOne(Article::class);
    }

}
