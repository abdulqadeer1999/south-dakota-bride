<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\book_Coach;
use App\Models\bookEvaluator;
use App\Models\CoachRating;
use App\Models\EvaluatorRateing;
use App\Models\Rateing;
use App\Models\ratinByEvaluator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RateingController extends Controller
{

    public function send(Request $request, $id)
    {

    //    dd($request->all());
    $book_Coach_data = book_Coach::where('user_id',Auth::id())->where('coach_id',$request->coach_id)->where('time_slot',$request->time_slot)->first();

    CoachRating::updateOrCreate(
        [
           'user_id'   => Auth::user()->id,
           'coach_id'   => $request->coach_id,
           'book__coache_id' => $book_Coach_data->id,
           'time_slot_id'   => $request->time_slot,

        ],
        [
           'user_id'   => Auth::user()->id,
           'coach_id'     => $request->coach_id,
           'book__coache_id' => $book_Coach_data->id,
           'time_slot_id'    => $request->time_slot,
           'rating_start'       => $request->rating_start,
           'status'   => 2,
        ],


    );
    book_Coach::updateOrCreate(
        [
           'user_id'   => Auth::user()->id,
           'coach_id'   => $request->coach_id,
           'id' => $book_Coach_data->id,
           'time_slot'   => $request->time_slot,

        ],
        [
           'user_id'   => Auth::user()->id,
           'coach_id'     => $request->coach_id,
           'id' => $book_Coach_data->id,
           'time_slot'    => $request->time_slot,
           'status'   => 2,
        ],
    );

        $notification = array('UserMessage' =>'You have rated Successfully ' , 'alert-type'=>'success' );
        return back()->with($notification);


    }



    public function StudentRateing(Request $request, $id)
    {

        // dd($request->all());

        if(Auth::user()->type ==3){

        // dd($request->all());

            Rateing::updateOrCreate(
                [
                   'user_id'   => $request->user_id,
                   'card_id'   => $request->card_id,
                   'coach_id'   => Auth::user()->id,
                    //    'type'   => 2,

                ],
                [

                    'user_id'   => $request->user_id,
                    'card_id'   => $request->card_id,
                   'coach_id'   => Auth::user()->id,
                   'rating_start'       => $request->rating_start,
                    //    'status'   => 2,
                ],
                );

        }
        elseif(Auth::User()->type == 4){

            // dd($request->all());
            ratinByEvaluator::updateOrCreate(
                [
                   'user_id'   => $request->user_id,
                   'evaluator_id'   => Auth::user()->id,
                   'card_id'   => $request->card_id,

                    //    'type'   => 2,
                ],
                [
                   'user_id'   => $request->user_id,
                   'evaluator_id'   => Auth::user()->id,
                   'card_id'   => $request->card_id,
                   'rating_start'       => $request->rating_start,
                    //    'status'   => 2,
                ],
                );

        }

        $notification = array('UserMessage' =>'You have rated Successfully ' , 'alert-type'=>'success' );
        return back()->with($notification);

    }

    public function evaluator_Rateing(Request $request, $id)
    {

        // dd($request->all());

        $book_Coach_data = bookEvaluator::where('user_id',Auth::user()->id)->where('evaluator_id',$request->id)->first();

        // dd($book_Coach_data->id);
        EvaluatorRateing::updateOrCreate(
        [
           'book__coache_id'   =>$book_Coach_data->id,
           'user_id'   => Auth::user()->id,
           'evaluator_id'   => $request->evaluator_id,
           'card_id'   => $request->card_id,


        ],
        [

           'card_id'   => $request->card_id,
           'book__coache_id' => $book_Coach_data->id,
           'user_id'   => auth()->id(),
           'evaluator_id'   => $request->evaluator_id,
           'rating_start'       => $request->rating_start,
           'status'   => 2,

        ],
        );

        bookEvaluator::updateOrCreate(
            [
               'id'   =>$book_Coach_data->id,
               'user_id'   => Auth::user()->id,
               'evaluator_id'   => $request->evaluator_id,


            ],
            [

               'id' => $book_Coach_data->id,
               'user_id'   => Auth::user()->id,
               'evaluator_id'   => $request->evaluator_id,
               'status'   => 2,

            ],
            );

        $notification = array('UserMessage' =>'You have rated Successfully ' , 'alert-type'=>'success' );
        return back()->with($notification);


    }



}
