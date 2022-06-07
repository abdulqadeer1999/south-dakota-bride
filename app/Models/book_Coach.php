<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Rateing;

class book_Coach extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = [
    //     'coach_id',
    //     'user_id',
    //     'time_slot',
    //     'Rateing'
    // ];
    // public function get_bookedStudent()
    // {
    //     return $this->belongsTo(User::class,'user_id');
    // }
    public function get_bookedStudent()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function get_coaches()
    {
        return $this->belongsTo(User::class,'coach_id');
    }
    public function get_BookedCoachRating()
    {
        return $this->hasMany(CoachRating::class,'time_slot_id','time_slot');
        // return $this->hasMany(CoachRating::class,'coach_id','coach_id');
    }

    // public function get_Rating()
    // {
    //     return $this->hasMany(CoachRating::class,'book__coache_id');
    // }

    public function get_timeSlot()
    {
        return $this->belongsTo(appoinment::class,'time_slot');
    }
    public function get_rating_by_coach()
    {
        return $this->hasMany(Rateing::class,'user_id','user_id');
        // return $this->hasMany(Rateing::class,'coach_id','coach_id');
    }
    public function get_rating_by_coach_forStudentList()
    {
        return $this->hasMany(Rateing::class,'card_id');
        // return $this->hasMany(Rateing::class,'user_id','user_id');
    }
    public function get_coaches_for_admin_show_user()
    {
        return $this->belongsTo(User::class,'coach_id');
    }
    public function get_admin_show_Students()
    {
        return $this->belongsTo(User::class,'user_id');
    }


}
