<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SprintShootoutStory extends Model
{
    protected $table ="sprint_shootout_stories";

    public function sprintShootout(){
        return $this->hasOne(SprintShootout::class);
    }

    use HasFactory;
}
