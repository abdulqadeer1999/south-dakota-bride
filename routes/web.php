<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\BackgroundAudioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontendUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\LogoManagerController;
use App\Http\Controllers\PackageManagementController;
use App\Http\Controllers\PageNameController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SubcriptionController;
use App\Http\Controllers\TermsConditionController;
use App\Http\Controllers\UserDashboard\Coachescontroller;
use App\Http\Controllers\UserDashboard\AppoinmentController;
use App\Http\Controllers\UserDashboard\AssesmentController;
use App\Http\Controllers\UserDashboard\CoachBookingController;
use App\Http\Controllers\UserDashboard\EvaluatorsController;
use App\Http\Controllers\UserDashboard\StudentListController;
use App\Http\Controllers\UserDashboard\UserPasswordcontroller;
use App\Http\Controllers\UserDashboard\UserProfilecontroller;
use App\Http\Controllers\UserDashboard\ChatBoxController;
use App\Http\Controllers\UserDashboard\DisputeController;
use App\Http\Controllers\UserDashboard\RateingController;
use App\Http\Controllers\UserDashboard\ReScheduledController;
use App\Http\Controllers\UserManagement;
use App\Http\Controllers\VideoController;
use App\Models\PrivacyPolicy;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


require __DIR__.'/auth.php';

// Route::view('admin', 'auth.login')->name('admin');
Route::get('/admin', function () {
    return view('auth.login');
});

Route::prefix('dashboard')->group(function () {

    Route::view('index', 'dashboard.index')->name('index');

});

Route::post('/login',[WebsiteController::class,'adminlogin'])->name('login');



// Route::get('/dashboard', function () {


//     return view('dashboard.index');

