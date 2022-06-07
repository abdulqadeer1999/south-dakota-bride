<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserProfilecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit()
    {

         $id= Auth::user()->id;

        if (Auth::user()->type == 2){

               $edit_data = User::where('id',$id)->with('get_user_rating','get_user_ratingbyEvaluatoronprofile')->withAvg('get_user_rating','rating_start','get_user_ratingbyEvaluatoronprofile','rating_start')->first();
        }
        elseif (Auth::user()->type == 3)
        {
            // dd('Coach');

              $edit_data = User::where('id',$id)->with('coach_rating')->withAvg('coach_rating','rating_start')->first();
        }
        elseif (Auth::user()->type == 4)
        {

              $edit_data = User::where('id',$id)->with('get__evaluator_profile_rating')->withAvg('get__evaluator_profile_rating','rating_start')->first();
        }
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return view('user_dashboard.profile.edit',get_defined_vars())->with($notification);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        // dd($request->all());
        $this->validate($request, [
            'name' => "required|max:255",
            'last_name' => "required|max:255",
            'address' => 'required',
            'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:14',
            'email' => 'required|email',

        ]);

        $cms = User::findOrFail($id);
        $cms->name = $request->name;
        $cms->last_name = $request->last_name;
        $cms->email = $request->email;
        $cms->address = $request->address;
        $cms->contact = $request->contact;
        if($image = $request->file("image")) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        $cms->save();
        $notification = array('UserMessage' =>'Your Profile Updated Successfully ' , 'alert-type'=>'success' );
        return back()->with($notification);

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
