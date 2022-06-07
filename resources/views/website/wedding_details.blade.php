@extends('website.layout.master')
@section('title','')
@section('content')
<section class="mt-5 pt-5 pb-5 image-change">
    <div class="container CstDivs mt-5">
        <div class="row">
            <div class="col-lg-6 wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="weds-banner-img" id="featured_img">
                    <img src="{{asset('website/images/1x/weds-banner-img.png')}}" alt="" id="img">
                </div>
            </div>
            <div class="col-lg-6 wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <h1 class="weds-text pt-5 mt-3">john Watson</h1>
                <h1 class="weds-text">and</h1>
                <h1 class="weds-text">julie Williams</h1>
                <p class="weds-para pt-3">Bohemian, Natural, Romantic, Vintage</p>
                <h4 class="weds-text pt-3">the day we said yes</h4>
                <p class="weds-para pt-3">Monday,May 30th,2021</p>
                <h4 class="weds-text pt-3">our love story</h4>
                <p class="weds-para-p pt-5 pb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit
                    saepe
                    exercitationem sed ratione suscipit veniam. Reiciendis est commodi
                    error dolores nesciunt esse,
                    eveniet repellendus possimus libero saepe quibusdam repellat eum.
                    eveniet repellendus possimus libero saepe quibusdam repellat .
                </p>
                <div class="d-flex justify-content-around mt-5" id="thumb_img">
                    <div class="weds-img-div">

                        <img class="active" src="{{asset('website/images/1x/weds-img1.png')}}"
                            onclick="changeimg('{{asset('website/images/1x/weds-img1.png')}})',this);">

                    </div>
                    <div class="weds-img-div">

                        <img src="{{asset('website/images/1x/weds-img2.png')}}"
                            onclick="changeimg('{{asset('website/images/1x/weds-img2.png')}})',this)">

                    </div>
                    <div class="weds-img-div">

                        <img src="{{asset('website/images/1x/weds-img3.png')}}"
                            onclick="changeimg('{{asset('website/images/1x/weds-img3.png')}})',this)">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==============================================BANNER  CLOSED============================================== -->
 <!-- ==============================================COUPLE SECTION  OPEN============================================== -->
 <section class="Couple-Section-wedding mt-5">
    <div class="d-flex justify-content-center">
    <div class="container CstDivs">
       <div class="row">
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <img src="{{asset('website/images/1x/weds-1.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-text">Photographer</h5>
                      <p class="weds-card-para-p">Devid Wastson</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <img src="{{asset('website/images/1x/weds-2.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">Caremoney venue</h5>
                        <p class="weds-card-para-p">Out door wedding venue</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <img src="{{asset('website/images/1x/weds-3.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">Cake</h5>
                        <p class="weds-card-para-p">the backers sweets</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <img src="{{asset('website/images/1x/weds-4.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">Photographer</h5>
                        <p class="weds-card-para-p">Devid Wastson</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <img src="{{asset('website/images/1x/weds-2.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">Recepition Venue</h5>
                        <p class="weds-card-para-p">Out door perfect event venue</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <img src="{{asset('website/images/1x/weds-6.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-text">Decorations</h5>
                        <p class="weds-card-para-p">Out door wedding decoration</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="../pages/vendors-inner.html"><img src="{{asset('website/images/1x/weds-7.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-text">Boutique</h5>
                        <p class="weds-card-para-p">best weeding bautique</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="../pages/vendors-inner.html"><img src="{{asset('website/images/1x/weds-8.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-text">Planner</h5>
                        <p class="weds-card-para-p">best weding planner</p>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt-4 wow animate__delay-1s animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="card">
                    <a href="../pages/vendors-inner.html"><img src="{{asset('website/images/1x/weds-9.png')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-text">Men's suit</h5>
                        <p class="weds-card-para-p">Out door wedding men's dress</p>
                    </div>
                  </div>
            </div>


        </div>
       </div>
    </div>
</section>
@endsection