// })->middleware(['auth'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Admin Theme Made Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['preventBackHistory','isAdmin'])->group(function () {

    // Route::middleware(['isAdmin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });


    Route::prefix('admin')->group(function () {

        Route::get('admin', [AdminController::class, 'index'])->name('admin');
        Route::get('admin_create', [AdminController::class, 'create'])->name('admin_create');
        Route::post('admin_store', [AdminController::class, 'store'])->name('admin_store');
        Route::get('admin_edit/{id}', [AdminController::class, 'edit'])->name('admin_edit');
        Route::post('admin_update/{id}', [AdminController::class, 'update'])->name('admin_update');
        Route::get('admin_destroy/{id}', [AdminController::class, 'destroy'])->name('admin_destroy');

    });

    Route::prefix('user')->group(function () {

        Route::get('user', [UserManagement::class, 'index'])->name('user');
        Route::get('user_create', [UserManagement::class, 'create'])->name('backend.user.create');
        Route::post('user_store', [UserManagement::class, 'store'])->name('user_store');
        Route::get('user_show/{id}', [UserManagement::class, 'show'])->name('user_show');
        Route::get('user_edit/{id}', [UserManagement::class, 'edit'])->name('user_edit');
        Route::post('user_update/{id}', [UserManagement::class, 'update'])->name('user_update');
        Route::get('user_destroy/{id}', [UserManagement::class, 'destroy'])->name('user_destroy');

    });

    Route::prefix('Subcription')->group(function () {

        Route::get('Subcription', [SubcriptionController::class, 'index'])->name('Subcription');
        Route::get('Subcription_create', [SubcriptionController::class, 'create'])->name('Subcription_create');
        Route::post('Subcription_store', [SubcriptionController::class, 'store'])->name('Subcription_store');
        Route::get('Subcription_edit/{id}', [SubcriptionController::class, 'edit'])->name('Subcription_edit');
        Route::post('Subcription_update/{id}', [SubcriptionController::class, 'update'])->name('Subcription_update');
        Route::get('Subcription_destroy/{id}', [SubcriptionController::class, 'destroy'])->name('Subcription_destroy');

    });


    Route::prefix('Package')->group(function () {

        Route::get('Package', [PackageManagementController::class, 'index'])->name('Package');
        Route::get('Package_create', [PackageManagementController::class, 'create'])->name('Package_create');
        Route::post('Package_store', [PackageManagementController::class, 'store'])->name('Package_store');
        Route::get('Package_edit/{id}', [PackageManagementController::class, 'edit'])->name('Package_edit');
        Route::post('Package_update/{id}', [PackageManagementController::class, 'update'])->name('Package_update');
        Route::get('Package_destroy/{id}', [PackageManagementController::class, 'destroy'])->name('Package_destroy');

    });

    Route::prefix('FAQ')->group(function () {

        Route::get('FAQ', [FAQController::class, 'index'])->name('FAQ');
        Route::get('FAQ_create', [FAQController::class, 'create'])->name('FAQ_create');
        Route::post('FAQ_store', [FAQController::class, 'store'])->name('FAQ_store');
        Route::get('FAQ_edit/{id}', [FAQController::class, 'edit'])->name('FAQ_edit');
        Route::post('FAQ_update/{id}', [FAQController::class, 'update'])->name('FAQ_update');
        Route::get('FAQ_destroy/{id}', [FAQController::class, 'destroy'])->name('FAQ_destroy');

    });


    Route::prefix('project')->group(function () {

        Route::get('projects', [CmsController::class, 'projects_Index'])->name('projects');
        Route::get('projectcreate', [CmsController::class, 'project_create'])->name('projectcreate');
        Route::post('projectadd', [CmsController::class, 'project_add'])->name('projectadd');
        Route::get('project-edit/{id}', [CmsController::class, 'project_edit'])->name('project_edit');
        Route::post('project-update/{id}', [CmsController::class, 'project_update'])->name('project_update');
        Route::get('projectdestroy/{id}', [CmsController::class, 'project_destroy'])->name('project_destroy');

        Route::get('PageName', [PageNameController::class, 'index'])->name('PageName');
        Route::get('PageName_create', [PageNameController::class, 'create'])->name('PageName_create');
        Route::post('PageName_store', [PageNameController::class, 'store'])->name('PageName_store');
        Route::get('PageName_edit/{id}', [PageNameController::class, 'edit'])->name('PageName_edit');
        Route::post('PageName_update/{id}', [PageNameController::class, 'update'])->name('PageName_update');
        Route::get('PageName_destroy/{id}', [PageNameController::class, 'destroy'])->name('PageName_destroy');

        Route::get('PageContent', [FrontendController::class, 'index'])->name('PageContent');
        Route::get('PageContent_create', [FrontendController::class, 'create'])->name('PageContent_create');
        Route::post('PageContent_store', [FrontendController::class, 'store'])->name('PageContent_store');
        Route::get('PageContent_edit/{id}', [FrontendController::class, 'edit'])->name('PageContent_edit');
        Route::post('PageContent_update/{id}', [FrontendController::class, 'update'])->name('PageContent_update');
        Route::get('PageContent_destroy/{id}', [FrontendController::class, 'destroy'])->name('PageContent_destroy');

        Route::get('logo', [LogoManagerController::class, 'logo_Index'])->name('logo');
        Route::get('logoCreate', [LogoManagerController::class, 'logo_create'])->name('logoCreate');
        Route::post('logoAdd', [LogoManagerController::class, 'logo_add'])->name('logoAdd');
        Route::get('logoEdit/{id}', [LogoManagerController::class, 'logo_edit'])->name('logoEdit');
        Route::post('logoUpdate/{id}', [LogoManagerController::class, 'logo_update'])->name('logoUpdate');
        Route::get('logodestroy/{id}', [LogoManagerController::class, 'logo_destroy'])->name('logodestroy');

        Route::get('privacy', [PrivacyPolicyController::class, 'privacy_Index'])->name('privacy');
        Route::get('privacyCreate', [PrivacyPolicyController::class, 'privacy_create'])->name('privacyCreate');
        Route::post('privacyAdd', [PrivacyPolicyController::class, 'privacy_add'])->name('privacyAdd');
        Route::get('privacyEdit/{id}', [PrivacyPolicyController::class, 'privacy_edit'])->name('privacyEdit');
        Route::post('privacyUpdate/{id}', [PrivacyPolicyController::class, 'privacy_update'])->name('privacyUpdate');
        Route::get('privacydestroy/{id}', [PrivacyPolicyController::class, 'privacy_destroy'])->name('privacydestroy');

        Route::get('terms', [TermsConditionController::class, 'terms_Index'])->name('terms');
        Route::get('termsCreate', [TermsConditionController::class, 'terms_create'])->name('termsCreate');
        Route::post('termsAdd', [TermsConditionController::class, 'terms_add'])->name('termsAdd');
        Route::get('termsEdit/{id}', [TermsConditionController::class, 'terms_edit'])->name('termsEdit');
        Route::post('termsUpdate/{id}', [TermsConditionController::class, 'terms_update'])->name('termsUpdate');
        Route::get('termsdestroy/{id}', [TermsConditionController::class, 'terms_destroy'])->name('termsdestroy');


    });


    Route::prefix('general')->group(function () {

        Route::get('social', [SocialController::class, 'index'])->name('social');
        Route::get('socialCreate', [SocialController::class, 'create'])->name('socialCreate');
        Route::post('socialAdd', [SocialController::class, 'store'])->name('socialAdd');
        Route::get('socialEdit/{id}', [SocialController::class, 'edit'])->name('socialEdit');
        Route::post('socialUpdate/{id}', [SocialController::class, 'update'])->name('socialUpdate');
        Route::get('socialdestroy/{id}', [SocialController::class, 'destroy'])->name('socialdestroy');

        Route::get('congfigration', [ConfigurationController::class, 'index'])->name('congfigration');
        Route::get('congfigrationCreate', [ConfigurationController::class, 'create'])->name('congfigrationCreate');
        Route::post('congfigrationAdd', [ConfigurationController::class, 'store'])->name('congfigrationAdd');
        Route::get('congfigrationEdit/{id}', [ConfigurationController::class, 'edit'])->name('congfigrationEdit');
        Route::post('congfigrationUpdate/{id}', [ConfigurationController::class, 'update'])->name('congfigrationUpdate');
        Route::get('congfigrationdestroy/{id}', [ConfigurationController::class, 'destroy'])->name('congfigrationdestroy');

    });


    Route::prefix('blog')->group(function () {

        Route::get('blog', [BlogController::class, 'index'])->name('blog');
        Route::get('blogCreate', [BlogController::class, 'create'])->name('blogCreate');
        Route::post('blogAdd', [BlogController::class, 'store'])->name('blogAdd');
        Route::get('blogEdit/{id}', [BlogController::class, 'edit'])->name('blogEdit');
        Route::post('blogUpdate/{id}', [BlogController::class, 'update'])->name('blogUpdate');
        Route::get('blogdestroy/{id}', [BlogController::class, 'destroy'])->name('blogdestroy');
    });


    Route::prefix('video')->group(function () {

        Route::get('video', [VideoController::class, 'index'])->name('video');
        Route::get('videoCreate', [VideoController::class, 'create'])->name('videoCreate');
        Route::post('videostore', [VideoController::class, 'store'])->name('videostore');
        Route::get('videoEdit/{id}', [VideoController::class, 'edit'])->name('videoEdit');
        Route::post('videoUpdate/{id}', [VideoController::class, 'update'])->name('videoUpdate');
        Route::get('videodestroy/{id}', [VideoController::class, 'destroy'])->name('videodestroy');

        Route::get('BackAudio', [BackgroundAudioController::class, 'index'])->name('BackAudio');
        Route::get('BackAudioCreate', [BackgroundAudioController::class, 'create'])->name('BackAudioCreate');
        Route::post('BackAudiostore', [BackgroundAudioController::class, 'store'])->name('BackAudiostore');
        Route::get('BackAudioEdit/{id}', [BackgroundAudioController::class, 'edit'])->name('BackAudioEdit');
        Route::post('BackAudioUpdate/{id}', [BackgroundAudioController::class, 'update'])->name('BackAudioUpdate');
        Route::get('BackAudiodestroy/{id}', [BackgroundAudioController::class, 'destroy'])->name('BackAudiodestroy');

    });


    Route::prefix('audio')->group(function () {

        Route::get('audio', [AudioController::class, 'index'])->name('audio');
        Route::get('audioCreate', [AudioController::class, 'create'])->name('audioCreate');
        Route::post('audiostore', [AudioController::class, 'store'])->name('audiostore');
        Route::get('audioEdit/{id}', [AudioController::class, 'edit'])->name('audioEdit');
        Route::post('audioUpdate/{id}', [AudioController::class, 'update'])->name('audioUpdate');
        Route::get('audiodestroy/{id}', [AudioController::class, 'destroy'])->name('audiodestroy');

    });


    Route::prefix('Inquiry')->group(function () {

        Route::get('Inquiry', [InquiryController::class, 'index'])->name('Inquiry');
        Route::get('InquiryCreate', [InquiryController::class, 'create'])->name('InquiryCreate');
        Route::post('InquiryAdd', [InquiryController::class, 'store'])->name('InquiryAdd');
        Route::get('InquiryEdit/{id}', [InquiryController::class, 'edit'])->name('InquiryEdit');
        Route::post('InquiryUpdate/{id}', [InquiryController::class, 'update'])->name('InquiryUpdate');
        Route::get('Inquiryldestroy/{id}', [InquiryController::class, 'destroy'])->name('Inquirydestroy');

    });


});


