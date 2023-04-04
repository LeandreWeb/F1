<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    public function grandPrix(){
        return $this->hasMany(GrandsPrix::class);
    }
    public function qualificationResult(){
        return $this->hasMany(QualificationResult::class);
    }
    // public function qualificationStory(){
    //     return $this->belongsTo(quali::class);
    // }
}
