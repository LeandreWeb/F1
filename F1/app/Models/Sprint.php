<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory;

    public function grandPrix(){
        return $this->hasMany(GrandsPrix::class);
    }
    public function sprintResult(){
        return $this->hasMany(SprintResult::class);
    }
}
