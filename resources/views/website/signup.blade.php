@extends('website.navbar.navbar')
@section('title','South-Dakota-Bride | Signup')
@section('content')

<section class="Sign-Up-section pt-4">
    <div class="sign-up-form">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-12 pt-5 mx-auto mt-5">
                    <div class="z-index1">
                         <h1 class="couple-text mt-5 text-center pt-3 wow  animated bounceIn" data-wow-duration="1s" data-wow-delay="0.5s">sign up</h1>
                         <div class="col-lg-11 mx-auto">
                            <div class="from mt-5">
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                       <input type="date" class="Artical-input"  placeholder="Wedding Date" >
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                       <input class="Artical-input"  placeholder="What City is Your Wedding in?">
                                    </div>
                                    <label for="" class="pb-2">Bride Info</label>
                                    <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" type="name" placeholder="First Name">
                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input " type="name" placeholder="Last Name">
                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" type="email" placeholder="Email">
                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" type="number" placeholder="Phone No.">
                                     </div>
                                     <label for="" class="pb-2">groom Info</label>
                                    <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" type="name" placeholder="First Name">
                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" type="name" placeholder="Last Name">
                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" type="email" placeholder="Email">
                                     </div>
                                     <div class="col-lg-6 mb-4">
                                        <input class="Artical-input" type="number" placeholder="Phone No.">
                                     </div>

                                     <div class="mt-5">
                                        <p class="form-para pt-5">Which services are you still looking to hire or research for your wedding?(please chaeck all that apply)</p>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">Bride & weight loss</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">Bridal gowns</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">Bridal shoes</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">Bridemaid's dressess</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">cake /cupcake</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">cady /favors</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">caterers</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">ceremany location</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">ceremany music</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">churches</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">dance lessons</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">destination wedding</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">DJ(disco jokey or bands)</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">event lighting & decor</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">florists (fresh & silk)</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">formal wear (suits, tuxedos)</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">gift registries</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">gown preservation</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">honeymoon / travel</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">hotles</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">invitations / party supplies </label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">lumousines / party bus</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">officiant / clergy </label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">photo  booths</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">photography</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">reception hall / venue</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">rehearsal dinners</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">rental items</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">videography</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">wedding rings</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-4">
                                        <div class="form-check mb-4">
                                            <input type="checkbox" value="" class="checkbox">
                                            <label for="" class="pb-2 pr-2">wedding planner</label>
                                        </div>
                                     </div>
                                     <div class="mt-2">
                                        <p class="form-para ">Do you wish to subscribe to our news letter and exclusive offers from our wedding vendors?</p>
                                     </div>
                                     <div class="col-lg-5">
                                        <div class="form-check mb-4">
                                            <input type="radio"  value="yes" class="checkbox" name="radio-stacked" id="yessuffer" required>
                                            <label for="" class="pb-2 pr-2 " for="yessuffer">yes - sign me up</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-5">
                                        <div class="form-check mb-4">
                                            <input type="radio"  value="no" class="checkbox" name="radio-stacked" id="yessuffer" required>
                                            <label for="" class="pb-2 pr-2" for="nosuffer">no thank you</label>
                                        </div>
                                     </div>
                                     <div class="col-lg-6 mx-auto pb-5 mt-3">
                                        <a href="../pages/register.html"><button class="reg-btn-button">Register</button></a>
                                     </div>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@include('website.include.copyright')

@endsection
