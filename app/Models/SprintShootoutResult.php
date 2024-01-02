<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SprintShootoutResult extends Model
{
    protected $table ="sprint_shootout_results";


    public function sprintShootout(){
        return $this->belongsTo(SprintShootout::class);
    }
    public function driver(){
        return $this->belongsTo(Driver::class);
    }



    use HasFactory;
}
