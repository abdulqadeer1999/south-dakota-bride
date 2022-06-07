<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        "sender_id",
        "reciever_id",
        "time",
        "message"
    ];

    public function get_message()
    {
        return $this->belongsTo(User::class,'reciever_id');
    }
  public function users_invers(){

        return $this->belongsTo(User::class, 'sender_id');
    }
    // public function messages_receive()
    // {
    //     return $this->hasMany(Message::class, 'reciever_id');
    // }
}