/*
|--------------------------------------------------------------------------
| Front End Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    // Route::view('/', 'home')->name('home');
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('About', [HomeController::class, 'about'])->name('about-amea');
    Route::get('BandRoom', [HomeController::class, 'BandRoom'])->name('Band-Room');
    Route::get('AmeaToday', [HomeController::class, 'AmeaToday'])->name('AmeaToday');
    Route::get('educators', [HomeController::class, 'educators'])->name('educators');
    Route::get('educators-Boosters', [HomeController::class, 'educatorsBoosters'])->name('educators-Boosters');
    Route::get('educators-by-laws', [HomeController::class, 'educatorsbylaws'])->name('educators-by-laws');
    Route::get('educators-fund-raising', [HomeController::class, 'educatorsFundRaising'])->name('educators-fund-raising');
    Route::get('Pre-Festival', [HomeController::class, 'PreFestival'])->name('Pre-Festival');
    Route::get('Arrangers-Composer', [HomeController::class, 'ArrangersComposer'])->name('Arrangers-Composer');
    Route::get('private-instructors', [HomeController::class, 'privateInstructors'])->name('private-instructors');
    Route::get('private-instrumental', [HomeController::class, 'privateInstrumental'])->name('private-instrumental');
    Route::get('private-dance', [HomeController::class, 'privateDance'])->name('private-dance');
    Route::get('private-vocal', [HomeController::class, 'privateVocal'])->name('private-vocal');
    Route::get('private-all-state-pre', [HomeController::class, 'privateallStatePre'])->name('private-all-state-pre');
    Route::get('more-singers', [HomeController::class, 'moreSingers'])->name('more-singers');
    Route::get('Music-Producers', [HomeController::class, 'MusicProducers'])->name('Music-Producers');
    Route::get('order-summary/{id}', [HomeController::class, 'orderSummary'])->name('order-summary');
    Route::get('AmeaToday_checkout/{id}', [HomeController::class, 'checkout'])->name('AmeaToday_checkout');
    Route::get('AmeaToday_buy-now', [HomeController::class, 'buyNow'])->name('AmeaToday_buy-now');


    // Route::get('page/{id}', [HomeController::class, 'getContent'])->name('get_content');

    Route::get('sign-up', [FrontendUserController::class, 'signUp'])->name('signUp');
    Route::get('login-page', [FrontendUserController::class, 'loginPage'])->name('login-page');
    Route::get('user_create', [FrontendUserController::class, 'create'])->name('user_create');
    Route::post('FrontendUser_store', [FrontendUserController::class, 'store'])->name('FrontendUser_store');
    Route::post('FrontendUser_login', [FrontendUserController::class, 'login'])->name('FrontendUser_login');
    Route::get('FrontendUser_logout', [FrontendUserController::class, 'logout'])->name('FrontendUser_logout');
    Route::get('create_new_password', [FrontendUserController::class, 'forgot'])->name('create_new_password');


    /*
|--------------------------------------------------------------------------
| User Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['preventBackHistory','UserCheck'])->group(function () {

    Route::get('AmeaToday_user-dashboard', [HomeController::class, 'dashboard'])->name('AmeaToday_user-dashboard');
    // Route::get('user-order-summary{id}', [HomeController::class, 'order_summary'])->name('user-order_summary');
    Route::get('User_Profile_edit', [UserProfilecontroller::class, 'edit'])->name('User_Profile_edit');
    Route::post('User_Profile_update/{id}', [UserProfilecontroller::class, 'update'])->name('User_Profile_update');
    Route::get('User_Password_edit', [UserPasswordcontroller::class, 'edit'])->name('User_Password_edit');
    Route::post('User_Password_update/{id}', [UserPasswordcontroller::class, 'update'])->name('User_Password_update');

    Route::get('coaches', [Coachescontroller::class, 'index'])->name('coaches');
    Route::get('coach_profile/{id}', [Coachescontroller::class, 'Coach_Card_view'])->name('coach_profile');


    Route::get('appoinment', [AppoinmentController::class, 'index'])->name('appoinment');
    Route::get('appoinment-create', [AppoinmentController::class, 'create'])->name('appoinment.create');
    Route::post('appoinment-store', [AppoinmentController::class, 'store'])->name('appoinment.store');
    Route::get('appoinment-edit/{id}', [AppoinmentController::class, 'edit'])->name('appoinment.edit');
    Route::post('appoinment-update/{id}', [AppoinmentController::class, 'update'])->name('appoinment.update');
    Route::get('appoinment-destroy/{id}', [AppoinmentController::class, 'destroy'])->name('appoinment.destroy');


    Route::get('Evaluators', [EvaluatorsController::class, 'index'])->name('Evaluators');
    Route::get('Evaluators_profile/{id}', [EvaluatorsController::class, 'Evaluators_profile'])->name('Evaluators.profile');
    Route::post('evaluators-create/{id}', [EvaluatorsController::class, 'create'])->name('evaluators_create');
    Route::get('evaluatorsBooking-paypal', [EvaluatorsController::class, 'paypal'])->name('evaluatorsBooking_paypal');
    Route::post('evaluatorsBooking_paypal-store', [EvaluatorsController::class, 'Store'])->name('evaluatorsBooking_paypal_store');
    Route::get('evaluatorsBooking_list', [EvaluatorsController::class, 'bookedEvaluator'])->name('evaluatorsBooking_list');





    Route::get('CoachBooking', [CoachBookingController::class, 'index'])->name('CoachBooking');
    Route::get('CoachBooking-paypal', [CoachBookingController::class, 'paypal'])->name('CoachBooking.paypal');


    Route::post('CoachBooking-create/{id}', [CoachBookingController::class, 'create'])->name('CoachBooking.create');

    Route::post('CoachBooking-store', [CoachBookingController::class, 'StoreCoachBooking'])->name('CoachBooking.store');


    Route::get('studentslist', [StudentListController::class, 'index'])->name('studentslist');


    Route::get('ChatBox/{id}', [ChatBoxController::class, 'index'])->name('ChatBox');

    Route::post('message/{id}', [ChatBoxController::class, 'send'])->name('message.send');
    Route::get('message-ChatBox/{id}', [ChatBoxController::class, 'ChatBox'])->name('message.ChatBox');
    Route::get('message-status', [ChatBoxController::class, 'ChangeMessageStatus'])->name('ChangeMessageStatus');


    Route::post('ReScheduled/{id}', [ReScheduledController::class, 'send'])->name('ReScheduled.send');
    Route::post('CoachReScheduled/{id}', [ReScheduledController::class, 'CoachReScheduled'])->name('CoachReScheduled');


    Route::post('Rateing/{id}', [RateingController::class, 'send'])->name('Rateing.send');
    Route::post('StudentRateing/{id}', [RateingController::class, 'StudentRateing'])->name('StudentRateing');


    Route::post('evaluator_Rateing/{id?}', [RateingController::class, 'evaluator_Rateing'])->name('evaluator_Rateing');

    Route::get('Dispute', [DisputeController::class, 'index'])->name('Dispute');
    Route::post('Dispute/{id}', [DisputeController::class, 'send'])->name('Dispute.send');
    Route::post('challenge_Dispute_send/{id}', [DisputeController::class, 'challenge'])->name('challenge_Dispute_send');



    Route::get('assesment', [AssesmentController::class, 'index'])->name('assesment');
    Route::get('assesment_create/{id}', [AssesmentController::class, 'create'])->name('assesment_create');
    Route::post('assesment_store', [AssesmentController::class, 'store'])->name('assesment_store');
    Route::get('assesment_edit/{id}', [AssesmentController::class, 'edit'])->name('assesment_edit');
    Route::post('assesment_update/{id}', [AssesmentController::class, 'update'])->name('assesment_update');
    Route::get('assesment_delete/{id}', [AssesmentController::class, 'destroy'])->name('assesment_delete');
    Route::get('assesmentStudent', [AssesmentController::class, 'assesmentStudent'])->name('assesmentStudent');




});

    Route::get('checkout', [CheckoutController::class, 'store'])->name('checkout');
    Route::post('StorePaymentDetails', [CheckoutController::class, 'StorePaymentDetails'])->name('StorePaymentDetails');

    Route::get('payment', [PayPalController::class, 'payment'])->name('payment');
    Route::get('cancel', [PayPalController::class, 'cancel'])->name('payment.cancel');
    Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success');




/*
|--------------------------------------------------------------------------
| Theme made Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend Routes
Route::get('/',[WebsiteController::class,'index'])->name('home');
Route::get('/wedding',[WebsiteController::class,'wedding'])->name('wedding');
Route::get('/wedding-details',[WebsiteController::class,'weddingDetails'])->name('wedding-details');
Route::get('/engagement',[WebsiteController::class,'engagement'])->name('engagement');
Route::get('/engagement-details',[WebsiteController::class,'engagementDetails'])->name('engagement-details');
Route::get('/popular_vendors',[WebsiteController::class,'popularVendors'])->name('popular_vendors');
Route::get('/planners',[WebsiteController::class,'planners'])->name('planners');
Route::get('/blog',[WebsiteController::class,'blog'])->name('blog');
Route::get('/blog-details',[WebsiteController::class,'blogDetails'])->name('blog-details');
Route::get('/events',[WebsiteController::class,'events'])->name('events');
Route::get('/event-details',[WebsiteController::class,'eventDetails'])->name('event-details');
Route::get('/signin',[WebsiteController::class,'signin'])->name('signin');
Route::get('/signup',[WebsiteController::class,'signup'])->name('signup');
Route::get('/about-us',[WebsiteController::class,'aboutus'])->name('about-us');
Route::get('/register',[WebsiteController::class,'register'])->name('register');
Route::get('/vendors',[WebsiteController::class,'vendors'])->name('vendors');
Route::get('/vendor-details',[WebsiteController::class,'vendorDetails'])->name('vendor-details');
Route::get('/terms-conditions',[WebsiteController::class,'termsConditions'])->name('terms-conditions');
Route::get('/privacy-policy',[WebsiteController::class,'privacyPolicy'])->name('privacy-policy');
Route::get('/contact-us',[WebsiteController::class,'contact'])->name('contact-us');
Route::get('/forget-password',[WebsiteController::class,'forgetPassword'])->name('forget-password');
Route::get('/packages',[WebsiteController::class,'packages'])->name('packages');
Route::get('/payment',[WebsiteController::class,'payment'])->name('payment');

//Language Change
Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'de', 'es','fr','pt', 'cn', 'ae'])) {
        abort(400);
    }
    Session()->put('locale', $locale);
    Session::get('locale');
    return redirect()->back();
})->name('lang');













