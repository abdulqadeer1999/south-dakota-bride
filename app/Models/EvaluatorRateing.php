<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluatorRateing extends Model
{
    use HasFactory;
    protected $guarded = [];


    // public function get_evaluator_rating()
    // {
    //     return $this->belongsTo(bookEvaluator::class,'user_id');
    // }

}
