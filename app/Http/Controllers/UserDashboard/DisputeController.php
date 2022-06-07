<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\appoinment;
use App\Models\challenge;
use App\Models\Dispute;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DisputeController extends Controller
{
    public function index(){

        // $getDispute = Dispute::where('user_id',Auth::user()->id)->get();
        $getDispute = Dispute::where('coach_id',Auth::user()->id)->get();
        // $getDispute = Dispute::all();

        //    dd( $getAppoinment);
            return view('user_dashboard.Dispute.index',get_defined_vars());
    }


    public function send(Request $request, $coach_id)
    {
        $this->validate($request, [
            'message' => "required|max:255",
            'file' => "required|max:255",
        ]);


        $message = new Dispute();
        $message->message = $request->message;
        $message->coach_id = $coach_id;
        $message->user_id = auth()->id();
        // $message->time = date("j-M-Y H:i:s A");
        // $message->file = $request->file;
        if($file = $request->file("file")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $file->getClientOriginalName();
            $file->move(public_path('storage/uploads/cms/'), $imageName);
            $message->file = $imageName;

        }
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



    public function challenge(Request $request, $id)
    {

        // dd($request->all());
        $this->validate($request, [
            'message' => "required|max:255",
            'file' => "required|max:255",
        ]);


        $message =  new challenge();
        $message->message = $request->message;
        $message->coach_id =auth()->id();


        if($file = $request->file("file")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $file->getClientOriginalName();
            $file->move(public_path('storage/uploads/cms/'), $imageName);
            $message->file = $imageName;

        }
        $message->save();

        $CoachEmail = User::where('id',auth()->id())->first();
        $adminEmail = User::where('type',1)->first();

        $token = sha1(uniqid(time(), true));
        $emails = [$CoachEmail->email,$adminEmail->email];
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
