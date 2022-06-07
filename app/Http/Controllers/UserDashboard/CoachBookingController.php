<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\appoinment;
use App\Models\book_Coach;
use App\Models\Rateing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CoachBookingController extends Controller
{
    public function index()
    {
        // dd('profile');
        // return
        // return $getCoacheslist = book_Coach::where('user_id',Auth::id())->with('get_coaches.coach_rating','get_timeSlot')->withAvg('get_BookedCoachRating','rating_start')->latest()->paginate(3);

        $getCoacheslist = book_Coach::where('user_id',Auth::id())->with('get_coaches.coach_rating','get_timeSlot')->withAvg('get_BookedCoachRating','rating_start')->latest()->paginate(3);

        // return $getCoacheslist[0]->get_coaches->coach_rating[0]->rating_start;
        return view('user_dashboard.CoachBooking.index',get_defined_vars());
    }

    public function create(Request $request,$id)
    {

        // dd($id);
        // dd($request->all());

        $this->validate($request, [
            'time_slot' => "required|max:255",
        ]);

        $arr =
        [
            'coach_id' => $request->id,
            'user_id' => Auth::user()->id,
            'time_slot' => $request->time_slot,

        ];
        // dd($arr);
        session()->put('bookcoach', $arr);
        return redirect()->route('CoachBooking.paypal');

    }

    public function paypal(){

        return view('user_dashboard.CoachBooking.coachPaypal');

    }

    public function StoreCoachBooking(Request $request)
    {
        // dd(session()->get('bookcoach'));

        book_Coach::create([

            'coach_id' => session()->get('bookcoach')['coach_id'],
            'user_id' => session()->get('bookcoach')['user_id'],
            'time_slot' => session()->get('bookcoach')['time_slot'],
        ]);
        // dd(session()->get('bookcoach')['time_slot']);
       $updateStatus = appoinment::where('id',session()->get('bookcoach')['time_slot'])->first();
       $updateStatus->status = 2;
       $updateStatus->save();

        $StudentEmail = User::where('id',session()->get('bookcoach')['user_id'])->first();
        $CoachEmail = User::where('id',session()->get('bookcoach')['coach_id'])->first();
        $adminEmail = User::where('type',1)->first();
        $token = sha1(uniqid(time(), true));
        $emails = [$StudentEmail->email,$CoachEmail->email,$adminEmail->email];
        Mail::send('Mail.SignUp_mail', ['data' => route('AmeaToday', ['token' => $token])], function($m) use ($emails)
        {
            $m->to($emails)->subject('This is the email subject');
        });
        session()->forget('bookcoach');
        return response()->json([
            'status' => 200
        ]);



    }


}
