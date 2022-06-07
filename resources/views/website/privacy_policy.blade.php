@extends('website.layout.master')
@section('title','South-Dakota-Bride | Privacy-Policy')
@section('content')
<section class="Home-Section mt-5 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="d-flex flex-row justify-content-around">
                    <div class="banner-links wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
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

                    <div class="banner-photo-text">
                        <h1 class="banner-photo-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">{{$privacy->title}}</h1>
                        <p class="privacy-policy-para pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">{!! $privacy->description !!}
                        </p>
                        {{-- <p class="privacy-policy-para wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                            deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                           laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                           deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                           deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                            deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                           laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                           deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                           deleniti. Cum consequuntur quisquam placeat est libero .
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                            deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                           laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                           deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                           deleniti. Cum consequuntur quisquam placeat est libero .
                        </p> --}}
                    </div>

                </div>

            </div>

        </div>
</section>
@endsection
