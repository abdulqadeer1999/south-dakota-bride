@extends('website.layout.master')
@section('title','South-Dakota-Bride | Planner')
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

                    <div class="banner-photo-text wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h1 class="banner-photo-text pt-5">South Dakota Bride Wedding Guide </h1>
                        <p class="privacy-policy-para pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                            deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                           laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                           deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                           deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                        </p>
                        <div class="d-flex align-item-center pt-4 Home-Button">
                            <div class="reg-div">
                                <a href="{{route('signup')}}">
                                    <button class="reg-btn button  wow  bounceIn animate__delay-1s" style="visibility: visible; animation-name: bounceIn;">Sign
                                        Up</button></a></div>
                            <div class="sign-div">
                                <a href="javascript:void(0)">
                                    <button class="sign-btn button wow  bounceIn animate__delay-1s" style="visibility: visible; animation-name: bounceIn;">Pdf version </button></a></div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-lg-10  mx-auto">
                <h1 class="planner-photo-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">getting started</h1>
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                </p>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="https://designprosusa.com/south-dakota-bride/assets/images/sample.pdf" target="_blank"><span>wedding timeline checklist</span></a></h4>
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                </p>
                <h4 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><a href="https://designprosusa.com/south-dakota-bride/assets/images/sample.pdf" target="_blank"><span>discuss finances checklist</span></a></h4>
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                </p>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="https://designprosusa.com/south-dakota-bride/assets/images/sample.pdf" target="_blank"><span>budget worksheets</span></a></h4>
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                </p>
                <h1 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">now the fun begins</h1>
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                </p>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="https://designprosusa.com/south-dakota-bride/assets/images/sample.pdf" target="_blank"><span>recepition venues</span></a></h4>
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                </p>
                <h4 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><a href="https://designprosusa.com/south-dakota-bride/assets/images/sample.pdf" target="_blank"><span>ceremony details</span></a></h4>
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                </p>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="https://designprosusa.com/south-dakota-bride/assets/images/sample.pdf" target="_blank"><span>recepition details</span></a></h4>
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas!
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                   deleniti. Cum consequuntur quisquam placeat est libero quos eaque.
                </p>
                <h4 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><a href="https://designprosusa.com/south-dakota-bride/assets/images/sample.pdf" target="_blank"><span>payment records</span></a></h4>
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas.
                </p>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="https://designprosusa.com/south-dakota-bride/assets/images/sample.pdf" target="_blank"><span>wedding party and timeline</span></a></h4>
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas.
                </p>
                <h4 class="couple-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><a href="https://designprosusa.com/south-dakota-bride/assets/images/sample.pdf" target="_blank"><span>wedding day checklist</span></a></h4>
                <p class="privacy-policy-para pt-3 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas.
                </p>
                <h4 class="couple-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><a href="https://designprosusa.com/south-dakota-bride/assets/images/sample.pdf" target="_blank"><span>photo checklist</span></a></h4>
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas.
                </p>
                <h1 class="planner-photo-text pt-5 wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">2022-23 calenders</h1>
                <h4 class="couple-text wow  animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s"><span>2022-23 calenders</span></h4>
                <h1 class="planner-photo-text pt-5 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">South-Dakota-Brides planner guide</h1>
                <h4 class="couple-text wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s"><span>South-Dakota-Brides planner guide</span></h4>
                <p class="privacy-policy-para pt-3 wow  animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sequi impedit
                    deleniti. Cum consequuntur quisquam placeat est libero quos eaque,
                   laudantium ad, minus minima, nesciunt fuga saepe consectetur dolore quas.
                </p>
            </div>

        </div>
</section>
@endsection
