<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserManagement extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  dd('here');
         $getCMS = User::where('type','>',1)->get();
        //  dd($getCMS);
         return view('users.index',get_defined_vars());
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('here');
        return view('users.create');

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
            'name' => "required|max:255",
            'last_name' => "required|max:255",
            'address' => "required",
            'contact' => "required",
            // 'image' => "required|",
            'email' => 'required|email|unique:users',
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',

        ]);
        // dd('here');
        $cms = new User();
        $cms->name = $request->name;
        $cms->last_name = $request->last_name;
        $cms->email = $request->email;
        $cms->address = $request->address;
        $cms->contact = $request->contact;
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        $cms->type = $request->type;
        $cms->password = Hash::make($request->password);
        $cms->save();
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('user')->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd('here');
        // return $show_data;


        // return $get_user = User::where('id', $id)->where('type',2)->get();
        //    $get_user = User::where('id', $id)->where('type',3)->get();
        // $get_user = User::where('id', $id)->where('type',4)->get();

        if (User::where('id', $id)->where('type',2)->first())
        {
            // dd('User');
              $show_data = User::where('id', $id)->with('admin_studentData.get_coaches_for_admin_show_user')->with('admin_studentData.get_timeSlot')->get();
             return view('users.show',get_defined_vars());

        }
            elseif (User::where('id', $id)->where('type',3)->first())
        {
            // dd('Coach');
              $show_data = User::where('id', $id)->with('admin_coachData.get_admin_show_Students')->with('admin_coachData.get_timeSlot')->get();
            return view('users.showCoach',get_defined_vars());

        }
        elseif (User::where('id', $id)->where('type',4)->first())
        {
            // dd('Evaluator');
              $show_data = User::where('id', $id)->with('admin_EvaluatorData.admin_show_Students_for_Evaluator')->get();
            return view('users.showEvaluator',get_defined_vars());

        }else{

            $notification = array('message' =>'Your data is not available' , 'alert-type'=>'error' );
            return back()->with($notification);
        }
        // $show_data = User::where('id', $id)->where('type', 2)->with('messagesSent.get_coaches_for_admin_show_user')->get();

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
         $edit_data = User::find($id);
         return view('users.edit',get_defined_vars());
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
            'name' => "required|max:255",
            'last_name' => "required|max:255",
            // 'image' => "required|",
            'email' => "required",
            'address' => "required",
            'contact' => "required",
            // 'password' => 'min:6|required_with:confirm_password|same:confirm_password',

        ]);

        $cms = User::findOrFail($id);
        $cms->name = $request->name;
        $cms->last_name = $request->last_name;
        $cms->email = $request->email;
        $cms->address = $request->address;
        $cms->contact = $request->contact;
        if($image = $request->file("image")) {
            $imageName = date("Y-m-d") . '__' . time() . "__" . $image->getClientOriginalName();
            $image->move(public_path('storage/uploads/cms/'), $imageName);
            $cms->image = $imageName;
        }
        $cms->type = $request->type;
        $cms->password = Hash::make($request->password);
        $cms->save();
        $notification = array('message' =>'Your data Inserted Successfully' , 'alert-type'=>'success' );
        return redirect()->route('user')->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cms = User::find($id);
        Storage::delete('public/uploads/cms/'.$cms->image);
        $cms->delete();
        return redirect()->route('user');
    }

}
