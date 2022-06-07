@extends('website.layout.master')
@section('title','South-Dakota-Bride | Blog')
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
                            <img src="{{asset('website/images/1x/Articles-banner.png')}}" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 mb-5 overlay-image-text wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1 class="couple-text-wed pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">Weddings blog</h1>
                <div class="row mt-5">
                    <div class="col-lg-6">
                            <p class="couple-para-wed pb-3 pt-3">Select an Blog Catgory</p>
                            <select class="form-select " id="validationDefault03" placeholder="City">
                                <option selected="" disabled="" value="">Select a Vendor Catgory</option>
                                <option value="">Catgory 01</option>
                                <option value="">Catgory 02</option>
                                <option value="">Catgory 03 </option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <p class="couple-para-wed pb-3 pt-3">Or Select Blog for Keyword</p>
                            <input class="Artical-input" type="search" placeholder="Search">
                        </div>
                    </div>
                    <div class="mt-4"><a href="javascript:void(0)"><button class="reg-btn">Search Now</button></a></div>

            </div>
        </div>
    </div>
</section>
<!-- ==============================================BANNER  CLOSED============================================== -->
<!-- ==============================================COUPLE SECTION  OPEN============================================== -->
<section class="Couple-Section mt-5">
    <h1 class="couple-text-wed pt-5 text-center wow  animated bounceIn" data-wow-duration="1s" data-wow-delay="0.5s"> blog</h1>
    <div class="d-flex justify-content-center">
    <div class="CstDivs container">
       <div class="row mt-5">
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('blog-details')}}"><img src="{{asset('website/images/1x/Articles-img-1.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                      <h6 class="card-text">john Watson</h6>
                      <h6 class="card-text">And</h6>
                      <h6 class="card-text">julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('blog-details')}}"><img src="{{asset('website/images/1x/Articles-img-2.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('blog-details')}}"><img src="{{asset('website/images/1x/Articles-img-3.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('blog-details')}}"><img src="{{asset('website/images/1x/Articles-img-1.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('blog-details')}}"><img src="{{asset('website/images/1x/Articles-img-2.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('blog-details')}}"><img src="{{asset('website/images/1x/Articles-img-3.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('blog-details')}}"><img src="{{asset('website/images/1x/Articles-img-1.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('blog-details')}}"><img src="{{asset('website/images/1x/Articles-img-2.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="{{route('blog-details')}}"><img src="{{asset('website/images/1x/Articles-img-3.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h6 class="card-text">john Watson</h6>
                        <h6 class="card-text">And</h6>
                        <h6 class="card-text">Julie Williams</h6>
                    </div>
                  </div>
            </div>
        </div>
       </div>
    </div>
</section>
@endsection
