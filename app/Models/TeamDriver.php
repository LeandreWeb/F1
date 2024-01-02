<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamDriver extends Model
{
    use HasFactory;

    protected $table = 'team_drivers';

    public function driver(){
        return $this->belongsTo(Driver::class);
    }
    
    public function seasonTeam(){
        return $this->belongsTo(SeasonTeam::class);
    }
}
