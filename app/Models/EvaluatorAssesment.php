<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluatorAssesment extends Model
{
    use HasFactory;
    public function get_bookedEvaluator()
    {
        return $this->belongsTo(User::class,'evaluator_id');
    }

    public function get_bookedUserName()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
