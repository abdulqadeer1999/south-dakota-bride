<?php

namespace App\Http\Controllers\UserDashboard;

use App\Http\Controllers\Controller;
use App\Models\book_Coach;
use App\Models\bookEvaluator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentListController extends Controller
{
    public function index()
    {
        // dd('profile');
        // $getStudents = User::where('type','2')->latest()->paginate(4);
        if(Auth::User()->type =='3')
        {
               $getStudents = book_Coach::where('coach_id',Auth::id())->with('get_bookedStudent')->withAvg('get_rating_by_coach_forStudentList','rating_start')->latest()->paginate(3);
                return view('user_dashboard.StudentsList.index',get_defined_vars());

        }
        else if(Auth::User()->type =='4')
        {
               $getEvaluatorStudents = bookEvaluator::where('evaluator_id',Auth::id())->with('get_bookedStudentByEvaluator')->withAvg('get_rating_by_evualator_for_Studentlist','rating_start')->latest()->paginate(3);
              return view('user_dashboard.StudentsList.evaluatorStudents',get_defined_vars());

        }
            else
            $notification = array('UserMessage' =>'Your have some error' , 'alert-type'=>'error' );
            return back()->with($notification);
    }


}
