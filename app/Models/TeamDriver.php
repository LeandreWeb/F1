<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamDriver extends Model
{
    use HasFactory;

    public function Drivers(){
        return $this->hasMany(Driver::class);
    }
}
