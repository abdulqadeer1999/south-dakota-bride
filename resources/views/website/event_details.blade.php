@extends('website.layout.master')
@section('title')
@section('content')
<section class="Home-Section mt-5 pt-5">
    <div class="container mt-5 ">
        <div class="row">

            <div class="col-lg-6 col-sm-12 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="d-flex flex-row justify-content-around">
                    <div>
                        <div class="d-flex flex-column translate">
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
                    <div class="Wed-Art-Div">
                        <div class="couple-img-wed">
                            <img src="{{asset('website/images/1x/Articles-inner.png')}}" alt="">
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 mb-5 ">
                <h1 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">event name 01</h1>
                <p class="art-inner-para wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi
                    impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                    laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                    laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                    laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                    laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                    laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                    laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                </p>


            </div>
        </div>
    </div>
</section>
<!-- ==============================================BANNER  CLOSED============================================== -->
<!-- ==============================================google map open ============================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="contact-info ">
                <div class="col-lg-8 col-sm-8 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="d-flex justify-content-around con-inf-links mt-3">
                        <div class="d-flex justify-content-start">
                            <div class="p-2"><img src="{{asset('website/images/1x/location.png')}}" alt=""></div>
                            <div class="p-2"><a href="https://goo.gl/maps/DKt5kZgULkunrP5MA" target="_blank">XYZ
                                    Street, New York City, United States</a></div>
                        </div>

                        <div class="d-flex justify-content-start">

                            <div class="p-2"><img src="{{asset('website/images/1x/datetime-icons.png')}}" alt=""></div>

                            <div>
                                <div id='time' class="pt-2"></div>
                            </div>


                        </div>

                    </div>

                </div>


            </div>
            <div class="col-lg-11 mx-auto mt-3">
                <div class="map p-3 wow  animated bounceIn">
                    <img src="{{asset('website/images/1x/map.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
