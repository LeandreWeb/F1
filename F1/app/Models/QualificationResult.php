<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualificationResult extends Model
{
    use HasFactory;
    
    public function qualifications(){
        return $this->belongsTo(Qualification::class);
    }
    public function driver(){
        return $this->belongsTo(Driver::class);
    }
}
