<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReScheduled extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "coach_id",
        "message",
        "status"
    ];
}
