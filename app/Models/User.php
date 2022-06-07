<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\book_Coach;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'contact',
        'message',
        'password',
        'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function get_BookedEvaluator_rating()
    {
        return $this->hasMany(EvaluatorRateing::class,'evaluator_id');
        // return $this->hasMany(EvaluatorRateing::class,'evaluator_id');
    }

    public function get__evaluator_profile_rating()
    {

        return $this->hasMany(EvaluatorRateing::class,'evaluator_id');

    }
    public function get_user_rating()
    {
        return $this->hasMany(Rateing::class,'user_id');
    }

    public function get_user_ratingbyEvaluatoronprofile()
    {
        return $this->hasMany(ratinByEvaluator::class,'user_id');
    }
    // public function get_CoachProfile_rating()
    // {
    //     return $this->hasMany(Rateing::class,'coach_id','id');
    // }


    public function getMessagesAttribute()
    {
        return $this->messages()->get();
    }

    public function admin_studentData()
    {
        return $this->hasMany(book_Coach::class, 'user_id');
    }

    public function admin_coachData()
    {
        return $this->hasMany(book_Coach::class, 'coach_id');
    }

    public function admin_EvaluatorData()
    {
        return $this->hasMany(bookEvaluator::class, 'evaluator_id');
    }

    public function messages_send()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function messages_receive()
    {
        return $this->hasMany(Message::class, 'reciever_id');
    }


    public function coach_rating()
    {
        return $this->hasMany(CoachRating::class, 'coach_id');
    }
    public function get_coachlist_rating()
    {
        return $this->hasMany(CoachRating::class,'coach_id');
    }






}
