<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\cms;
use App\Models\Config;
use App\Models\PrivacyPolicy;
use App\Models\Sociallink;
use App\Models\TermsCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class WebsiteController extends Controller
{
    public function __construct()
    {
        $facebook = Sociallink::where('type','1')->get();
        $instagram = Sociallink::where('type','2')->get();
        $twitter = Sociallink::where('type','3')->get();
        $youtube = Sociallink::where('type','4')->get();
        $copyright = Config::first();
        view::share(get_defined_vars());
    }

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
        $banner = cms::where('page','1')->first();
        $about = cms::where('page','1')->where('section_name','AboutSection')->first();
        $plan = cms::where('page','1')->where('section_name','Plan Your Wedding Section')->first();
        $vendors = cms::where('page','1')->where('section_name','Attention All Vendors')->first();
        return view('website.index',get_defined_vars());
    }
    public function wedding(){
        $wedding_banner = cms::where('page','2')->first();
        return view('website.wedding',get_defined_vars());
    }
    public function weddingDetails(){
        return view('website.wedding_details');
    }
    public function engagement(){
        $engagement_banner = cms::where('page','3')->first();
        return view('website.engagement',get_defined_vars());
    }
    public function engagementDetails(){
        return view('website.engagement_details');
    }
    public function popularVendors(){
        $vendors_banner = cms::where('page','4')->first();
        return view('website.popular_vendors',get_defined_vars());
    }
    public function planners(){
        return view('website.planner');
    }
    public function blog(){
        $blogs = Blog::get();
        $blog_banner = cms::where('page','7')->first();
        return view('website.blog',get_defined_vars());
    }
    public function blogDetails($id){
        $details = Blog::where('id',$id)->first();
        return view('website.blog_details',get_defined_vars());
    }
    public function events(){
        $events_banner = cms::where('page','5')->first();
        return view('website.events',get_defined_vars());
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
        $about_us = cms::where('page','1')->where('section_name','AboutSection')->first();
        $banner_image = cms::where('page','6')->first();
        // return $about_us;
        return view('website.about_us',get_defined_vars());
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
