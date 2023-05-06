<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualificationStory extends Model
{
    public function qualification(){
        return $this->hasOne(Qualification::class);
    }

    // public function qualificationsStorie(){
    //     return $this->hasOneThrough(Qualification::class,QualificationResult::class);
    // }



    use HasFactory;
}
