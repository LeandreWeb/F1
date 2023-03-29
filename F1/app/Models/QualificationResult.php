<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualificationResult extends Model
{
    use HasFactory;
    
    protected $table ="qualifications_results";
    protected $primaryKey = "_id";
}
