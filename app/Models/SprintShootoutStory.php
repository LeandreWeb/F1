<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SprintShootoutStory extends Model
{
    public function sprintShootout(){
        return $this->hasOne(SprintShootout::class);
    }

    use HasFactory;
}
