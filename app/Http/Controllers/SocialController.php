<?php

namespace App\Http\Controllers;

use App\Models\cms;
use App\Models\sociallink;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('here');
        // dd( $getCMS);
        $getCMS = sociallink::all();
        return view('sociallinks.index',get_defined_vars());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('here');
        return view('sociallinks.create');
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
            'type' => "required|max:255",
            'social_media' => "required|max:255",
            // 'email' => "required|email|unique:users",
        ]);

        $cms = new sociallink();
        $cms->type = $request->type;
        $cms->social_media = $request->social_media;
        $cms->save();
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('social')->with($notification);
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
        // dd($id);
        $edit_data = sociallink::find($id);
        return view('sociallinks.edit',get_defined_vars());

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
            'type' => "required|max:255",
            'social_media' => "required|max:255",
            // 'email' => "required|email|unique:users",
        ]);

        $cms = sociallink::findOrFail($id);
        $cms->type = $request->type;
        $cms->social_media = $request->social_media;
        $cms->save();
        $notification = array('message' =>'Your data updateed Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('social')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sociallink::find($id)->delete();
        return redirect()->route('social');

    }

}
