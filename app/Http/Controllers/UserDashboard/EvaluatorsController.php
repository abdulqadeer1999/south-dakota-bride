<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\bookEvaluator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EvaluatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

           $getEvaluators = User::where('type','4')->with('get_BookedEvaluator_rating')->withAvg('get_BookedEvaluator_rating','rating_start')->latest()->paginate(4);

        return view('user_dashboard.Evaluators.index',get_defined_vars());
    }

    public function bookedEvaluator()
    {
        // dd("Book");->groupBy('evaluator_id')
          $getBookevaluatorlist = bookEvaluator::where('user_id',Auth::id())->with('get_bookedEvaluator.get_BookedEvaluator_rating')->withAvg('get_bookedEvaluatorRating','rating_start')->latest()->paginate(3);
        return view('user_dashboard.EvaluatorBooking.index',get_defined_vars());

    }


    public function Evaluators_profile($id)
    {
        // dd('profile');
        $getEvaluators_profile = User::where('id',$id)->get();
        return view('user_dashboard.Evaluators.profile',get_defined_vars());
        // return view('user_dashboard.Coaches.profile');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {

        // dd($request->all());
          $arr =
          [
            'evaluator_id' => $request->id,
            'user_id' => Auth::user()->id,
            // 'time_slot' => $request->time_slot,
          ];
        session()->put('bookevaluator', $arr);
        // dd(session()->get('bookcoach'));
        return redirect()->route('evaluatorsBooking_paypal');

    }

    public function paypal(){

        return view('user_dashboard.EvaluatorBooking.EvaluatorPaypal');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        bookEvaluator::create([

            'evaluator_id' => session()->get('bookevaluator')['evaluator_id'],
            'user_id' => session()->get('bookevaluator')['user_id'],

        ]);

        $StudentEmail = User::where('id',session()->get('bookevaluator')['user_id'])->first();
        $EvaluatorEmail = User::where('id',session()->get('bookevaluator')['evaluator_id'])->first();
        $adminEmail = User::where('type',1)->first();
        $token = sha1(uniqid(time(), true));
        $emails = [$StudentEmail->email,$EvaluatorEmail->email,$adminEmail->email];
        Mail::send('Mail.SignUp_mail', ['data' => route('AmeaToday', ['token' => $token])], function($m) use ($emails)
        {
            $m->to($emails)->subject('This is the email subject');
        });
        session()->forget('bookevaluator');
        return response()->json([
            'status' => 200
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
