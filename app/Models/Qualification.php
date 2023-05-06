<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    public function grandPrixWeekend(){
        return $this->hasOne(GrandPrixWeekend::class);
    }
    public function qualificationResult(){
        return $this->hasMany(QualificationResult::class);
    }

    public function qualificationStory(){
        return $this->belongsTo(QualificationStory::class);
    }

    public function q1out(){
        return $this->hasMany(QualificationResult::class)->orderBy("position","desc")->take(5);
    }
    public function q2out(){
        return $this->hasMany(QualificationResult::class)->orderBy("position","desc")->skip(5)->take(5);
    }
    public function q3results(){
        return $this->hasMany(QualificationResult::class)->orderBy("position","desc")->skip(10)->take(10);
    }
    public function winner(){
        return $this->hasMany(QualificationResult::class)->orderBy("position","asc")->take(1);
    }

    // public function qualificationStory(){
    //     return $this->belongsTo(quali::class);
    // }
}
