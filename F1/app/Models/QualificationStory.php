<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualificationStory extends Model
{
    public function qualification(){
        return $this->hasone(Qualification::class);
    }

    use HasFactory;
}
