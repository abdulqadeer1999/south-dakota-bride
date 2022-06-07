<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\bookEvaluator;
use App\Models\EvaluatorAssesment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AssesmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $getAssesment= EvaluatorAssesment::where('evaluator_id',Auth::id())->with('get_bookedUserName')->latest()->paginate(4);
        $getStudents = bookEvaluator::where('evaluator_id',Auth::id())->get();
            return view('user_dashboard.EvaluatorAssesment.index',get_defined_vars());
    }
    public function assesmentStudent()
    {

        return  $getAssesment= EvaluatorAssesment::where('user_id',Auth::user()->id)->with('get_bookedEvaluator')->latest()->paginate(4);
            return view('user_dashboard.EvaluatorAssesment.assesment',get_defined_vars());

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $getStudents = bookEvaluator::where('id',$id)->with('get_bookedStudent')->get();
        return view('user_dashboard.EvaluatorAssesment.create',get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd( $request->all());
        $this->validate($request, [
            'title' => "required|max:255",
            'audio' => "required",
            // 'content' => "required",
        ]);

        $cms = new EvaluatorAssesment();
        $cms->title = $request->title;
        $cms->user_id = $request->user_id;
        $cms->evaluator_id = auth()->id();
        if($audio = $request->file("audio")) {
            $audioName = $audio->getClientOriginalName();
            $audio->move(public_path('storage/uploads/audio/'), $audioName);
            $cms->audio = $audioName;
        }
        $cms->save();


        $StudentEmail = User::where('id',$request->user_id)->first();
        $CoachEmail = User::where('id',auth()->id())->first();
        $adminEmail = User::where('type',1)->first();

        $token = sha1(uniqid(time(), true));

        $emails = [$StudentEmail->email,$CoachEmail->email,$adminEmail->email];
        Mail::send('Mail.SignUp_mail', ['data' => route('AmeaToday', ['token' => $token])], function($m) use ($emails)
        {
            $m->to($emails)->subject('This is the email subject');
        });
        $notification = array('UserMessage' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('assesment')->with($notification);
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
        $edit_data = EvaluatorAssesment::where('id',$id)->first();
        $getStudents = bookEvaluator::where('user_id',$edit_data->user_id)->with('get_bookedStudent')->get();

        return view('user_dashboard.EvaluatorAssesment.edit',get_defined_vars());

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

        $this->validate($request, [
            'title' => "required|max:255",
            'audio' => "required",
            // 'content' => "required",
        ]);

        $cms = EvaluatorAssesment::findOrFail($id);
        $cms->title = $request->title;
        $cms->user_id = $request->user_id;
        $cms->evaluator_id = auth()->id();
        if($audio = $request->file("audio")) {
            $audioName = $audio->getClientOriginalName();
            $audio->move(public_path('storage/uploads/audio/'), $audioName);
            $cms->audio = $audioName;
        }
        $cms->save();
        $notification = array('UserMessage' =>'Your data Updated Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('assesment')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('Your payment');
        $cms = EvaluatorAssesment::find($id);
        Storage::delete('public/uploads/audio/'.$cms->image);
        $cms->delete();
        return redirect()->route('assesment');
    }
}
