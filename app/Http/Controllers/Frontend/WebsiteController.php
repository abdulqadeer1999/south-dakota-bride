<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use App\Models\sociallink;
use App\Models\TermsCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class WebsiteController extends Controller
{

    public function adminlogin(Request $request){
        $credentials = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            // 'status' => 1,
        ]);
        if($credentials){
            if(Auth::check() && Auth::user()->type == 1){
                return redirect('dashboard/index');
            }
        }else {
            return redirect('admin');
        }
    }
    public function index(){
        $facebook = Sociallink::where('type','1')->get();
        $instagram = Sociallink::where('type','2')->get();
        $twitter = Sociallink::where('type','3')->get();
        $youtube = Sociallink::where('type','4')->get();
        return view('website.index',get_defined_vars());
    }
    public function wedding(){
        return view('website.wedding');
    }
    public function weddingDetails(){
        return view('website.wedding_details');
    }
    public function engagement(){
        return view('website.engagement');
    }
    public function engagementDetails(){
        return view('website.engagement_details');
    }
    public function popularVendors(){
        return view('website.popular_vendors');
    }
    public function planners(){
        return view('website.planner');
    }
    public function blog(){
        return view('website.blog');
    }
    public function blogDetails(){
        return view('website.blog_details');
    }
    public function events(){
        return view('website.events');
    }
    public function eventDetails(){
        return view('website.event_details');
    }
    public function signin(){
        return view('website.signin');
    }
    public function signup(){
        return view('website.signup');
    }
    public function aboutus(){
        return view('website.about_us');
    }
    public function register(){
        return view('website.register');
    }
    public function vendors(){
        return view('website.vendors');
    }
    public function vendorDetails(){
        return view('website.vendor_details');
    }
    public function termsConditions(){
        $terms = TermsCondition::first();
        return view('website.terms_conditions',get_defined_vars());
    }
    public function privacyPolicy(){
        $privacy = PrivacyPolicy::first();
        return view('website.privacy_policy',get_defined_vars());
    }
    public function contact(){
        return view('website.contact_us');
    }
    public function forgetPassword(){
        return view('website.forget_password');
    }
    public function packages(){
        return view('website.packages');
    }
    public function payment(){
        return view('website.payment');
    }

}
