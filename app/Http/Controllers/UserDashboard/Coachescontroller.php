<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\appoinment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Coachescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('profile');
          $getCoaches = User::where('type','3')->with('get_coachlist_rating')->withAvg  ('get_coachlist_rating','rating_start')->latest()->paginate(4);
            return view('user_dashboard.Coaches.index',get_defined_vars());

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

    public function Coach_Card_view($id)
    {
        // dd('profile');
        $getCoache_profile = User::where('id',$id)->get();
        $getAppoinment = appoinment::where('user_id',$getCoache_profile[0]->id)->where('status',1)->get();
        // dd($getAppoinment);
        return view('user_dashboard.Coaches.profile',get_defined_vars());
        // return view('user_dashboard.Coaches.profile');


    }


}
