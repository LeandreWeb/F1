<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory;

    protected $table ="sprints";


    public function sprintResults(){
        return $this->hasMany(SprintResult::class);
    }
    public function grandPrixWeekend(){
        return $this->hasOne(GrandPrixWeekend::class);
    }
    public function sprintStory(){
        return $this->belongsTo(SprintStory::class);
    }
    // public function sprintStory(){
    //     return $this->belongsTo(SprintStory::class);
    // }
}
