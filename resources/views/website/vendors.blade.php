@extends('website.layout.master')
@section('title','South-Dakota-Bride | vendors')
@section('content')
<section class="Home-Section mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-row justify-content-around position-relative">
                    <div class="banner-links wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="d-flex flex-column translates">
                            <div class="line-after">
                                <div class="line-after1"></div>
                            </div>
                            <div class="line-center">
                                <ul>
                                    <li><a href="https://www.facebook.com" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com" target="_blank"><i
                                                class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://www.twitter.com" target="_blank"><i
                                                class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="https://www.youtube.com" target="_blank"><i
                                                class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                            <div class="line-before">
                                <div class="line-before2"></div>
                            </div>
                        </div>
                    </div>

                    <div class="banner-photo-text ">
                        <h1 class="banner-photo-text pt-5 wow  animated fadeInLeft">photographer-wedding-vendors</h1>

                        <div class="row mt-5">
                            <div class="col-lg-4 mt-5">
                                <a href="javascript:void(0)"><button class="vendors-a wow  animated bounceIn" data-wow-duration="1s" data-wow-delay="0.5s">Location</button></a>
                            </div>
                            <div class="col-lg-4 mt-5">
                                <a href="javascript:void(0)"><button class="reg-btn-vendors wow  animated bounceIn" data-wow-duration="1s" data-wow-delay="0.5s">search</button></a>
                            </div>
                        </div>
                        <section class="Couple-Section-weddings">
                            <div class="container pt-5">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img src="{{asset('website/images/1x/weds-1.png')}}"
                                                    class="card-img-top" alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">David Wastson</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img
                                                    src="{{asset('website/images/1x/photo-wed-img.png')}}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">juile Williams</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img
                                                    src="{{asset('website/images/1x/photo-wed-img_1.png')}}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">john smith</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img src="{{asset('website/images/1x/weds-1.png')}}"
                                                    class="card-img-top" alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">David Wastson</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img
                                                    src="{{asset('website/images/1x/photo-wed-img.png')}}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">juile Williams</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img
                                                    src="{{asset('website/images/1x/photo-wed-img_1.png')}}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">john smith</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img src="{{asset('website/images/1x/weds-1.png')}}"
                                                    class="card-img-top" alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">David Wastson</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img
                                                    src="{{asset('website/images/1x/photo-wed-img.png')}}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">juile Williams</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img
                                                    src="{{asset('website/images/1x/photo-wed-img_1.png')}}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">john smith</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img src="{{asset('website/images/1x/weds-1.png')}}"
                                                    class="card-img-top" alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">David Wastson</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img
                                                    src="{{asset('website/images/1x/photo-wed-img.png')}}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">juile Williams</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <div class="card">
                                            <a href="{{route('vendor-details')}}"><img
                                                    src="{{asset('website/images/1x/photo-wed-img_1.png')}}" class="card-img-top"
                                                    alt="..."></a>
                                            <div class="card-body">
                                                <h5 class="card-text">Photographer</h5>
                                                <p class="weds-card-para-p">john smith</p>
                                                <div class="rating text-center">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>

        </div>
</section>
@endsection
