<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamPrincipals extends Model
{
    use HasFactory;

    protected $table = 'team_principals';


    public function seasonTeam(){
        return $this->belongsTo(SeasonTeam::class);
    }

    public function principal(){
        return $this->hasMany(Principal::class);
    }
}
