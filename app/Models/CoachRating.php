<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachRating extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function get_rating()
    {
        return $this->belongsTo(book_Coach::class,'user_id');
    }

}
