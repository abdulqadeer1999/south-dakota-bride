<?php

namespace App\Http\Controllers;

use App\Models\BackgroundAudio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackgroundAudioController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('here');
        $getAudio = BackgroundAudio::all();
        return view('BackAudio.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('here');
        return view('BackAudio.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('here');
        // dd($request->all());
        $this->validate($request, [
            'title' => "required|max:255",
            'audio' => "required",
            'content' => "required",
        ]);

        $cms = new BackgroundAudio();
        $cms->title = $request->title;
        $cms->content = $request->content;
        if($audio = $request->file("audio")) {
            $audioName = $audio->getClientOriginalName();
            // $audioName = date("Y-m-d") . '__' . time() . "__" . $audio->getClientOriginalName();
            $audio->move(public_path('storage/uploads/audio/'), $audioName);
            $cms->audio = $audioName;
        }
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/audio/'), $imageName);
            $cms->image = $imageName;
        }
        $cms->save();
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('BackAudio')->with($notification);
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
         $edit_data = BackgroundAudio::find($id);
         return view('BackAudio.edit',get_defined_vars());
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
        $cms = BackgroundAudio::findOrFail($id);
        $cms->title = $request->title;
        $cms->content = $request->content;
        if($audio = $request->file("audio")) {
            $audioName = $audio->getClientOriginalName();
            // $audioName = date("Y-m-d") . '__' . time() . "__" . $audio->getClientOriginalName();
            $audio->move(public_path('storage/uploads/audio/'), $audioName);
            $cms->audio = $audioName;
        }
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/audio/'), $imageName);
            $cms->image = $imageName;
        }
        $cms->save();
        $notification = array('message' =>'Your data Updated Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('BackAudio')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cms = BackgroundAudio::find($id);
        Storage::delete('public/uploads/audio/'.$cms->image);
        $cms->delete();
        return redirect()->route('BackAudio');
    }


}
