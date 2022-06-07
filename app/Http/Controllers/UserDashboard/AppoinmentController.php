<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\appoinment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('appoinment');

       $getAppoinment = appoinment::where('user_id',Auth::user()->id)->get();
        return view('user_dashboard.appoinment.index',get_defined_vars());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('here');
        return view('user_dashboard.appoinment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [

            'appoinment_date' => "required|",
            'appoinment_time' => "required|",

        ]);

        $getAppoinment = new appoinment();
        $getAppoinment->user_id = Auth::id();
        $getAppoinment->appoinment_date = $request->appoinment_date;
        $getAppoinment->appoinment_time = $request->appoinment_time;
        $getAppoinment->save();
        $notification = array('UserMessage' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('appoinment')->with($notification);

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
        // dd('here');
         $edit_data = appoinment::find($id);
        return view('user_dashboard.appoinment.edit',get_defined_vars());

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
        // dd($request->all());

        $this->validate($request, [

            'appoinment_date' => "required|",
            'appoinment_time' => "required|",

        ]);

        $getAppoinment = appoinment::findOrFail($id);
        $getAppoinment->user_id = Auth::id();
        $getAppoinment->appoinment_date = $request->appoinment_date;
        $getAppoinment->appoinment_time = $request->appoinment_time;
        $getAppoinment->save();
        $notification = array('UserMessage' =>'Your data Updated Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('appoinment')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        appoinment::find($id)->delete();
        $notification = array('UserMessage' =>'Your data Deleted Successfully ' , 'alert-type'=>'success' );
        return back()->with($notification);
        // return redirect()->route('appoinment')->with($notification);

    }


}
