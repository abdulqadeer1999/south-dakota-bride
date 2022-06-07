<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('here');
        $getVideo = video::all();
        return view('video.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('here');
        return view('video.create');

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
            'video' => "required",
            'content' => "required",
        ]);

        $cms = new video();
        $cms->title = $request->title;
        $cms->content = $request->content;
        if($video = $request->file("video")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $video->getClientOriginalName();
            $video->move(public_path('storage/uploads/video/'), $imageName);
            $cms->video = $imageName;
        }
        $cms->save();
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('video')->with($notification);
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
         $edit_data = video::find($id);
         return view('video.edit',get_defined_vars());
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
        $cms = video::findOrFail($id);
        $cms->title = $request->title;
        $cms->content = $request->content;
        if($video = $request->file("video")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $video->getClientOriginalName();
            $video->move(public_path('storage/uploads/video/'), $imageName);
            $cms->video = $imageName;
        }
        $cms->save();
        $notification = array('message' =>'Your data Updated Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('video')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cms = video::find($id);
        Storage::delete('public/uploads/video/'.$cms->image);
        $cms->delete();
        return redirect()->route('video');
    }


}
