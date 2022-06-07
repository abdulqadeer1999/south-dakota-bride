@extends('website.layout.master')
@section('title','South-Dakota-Bride | Engagement')
@section('content')
<section class="Home-Section  pt-5 Gray-overlay mt-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 overlay-image-text wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="d-flex flex-row justify-content-around">
                    <div>
                        <div class="d-flex flex-column translate">
                            <div class="line-after">
                                <div class="line-after1"></div>
                            </div>
                            <div class="line-center">
                                <ul>
                                    <li><a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="line-before">
                                <div class="line-before2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="Wed-Art-Div">
                        <div class="couple-img-wed">
                            <img src="{{asset('website/images/1x/engagement-banner.png')}}" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 mb-5 overlay-image-text wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1 class="couple-text pt-5">South Dakota</h1>
                <h1 class="couple-text">bride <span>Engagements</span></h1>
                <div>
                    <input placeholder="Engagement Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
                    <!-- <input type="date" placeholder="Wedding Date"> -->
                </div>
                        <div class="d-flex align-item-center pt-4 ">
                            <div class="reg-div">
                                <a href="javascript:void(0)">
                                    <button class="sign-btn button wow animated bounceIn animate__delay-1s">Search</button>
                                </a>
                            </div>
                            <div class="sign-div">
                                <a href="{{route('register')}}" >
                                    <button class="reg-btn button  wow animated bounceIn animate__delay-1s">Register</button>
                                </a>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</section>
<!-- ==============================================BANNER  CLOSED============================================== -->
<!-- ==============================================COUPLE SECTION  OPEN============================================== -->
<section class="Couple-Section mt-5">
    <div class="d-flex justify-content-center">
    <div class="CstDivs container">
       <div class="row mt-5">
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('engagement-details')}}"><img src="{{asset('website/images/1x/wed-img-1.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-text">john Watson</h6>
                      <h6 class="card-text">And</h6>
                      <h6 class="card-text">Julie Williams</h6>

                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('engagement-details')}}"><img src="{{asset('website/images/1x/wed-img-2.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('engagement-details')}}"><img src="{{asset('website/images/1x/wed-img-3.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('engagement-details')}}"><img src="{{asset('website/images/1x/wed-img-1.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('engagement-details')}}"><img src="{{asset('website/images/1x/wed-img-2.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('engagement-details')}}"><img src="{{asset('website/images/1x/wed-img-3.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('engagement-details')}}"><img src="{{asset('website/images/1x/wed-img-1.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('engagement-details')}}"><img src="{{asset('website/images/1x/wed-img-2.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('engagement-details')}}"><img src="{{asset('website/images/1x/wed-img-3.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>

           <div class="d-flex justify-content-around align-item-center mt-5 mb-5">
            <div class="mt-5"><a href=""><button class="reg-btn wow animate__delay-1s animated bounceIn" data-wow-duration="1s" data-wow-delay="0.5s">Load More</button></a></div>
           </div>
        </div>
       </div>
    </div>
</section>
@endsection


