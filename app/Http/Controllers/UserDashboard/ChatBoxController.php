<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $getCoaches =  User::where('type', '3')->first();
        $login_id = Auth::id();
        // dd($login_id);
        Message::where('reciever_id',$login_id)->update(['status'=>2]);

        if(Auth::User()->type =='2'){

            $getMessage = Message::where('sender_id',Auth::id())->with('get_message')->get()->unique('reciever_id');
        }
        elseif(Auth::User()->type =='3'){

            $getRecieverMessage = Message::where('reciever_id',Auth::id())->with('users_invers')->get()->unique('sender_id');
        }
        elseif(Auth::User()->type =='4'){

            $getRecieverMessage = Message::where('reciever_id',Auth::id())->with('users_invers')->get()->unique('sender_id');
        }

        return view('user_dashboard.chatbox.index',get_defined_vars());

    }


    public function send(Request $request, $receiverId)
    {

        // return  Message::where('reciever_id', $receiverId)->update(['status'=>1]);

        $message = new Message();
        $message->message = $request->message;
        $message->reciever_id = $receiverId;
        $message->sender_id = auth()->id();
        $message->time = date("j-M-Y H:i:s A");
        $message->save();

        return [
            "success" => true,
            "message" => $request->message,
            "time" => date("j-M-Y H:i:s A")
        ];
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
    public function ChatBox($id)
    {
// tu $id;
//   $changeStatus
    $id;
    $login_id = Auth::id();
      Message::where('reciever_id', $id)->where('sender_id',$login_id)->update(['status'=>1]);
    // if(Auth::User()->type =='2'){

    //        Message::where('reciever_id', $id)->update(['status'=>3]);


    // }
    // elseif(Auth::User()->type =='3'){

    //     Message::where('reciever_id', $id)->where('sender_id',$login_id)->update(['status'=>3]);


    // }
    //   Message::where('reciever_id', $id)->where('sender_id',$login_id)->update(['status'=>3]);
     $message = Message::
       where(function($query) use($id,$login_id) {
        $query->where('sender_id',$id)->with('get_message')->get();
        $query->where('reciever_id',$login_id);
    })
       ->orwhere(function($query) use($id,$login_id) {
        $query->where('reciever_id',$id);
        $query->where('sender_id', $login_id);
    })
       ->with('users_invers')->get();


        //    return $query;
        $receiver_id =  User::find($id);
        // dd( $receiver_id );
        return view('user_dashboard.chatbox.chatbox',get_defined_vars());

    }
    public function ChangeMessageStatus(Request $request)
    {
        // dd('here');
        $user = Message::find($request->reciever_id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success'=>'User status change successfully.']);
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
