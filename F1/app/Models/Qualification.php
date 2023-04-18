<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    public function grandPrix(){
        return $this->hasOne(GrandsPrix::class);
    }
    public function qualificationResult(){
        return $this->hasMany(QualificationResult::class);
    }

    public function qualificationStory(){
        return $this->belongsTo(QualificationStory::class);
    }

    public function q3out(){
        return $this->hasMany(QualificationResult::class)->orderBy("position","desc")->take(5);
    }
    public function q2out(){
        return $this->hasMany(QualificationResult::class)->orderBy("position","desc")->skip(5)->take(5);
    }
    public function q1results(){
        return $this->hasMany(QualificationResult::class)->orderBy("position","asc")->take(5);
    }

    // public function qualificationStory(){
    //     return $this->belongsTo(quali::class);
    // }
}
