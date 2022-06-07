@extends('website.layout.master')
@section('title','South-Dakota-Bride | Packages')
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
                    <div class="banner-photo-text pt-5">
                        <h1 class="banner-photo-text pt-5 wow  animated fadeInLeft text-center wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">packages</h1>
                        <section class="Couple-Section-weddings">
                            <div class="container pt-5">
                            <div class="row">
                                    <div class="col-lg-3 col-sm-6  mb-5">
                                        <label for="p1" class="w-100">
                                            <input type="radio" name="package" id="p1" hidden>
                                            <div class="card Package-card p-card">
                                                <h1 class="package-title pt-4">Free</h1>
                                                <span class="package-price">$599.00</span>
                                            <div class="pt-4 pb-5">
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,<p>
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,</p>
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,</p>
                                            </div>
                                            <div class="pb-5 mb-5 text-center">
                                                <a href="javascript:void(0)">
                                                    <button class="reg-btn-vendors-package wow   bounceIn animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceIn;">Choose Pakage</button></a>
                                            </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-sm-6  mb-5">
                                        <label for="p2" class="w-100">
                                            <input type="radio" name="package" id="p2" hidden>
                                            <div class="card Package-card p-card">
                                                <h1 class="package-title pt-4">basic</h1>
                                                <span class="package-price">$999.00</span>
                                            <div class="pt-4 pb-5">
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,<p>
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,</p>
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,</p>
                                            </div>
                                            <div class="pb-5 mb-5 text-center">
                                                <a href="javascript:void(0)">
                                                    <button class="reg-btn-vendors-package wow   bounceIn animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceIn;">Choose Pakage</button></a>
                                            </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-sm-6  mb-5">
                                        <label for="p3" class="w-100">
                                            <input type="radio" name="package" id="p3" hidden>
                                            <div class="card Package-card p-card">
                                                <h1 class="package-title pt-4">regular</h1>
                                                <span class="package-price">$1999.00</span>
                                            <div class="pt-4 pb-5">
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,<p>
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,</p>
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,</p>
                                            </div>
                                            <div class="pb-5 mb-5 text-center">
                                                <a href="javascript:void(0)">
                                                    <button class="reg-btn-vendors-package wow   bounceIn animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceIn;">Choose Pakage</button></a>
                                            </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-sm-6  mb-5">
                                        <label for="p4" class="w-100">
                                            <input type="radio" name="package" id="p4" hidden>
                                            <div class="card Package-card p-card">
                                                <h1 class="package-title pt-4">vip listing</h1>
                                                <span class="package-price">$1999.00</span>
                                            <div class="pt-4 pb-5">
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,<p>
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,</p>
                                                <p class="package-p">&#10004; Lorem ipsum dolor sit amet,</p>
                                            </div>
                                            <div class="pb-5 mb-5 text-center">
                                                <a href="javascript:void(0)">
                                                    <button class="reg-btn-vendors-package wow   bounceIn animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceIn;">Choose Pakage</button></a>
                                            </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="text-center pt-5 mt-5 mb-5">
                                        <a href="{{route('payment')}}">
                                            <button class="reg-btn-vendors wow   bounceIn animated" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: bounceIn;">next</button></a>
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
