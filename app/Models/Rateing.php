<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\book_Coach;

class Rateing extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'coach_id',
    //     'evaluator_id',
    //     'user_id',
    //     'rateing'
    // ];

    protected $guarded = [];
    public function get_rating()
    {
        return $this->belongsTo(book_Coach::class,'user_id');
    }
    // public function get_ratingStudent()
    // {
    //     return $this->hasMany(bookEvaluator::class,'user_id');
    // }
   



}
