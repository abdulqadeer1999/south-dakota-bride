<?php

namespace App\Http\Controllers;


use App\Models\packages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageManagementController extends Controller
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
        $getCMS = packages::all();
        return view('Package.index',get_defined_vars());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('here');
        return view('Package.create');

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
        // $getUser = User::find(Auth::user()->id);
        $this->validate($request, [

            'title' => "required|max:255",
            'type' => "required|max:255",
            'amount' => "required|max:255",
            'deatails' => "required|max:255",
            'sale_tax' => "required|max:255",

        ]);

        $cms = new packages();
        // $cms->user_id = $getUser->id;
        $cms->title = $request->title;
        $cms->amount = $request->amount;
        $cms->sale_tax = $request->sale_tax;
        $amount=$request->amount;
        $sale_tax=$request->sale_tax;
        $total_tax = $sale_tax/100*$amount;
        $cms->total_tax = $total_tax;
        $amountWithTax = (int)$amount+(int)$total_tax;
        $cms->bill_yearly = $amountWithTax;
        $cms->type = $request->type;
        $cms->mid_details = $request->mid_details;
        $cms->deatails = $request->deatails;
        // dd($cms);
        $cms->save();
        $notification = array('message' =>'Your data Inserted Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('Package')->with($notification);

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
        $edit_data = packages::find($id);
        return view('Package.edit',get_defined_vars());
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

            'title' => "required|max:255",
            'type' => "required|max:255",
            'amount' => "required|max:255",
            'sale_tax' => "required|max:255",
            'deatails' => "required|max:255",

        ]);

        $cms = packages::findOrFail($id);
        $cms->title = $request->title;
        $cms->title = $request->title;
        $cms->amount = $request->amount;
        $cms->sale_tax = $request->sale_tax;
        $amount=$request->amount;
        $sale_tax=$request->sale_tax;
        $total_tax = $sale_tax/100*$amount;
        $cms->total_tax = $total_tax;
        $amountWithTax = (int)$amount+(int)$total_tax;
        $cms->bill_yearly = $amountWithTax;
        $cms->type = $request->type;
        $cms->mid_details = $request->mid_details;
        $cms->deatails = $request->deatails;
        $cms->save();
        
        $notification = array('message' =>'Your data updateed Successfully ' , 'alert-type'=>'success' );
        return redirect()->route('Package')->with($notification);

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
        packages::find($id)->delete();
        return redirect()->route('Package');
    }


}
