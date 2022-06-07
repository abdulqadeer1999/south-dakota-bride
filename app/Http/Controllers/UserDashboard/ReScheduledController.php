<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\ReScheduled;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReScheduledController extends Controller
{
    public function send(Request $request, $coach_id)
    {
        $message = new ReScheduled();
        $message->message = $request->message;
        $message->coach_id = $coach_id;
        $message->user_id = auth()->id();
        $message->time = date("j-M-Y H:i:s A");
        $message->save();

        $StudentEmail = User::where('id',auth()->id())->first();
        $CoachEmail = User::where('id',$coach_id)->first();
        $adminEmail = User::where('type',1)->first();

        $token = sha1(uniqid(time(), true));

        $emails = [$StudentEmail->email,$CoachEmail->email,$adminEmail->email];
        Mail::send('Mail.SignUp_mail', ['data' => route('AmeaToday', ['token' => $token])], function($m) use ($emails)
        {
            $m->to($emails)->subject('This is the email subject');
        });

        return [
            "success" => true,
            "message" => $request->message,
            "time" => date("j-M-Y H:i:s A")
        ];


    }

    public function CoachReScheduled(Request $request, $coach_id)
    {

        $message = new ReScheduled();
        $message->message = $request->message;
        $message->coach_id = $coach_id;
        $message->user_id = auth()->id();
        $message->time = date("j-M-Y H:i:s A");
        $message->save();

        $StudentEmail = User::where('id',auth()->id())->first();
        $CoachEmail = User::where('id',$coach_id)->first();
        $adminEmail = User::where('type',1)->first();

        $token = sha1(uniqid(time(), true));

        $emails = [$StudentEmail->email,$CoachEmail->email,$adminEmail->email];
        Mail::send('Mail.SignUp_mail', ['data' => route('AmeaToday', ['token' => $token])], function($m) use ($emails)
        {
            $m->to($emails)->subject('This is the email subject');
        });

        return [
            "success" => true,
            "message" => $request->message,
            "time" => date("j-M-Y H:i:s A")
        ];

    }

}
