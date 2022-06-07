@extends('Frontend.Layout.master')
@section('content')
    <style>
        .first-section-slider-img {
            width: 100%;
            height: 80px;
        }

        .first-section-slider-img img {
            width: 100%;
            height: 100%;
        }
        .for-height-fix .carousel-3d-slide {
            height: 272px !important;
        }
        .for-height-fix .carousel-3d-slide img {
            height: 100% !important;
        }

    </style>
 <?php
    $getfacebook = App\Models\sociallink::where('type',1)->first();
    $getinstagram = App\Models\sociallink::where('type',2)->first();
    $getlinkedin = App\Models\sociallink::where('type',3)->first();
    ?>
    <?php
    $logo_add = App\Models\LogoManager::where('title', 'logo')->first();
    // dd($logo_add);
    ?>
    <div class="main-div background-grey-color">
        <div class="home-page">
            <div class="top-home-section">

                @include('Frontend.Layout.body.navbar')

                @foreach ($getPiyano as $getPiyano)
                    <div class="video-box">
                        <video id="background-video" autoplay loop muted>
                            <source src="{{ asset('storage/uploads/video/' . $getPiyano->video) }}" type="video/mp4">
                        </video>
                    </div>
                @endforeach

                <div data-wow-delay="0.50s" class="video-content-center wow fadeIn">
                    <div class="logo-img">
                        <a href="{{ route('AmeaToday') }}"> <img
                                src="{{ asset('storage/uploads/logo/' . $logo_add->image) }}" alt=""></a>
                    </div>
                    {{-- @include('Frontend.Layout.body.joinAmeaToday') --}}

                    @foreach ($getahomeMainHeading as $MainHeading)
                        <h2> {!! $MainHeading->title !!}</h2>
                    @endforeach

                    {{-- <h2>American Music Educators Association</h2> --}}
                    <!-- audio media code  -->
                    <a class="play-pause plays-pause mt1" id="playBtn" onClick="musicPlay()">
                        <div class="play-round">
                            <i class="fa fa-play " id="playIcon" aria-hidden="true"></i>
                        </div>
                    </a>
                    <a href="{{ route('AmeaToday') }}" class="mt3"><button class="round-tran-btn">
                            Click here to join</button></a>

                </div>

                @foreach ($getBackAudio as $Audio)
                    <audio controls id="mp3Player" hidden>
                        <!-- change song here -->
                        <source src="{{ asset('storage/uploads/audio/' . $Audio->audio) }}" type="audio/mpeg">
                    </audio>
                @endforeach



                {{-- <audio controls id="mp3Player" hidden>
                <source src="{{asset('frontend/assets/mp3/song2.mp3')}}" type="audio/mpeg">
            </audio> --}}

            </div>
            <div class="first-section">
                <!-- Swiper -->
                <div class="swiper mySwiper mt3">
                    <div class="swiper-wrapper">
                        @foreach ($getSponsors as $Sponsors)
                            <div class="swiper-slide cstm-width">
                                <div class="first-section-slider-img ">
                                    <img src="{{ asset('storage/uploads/cms/' . $Sponsors->image) }}" alt="slider">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class="swiper mySwiper mt3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide cstm-width">
                            <div class="first-section-slider-img ">
                                <img src="{{ asset('frontend/assets/image/1x/silder1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-section-slider-img1 ">
                                <img src="{{ asset('frontend/assets/image/1x/silder2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide cstm-width">
                            <div class="first-section-slider-img ">
                                <img src="{{ asset('frontend/assets/image/1x/silder3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-section-slider-img1 ">
                                <img src="{{ asset('frontend/assets/image/1x/silder2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide cstm-width">
                            <div class="first-section-slider-img3 ">
                                <img src="{{ asset('frontend/assets/image/1x/silder4.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-section-slider-img2">
                                <img src="{{ asset('frontend/assets/image/1x/silder5.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide cstm-width">
                            <div class="first-section-slider-img">
                                <img src="{{ asset('frontend/assets/image/1x/silder6.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-section-slider-img1 ">
                                <img src="{{ asset('frontend/assets/image/1x/silder2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide  cstm-width">
                            <div class="first-section-slider-img cstm-width-slider">
                                <img src="{{ asset('frontend/assets/image/1x/silder1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="first-section-slider-img1 ">
                                <img src="{{ asset('frontend/assets/image/1x/silder2.jpg') }}" alt="">
                            </div>
                        </div>

                    </div>
                </div> --}}
                <!-- Swiper -->
            </div>
            <!-- Img Gallery  Start-->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-background-color for-modal-pos-relative">
                    <div class="modal-content for-height-modal">
                        <div class="modal-header for-cstm-header">
                            <button type="button " class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="fa fa-times" aria-hidden="true"></i></button>
                        </div>
                        <div class="modal-body d-flex justify-content-center align-items-center">
                            <div class="modal-imgs">
                                <img src="" alt="" id="modal_img">
                            </div>
                            <div class="next-per-btns">
                                <button id="prev_btn_modal_slider" class="prevs-btns"><i class="fa fa-angle-left"
                                        aria-hidden="true"></i></button>
                                <button id="next_btn_modal_slider" class="next-btns"><i class="fa fa-angle-right"
                                        aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Img Gallery End -->


            <div class="container">

                <div class="second-section">
                    @foreach ($getMusic as $key => $value)
                        <div data-wow-delay="0.50s" class="second-sec-heading wow fadeIn">
                            <h1>{{ $value->title }}</h1>
                        </div>
                    @endforeach

                    {{-- {{ asset('frontend/') }} --}}
                    <!-- multi-media-palyer start -->
                    <div class="player-size mt3 wow bounceIn">

                        <div id="set_image" class="player-wrap track-view light"
                            data-url="//archive.org/download/mythium/JLS_ATI.mp3" data-title="All This Is - Joe L.'s Studio"
                            data-artist="Mythium"
                            style="background-image: url('{{ asset('storage/uploads/audio/' . $getAudio[0]['image']) }}');">
                            <audio preload></audio>
                            <div class="for-mobile-screen-background">
                                <img src="{{ asset('frontend/assets/image/1x/paly-music.png') }}" alt="">
                            </div>
                            <div class="player">
                                <p class="title-text"></p>
                                <p class="artist-text ellipsis"></p>
                                <div class="controlss">
                                    <div class="play-pause">
                                        <div class="play-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150">
                                                <path
                                                    d="M43.3,11.1C36.6,7.1 30.3,9.6 30.3,18.6C30.3,27.6 30.3,121.3 30.3,131.7C30.3,142.1 35.6,144 43.6,139.7C51.6,134.7 133.5,87.5 141.5,83C149.3,78.5 149,72.5 141.5,68.2C134,63.8 52.2,16.4 43.3,11.1Z" />
                                            </svg>
                                        </div>
                                        <div class="pause-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                                <rect width="18%" height="90%" x="22.5%" y="5%" rx="5%" ry="5%" />
                                                <rect width="18%" height="90%" x="62.5%" y="5%" rx="5%" ry="5%" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="prev-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M8.7 12L22 18.9V5.1L8.7 12z" />
                                            <path d="M0 12l11.3 6.9V5.1L0 12z" />
                                        </svg>
                                    </div>
                                    <div class="next-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path d="M15.3 12L2 18.9V5.1L15.3 12z" />
                                            <path d="M24 12l-11.3 6.9V5.1L24 12z" />
                                        </svg>
                                    </div>
                                    <div class="playlist-button">
                                        <svg viewBox="0 0 48 48">
                                            <rect width="67%" height="13%" x="28%" y="19%" rx="5%" ry="5%" />
                                            <rect width="67%" height="13%" x="28%" y="45%" rx="5%" ry="5%" />
                                            <rect width="67%" height="13%" x="28%" y="71%" rx="5%" ry="5%" />
                                            <rect width="13%" height="13%" x="5%" y="19%" rx="6.5%" ry="7.5%" />
                                            <rect width="13%" height="13%" x="5%" y="45%" rx="6.5%" ry="7.5%" />
                                            <rect width="13%" height="13%" x="5%" y="71%" rx="6.5%" ry="7.5%" />
                                        </svg>
                                    </div>
                                    <div class="seek-wrap"><input type="range" min="0" max="100" step=".1" value="0"
                                            class="seek-bar">
                                    </div>
                                    <div class="current-time">0:00:00</div>
                                    <div class="duration-time">0:00:00</div>
                                </div>
                            </div>
                            <div class="big-play-pause">
                                <div class="big-play-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150">
                                        <path
                                            d="M43.3,11.1C36.6,7.1 30.3,9.6 30.3,18.6C30.3,27.6 30.3,121.3 30.3,131.7C30.3,142.1 35.6,144 43.6,139.7C51.6,134.7 133.5,87.5 141.5,83C149.3,78.5 149,72.5 141.5,68.2C134,63.8 52.2,16.4 43.3,11.1Z" />
                                    </svg>
                                </div>
                                <div class="big-pause-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                        <rect width="18%" height="90%" x="22.5%" y="5%" rx="5%" ry="5%" />
                                        <rect width="18%" height="90%" x="62.5%" y="5%" rx="5%" ry="5%" />
                                    </svg>
                                </div>
                            </div>

                            <div id="songs-palylist"class="playlist-wrap">
                                 <h2>{{ $getAudio[0]['title'] }}</h2>
                                <ol>
                                    @foreach ($getAudio as $key => $Audio)
                                        <li data-img="{{ $Audio->image }}">
                                            <a href="{{ asset('storage/uploads/audio/' . $Audio->audio) }}"
                                                data-artist="track {{ $key + 1 }}">{{ $Audio->content }}</a>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>

                            {{-- <div class="playlist-wrap">
                                <h2>Mythium</h2>
                                <ol>
                                    <li><a href="{{ asset('frontend/assets/mp3/song1.mp3') }}" data-artist="track 1">All
                                            This
                                            Is - Joe
                                            L.'s Studio</a>
                                    </li>
                                    <li><a href="{{ asset('frontend/assets/mp3/song1.mp3') }}" data-artist="track 2">The
                                            Forsaken -
                                            Broadwing Studio (Final Mix)</a>
                                    </li>
                                    <li><a href="{{ asset('frontend/assets/mp3/song2.mp3') }}" data-artist="track 3">All
                                            The
                                            King's Men -
                                            Broadwing Studio (Final Mix)</a>
                                    </li>
                                    <li><a href="{{ asset('frontend/assets/mp3/song1.mp3') }}" data-artist="track 4">The
                                            Forsaken -
                                            Broadwing Studio (First Mix)</a>
                                    </li>
                                    <li><a href="{{ asset('frontend/assets/mp3/song1.mp3') }}" data-artist="track 5">All
                                            The
                                            King's Men
                                            - Broadwing Studio (First Mix)</a>
                                    </li>
                                </ol>
                            </div> --}}
                        </div>


                    </div>
                    <!-- multi-media-palyer start -->
                </div>
                <div class="third-section mt5">
                    @foreach ($getahomeQuote as $Quote)
                        <div class="third-sec-heading mt2">
                            <h2 class="wow fadeInLeft">{!! $Quote->content !!}</h2>
                        </div>
                        <div class="third-sec-heading mt3">
                            <h2 class="wow fadeInLeft for-decres-size">{{ $Quote->title }}</h2>
                        </div>
                    @endforeach
                    {{-- @foreach ($getSponsors as $Sponsors)
                                    <div class="swiper-slide cstm-width">
                                        <div class="first-section-slider-img ">
                                            <img src="{{ asset('storage/uploads/cms/'.$Sponsors->image) }}"  style="width:160px; height:80px;" alt="slider">
                                        </div>
                                    </div>
                        @endforeach --}}


                    <div id="example" class="mt3 for-height-fix">
                        <carousel-3d :autoplay="true" :autoplay-timeout="3000"  :clickable="true">
                            @foreach ($getGallery as $key => $Gallery)
                            <slide :index="{{ $key ++ }}">
                                {{-- <slide :index="{{ $Gallery->id }}"> --}}
                                    <img src="{{ asset('storage/uploads/cms/' . $Gallery->image) }}" alt="slidermedium">
                                </slide>
                            @endforeach
                        </carousel-3d>
                        {{-- <carousel-3d :autoplay="true" :autoplay-timeout="3000" :clickable="true">
                            @foreach ($getGallery as $key => $Gallery)
                            <slide :index="{{ $key ++ }}">

                                    <img src="{{ asset('storage/uploads/cms/' . $Gallery->image) }}" alt="slidermedium">
                                </slide>
                            @endforeach
                        </carousel-3d> --}}

                    </div>
                </div>
                {{-- <div class="third-section mt5">
                    <div class="third-sec-heading mt2">
                        <h2 class="wow fadeInLeft">“To play a wrong note is insignificant; to play without passion is
                            inexcusable”</h2>
                    </div>
                    <div class="third-sec-heading mt3">
                        <h2 class="wow fadeInLeft for-decres-size">Ludwig van Beethoven</h2>
                    </div>
                    <div id="example" class="mt3">
                        <carousel-3d :autoplay="true" :autoplay-timeout="3000" :clickable="true">


                            <slide :index="0">

                                <img src="{{ asset('frontend/assets/image/1x/slider-3.jpg') }}">

                            </slide>

                            <slide :index="1">

                                <img src="{{ asset('frontend/assets/image/1x/slider-2.jpg') }}">

                            </slide>

                            <slide :index="2">

                                <img src="{{ asset('frontend/assets/image/1x/slider-3.jpg') }}">

                            </slide>

                            <slide :index="3">

                                <img src="{{ asset('frontend/assets/image/1x/slider-4.jpg') }}">

                            </slide>

                            <slide :index="4">

                                <img src="{{ asset('frontend/assets/image/1x/slider-5.jpg') }}">

                            </slide>

                            <slide :index="5">

                                <img src="{{ asset('frontend/assets/image/1x/slider-6.jpg') }}">

                            </slide>

                            <slide :index="6">

                                <img src="{{ asset('frontend/assets/image/1x/slider-3.jpg') }}">

                            </slide>

                        </carousel-3d>
                    </div>
                </div> --}}
                @foreach ($getahome as $home)
                    <div data-wow-delay="0.40s" class="mt5">
                        <div data-wow-delay="0.30s" class="fourth-sec-heading mt5 wow bounceIn">
                            <h2>{{ $home->title }}</h2>
                        </div>
                        <div data-wow-delay="0.40s" class="fouth-sec-para mt3 wow bounceIn">
                            {!! $home->content !!}
                            <a class="" href="{{ route('about-amea') }}"><button
                                    class="mt4 color-trans-button button-back-color wow bounceIn">Learn
                                    More</button></a>
                        </div>
                    </div>
                @endforeach
                {{-- <div data-wow-delay="0.40s" class="mt5">
                    <div data-wow-delay="0.30s" class="fourth-sec-heading mt5 wow bounceIn">
                        <h2>About AMEA Today</h2>
                    </div>
                    <div data-wow-delay="0.40s" class="fouth-sec-para mt3 wow bounceIn">
                        <p>Welcome to the American Music Educators Association.</p>
                        <h5>(AMEA)</h5>
                        <p class="mt1">The AMEA is an all-in-one tool for music education that assists, recognizes and
                            celebrates
                            every</p>
                        <p>evel of music training from festival evaluations, college recruitment assistance, private
                            instructors</p>
                        <p>and the spectacular awards celebration.</p>
                        <a class="" href="{{ route('about-amea') }}"><button
                                class="mt4 color-trans-button button-back-color wow bounceIn">Learn
                                More</button></a>
                    </div>
                </div> --}}

            </div>

            <div>
                @foreach ($getGuitar as $Guitar)
                    <div data-wow-delay="0.60s" class="fifth-section fourth-section wow bounceIn">
                        <div class="video-box2 mt6">
                            <video id="background-video" autoplay loop muted>
                                <source src="{{ asset('storage/uploads/video/' . $Guitar->video) }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="last-footer-section">
                <footer>
                    <div class="container">
                        <div class="footer">
                            <div class="d-flex justify-content-between footer-mobile-styling">
                                <div class="d-flex footer-social-logo">
                                    <div class="footer-img"><a href="{{ $getfacebook->social_media }}" target="_blank"><img src="{{ asset('frontend/assets/image/1x/face.png') }}" alt=""></a>
                                    </div>
                                    <div class="footer-img"><a href="{{ $getinstagram->social_media }}" target="_blank"><img src="{{ asset('frontend/assets/image/1x/insta.png') }}" alt=""></a>
                                    </div>
                                    <div class="footer-img"><a href="{{ $getlinkedin->social_media }}" target="_blank"><img src="{{ asset('frontend/assets/image/1x/in.png') }}" alt=""></a></div>
                                </div>
                                {{-- <div class="d-flex footer-social-logo">
                                    <div class="footer-img"><a href="{{ $getfacebook }}" target="_blank"><img
                                                src="{{ asset('frontend/assets/image/1x/face.png') }}" alt=""></a>
                                    </div>
                                    <div class="footer-img"><a href="{{ $getinstagram }}" target="_blank"><img
                                                src="{{ asset('frontend/assets/image/1x/insta.png') }}" alt=""></a>
                                    </div>
                                    <div class="footer-img"><a href="{{ $getlinkedin }}" target="_blank"><img
                                                src="{{ asset('frontend/assets/image/1x/in.png') }}" alt=""></a></div>
                                </div> --}}
                                @foreach ($getCopyrights as $Copyright)
                                    <div class="footer-content">
                                        <span>{{ $Copyright->email_one }}</span>
                                        <span>Design & Development by
                                        <a href="https://designprosusa.com/" target="_blank"> Design Pros
                                            USA</a></span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    @endsection


    @push('scripts')
        <script>
            // ******************  carousel-3d start ************************//
            new Vue({
                el: '#example',

                components: {
                    'carousel-3d': window['carousel-3d'].Carousel3d,
                    'slide': window['carousel-3d'].Slide
                }
            })
            // ******************  carousel-3d start ************************//
        </script>

        <!-- ?written by ahmed -->
        <script>
            var mp3Player = document.getElementById("mp3Player");

            function musicPlay() {
                if ($("#playIcon").hasClass('fa-play')) {
                    $("#playIcon").removeClass('fa-play')
                    $("#playIcon").addClass('fa-pause')
                    console.log(mp3Player);
                    mp3Player.play();
                    $('.pause-button').trigger('click')
                } else {
                    $("#playIcon").addClass('fa-play')
                    $("#playIcon").removeClass('fa-pause')
                    console.log('pause');
                    mp3Player.pause();
                }
            }
        </script>



        <!---------------- multi-media card player start  ----------------->
        <script>
            (function(vWin) {
                'use strict';
                var vDoc = vWin.document,
                    jsPlayer = vDoc.querySelector('.player-wrap');
                // track.pause();
                // HTML5 audio player + playlist controls
                if (jsPlayer) {
                    jsPlayer = {
                        wrap: jsPlayer,
                        player: jsPlayer.querySelector('audio'),
                        wrapList: (vDoc.querySelector('.playlist-wrap') || {}),
                        currentTime: (jsPlayer.querySelector('.current-time') || {}),
                        durationTime: (jsPlayer.querySelector('.duration-time') || {}),
                        seekBar: (jsPlayer.querySelector('.seek-bar') || {
                            style: {}
                        }),
                        bigPlayButton: (jsPlayer.querySelector('.big-play-button') || {
                            style: {}
                        }),
                        bigPauseButton: (jsPlayer.querySelector('.big-pause-button') || {
                            style: {}
                        }),
                        playButton: (jsPlayer.querySelector('.play-button') || {
                            style: {}
                        }),
                        pauseButton: (jsPlayer.querySelector('.pause-button') || {
                            style: {}
                        }),
                        prevButton: (jsPlayer.querySelector('.prev-button') || {
                            style: {}
                        }),
                        nextButton: (jsPlayer.querySelector('.next-button') || {
                            style: {}
                        }),
                        playlistButton: (jsPlayer.querySelector('.playlist-button') || {
                            style: {}
                        }),
                        titleText: (jsPlayer.querySelector('.title-text') || {
                            style: {}
                        }),
                        artistText: (jsPlayer.querySelector('.artist-text') || {
                            style: {}
                        }),
                        seekInterval: null,
                        trackCount: 0,
                        playing: false,
                        playlist: [],
                        tracks: [],
                        idx: 0
                    };

                    jsPlayer.playClicked = function jsPlayerPlayClicked() {
                        jsPlayer.bigPauseButton.style.display = 'block';
                        jsPlayer.bigPlayButton.style.display = 'none';
                        jsPlayer.pauseButton.style.display = 'block';
                        jsPlayer.playButton.style.display = 'none';
                        jsPlayer.playing = true;


                        // upper music stopping here
                        mp3Player.pause();
                        $("#playIcon").addClass('fa-play')
                        $("#playIcon").removeClass('fa-pause')
                        jsPlayer.player.play();
                        jsPlayer.seekInterval = setInterval(jsPlayer.updateSeek, 500);
                    };
                    jsPlayer.pauseClicked = function jsPlayerPauseClicked() {
                        clearInterval(jsPlayer.seekInterval);
                        jsPlayer.bigPlayButton.style.display = 'block';
                        jsPlayer.bigPauseButton.style.display = 'none';
                        jsPlayer.playButton.style.display = 'block';
                        jsPlayer.pauseButton.style.display = 'none';
                        jsPlayer.playing = false;
                        // toggleMute()
                        jsPlayer.player.pause();
                    };
                    jsPlayer.mediaEnded = function jsPlayerMediaEnded() {
                        if (jsPlayer.idx + 1 < jsPlayer.trackCount) {
                            jsPlayer.idx++;
                            jsPlayer.playTrack(jsPlayer.idx);
                        } else {
                            jsPlayer.pauseClicked();
                            jsPlayer.idx = 0;
                            jsPlayer.loadTrack(jsPlayer.idx);
                        }
                    };
                    jsPlayer.loadTracklist = function jsPlayerLoadPlaylist() {
                        jsPlayer.playlist = jsPlayer.wrapList.tagName ? jsPlayer.wrapList.querySelectorAll(
                            'ol > li') : [];
                        var len = jsPlayer.playlist.length,
                            tmp, i;
                        if (len > 0) {
                            jsPlayer.wrap.classList.add('list-view');
                            for (i = jsPlayer.trackCount; i < len; i++) {
                                if (!jsPlayer.playlist[i].dataset) {
                                    jsPlayer.playlist[i].dataset = {};
                                }
                                tmp = jsPlayer.playlist[i].querySelector('a');
                                if (tmp.tagName && !jsPlayer.playlist[i].dataset.idx) {
                                    jsPlayer.playlist[i].dataset.idx = i;
                                    jsPlayer.trackCount++;
                                    jsPlayer.tracks.push({
                                        'file': tmp.href,
                                        'artist': tmp.dataset.artist ? 'by ' + decodeURIComponent(tmp
                                            .dataset.artist).replace(/^\s+|\s+$/g, '') : '&nbsp;',
                                        'name': decodeURIComponent(tmp.textContent || tmp.innerText)
                                            .replace(/^\s+|\s+$/g, '')
                                    });
                                }
                            }
                        }
                    };
                    jsPlayer.loadTrack = function jsPlayerLoadTrack(idx) {
                        var len = jsPlayer.playlist ? jsPlayer.playlist.length : 0,
                            i;
                        for (i = 0; i < len; i++) {
                            if (jsPlayer.playlist[i].classList) {
                                if (i == idx) {
                                    jsPlayer.playlist[i].classList.add('sel');


                                } else {
                                    jsPlayer.playlist[i].classList.remove('sel');
                                }
                            }
                        }
                        jsPlayer.titleText[vDoc.body.textContent ? 'textContent' : 'innerHTML'] = jsPlayer.tracks[
                            idx].name;
                        jsPlayer.artistText[vDoc.body.textContent ? 'textContent' : 'innerHTML'] = jsPlayer.tracks[
                            idx].artist;
                        jsPlayer.player.src = jsPlayer.tracks[idx].file;
                        jsPlayer.idx = idx;
                    };
                    jsPlayer.playTrack = function jsPlayerPlayTrack(idx) {
                        jsPlayer.loadTrack(idx);
                        jsPlayer.playClicked();
                    };
                    jsPlayer.listClicked = function jsPlayerListClicked(event) {
                        clearInterval(jsPlayer.seekInterval);
                        var parent = event.target.parentNode;
                        if (parent.parentNode.tagName.toLowerCase() === 'ol') {
                            event.preventDefault();
                            jsPlayer.playTrack(parent.dataset.idx);
                        }
                    };
                    jsPlayer.setDuration = function jsPlayerSetDuration() {
                        jsPlayer.durationTime[vDoc.body.textContent ? 'textContent' : 'innerHTML'] = jsPlayer
                            .formatTime(jsPlayer.player.duration);
                        jsPlayer.currentTime[vDoc.body.textContent ? 'textContent' : 'innerHTML'] = jsPlayer
                            .formatTime(jsPlayer.player.currentTime);
                        jsPlayer.seekBar.value = jsPlayer.player.currentTime / jsPlayer.player.duration;
                    };
                    jsPlayer.updateSeek = function jsPlayerUpdateSeek() {
                        if (jsPlayer.player.duration > -1) {
                            jsPlayer.seekBar.value = 100 * (jsPlayer.player.currentTime || 0) / jsPlayer.player
                                .duration;
                            jsPlayer.currentTime[vDoc.body.textContent ? 'textContent' : 'innerHTML'] = jsPlayer
                                .formatTime(jsPlayer.player.currentTime || 0);
                        }
                    };
                    jsPlayer.seekHeld = function jsPlayerSeekHeld() {
                        jsPlayer.seekBar.parentNode.classList.add('sel');
                        clearInterval(jsPlayer.seekInterval);
                        jsPlayer.player.pause();
                    };
                    jsPlayer.seekReleased = function jsPlayerSeekReleased() {
                        if (jsPlayer.player.duration > -1) {
                            jsPlayer.player.currentTime = jsPlayer.seekBar.value * jsPlayer.player.duration / 100;
                            jsPlayer.seekBar.parentNode.classList.remove('sel');
                            if (jsPlayer.playing) {
                                jsPlayer.player.play();
                                jsPlayer.seekInterval = setInterval(jsPlayer.updateSeek, 500);
                            } else {
                                jsPlayer.updateSeek();
                            }
                        }
                    };
                    jsPlayer.prevClicked = function jsPlayerPrevClicked(event) {
                        event.preventDefault();
                        if (jsPlayer.idx - 1 > -1) {
                            jsPlayer.idx--;
                            if (jsPlayer.playing) {
                                jsPlayer.playTrack(jsPlayer.idx);
                            } else {
                                jsPlayer.loadTrack(jsPlayer.idx);
                            }
                        } else {
                            jsPlayer.pauseClicked();
                            jsPlayer.idx = 0;
                            jsPlayer.loadTrack(jsPlayer.idx);
                        }
                    };
                    jsPlayer.nextClicked = function jsPlayerNextClicked(event) {
                        event.preventDefault();
                        if (jsPlayer.idx + 1 < jsPlayer.trackCount) {
                            jsPlayer.idx++;
                            if (jsPlayer.playing) {
                                jsPlayer.playTrack(jsPlayer.idx);
                            } else {
                                jsPlayer.loadTrack(jsPlayer.idx);
                            }
                        } else {
                            jsPlayer.pauseClicked();
                            jsPlayer.idx = 0;
                            jsPlayer.loadTrack(jsPlayer.idx);
                        }
                    };
                    jsPlayer.playlistButtonClicked = function jsPlayerPlaylistButtonClicked() {
                        jsPlayer.wrap.classList.toggle('show-list');
                        jsPlayer.playlistButton.style.backgroundImage = (jsPlayer.wrap.classList.contains(
                                'show-list') && jsPlayer.wrap.style.backgroundImage) ? jsPlayer.wrap.style
                            .backgroundImage : '';
                    };
                    jsPlayer.formatTime = function jsPlayerFormatTime(val) {
                        var h = 0,
                            m = 0,
                            s;
                        val = (parseInt(val, 10) || 0);
                        if (val > 60 * 60) {
                            h = parseInt(val / (60 * 60), 10);
                            val -= h * 60 * 60;
                        }
                        if (val > 60) {
                            m = parseInt(val / 60, 10);
                            val -= m * 60;
                        }
                        s = val;
                        val = (h > 0) ? h + ':' : '';
                        val += (m > 0) ? ((m < 10 && h > 0) ? '0' : '') + m + ':' : '0:';
                        val += ((s < 10) ? '0' : '') + s;
                        return val;
                    };
                    jsPlayer.init = function jsPlayerInit() {
                        if (!!vDoc.createElement('audio').canPlayType('audio/mpeg')) {
                            if (jsPlayer.wrapList.tagName && jsPlayer.wrapList.querySelectorAll('ol > li').length >
                                0) {
                                jsPlayer.loadTracklist();
                            } else if (jsPlayer.wrap.tagName && jsPlayer.wrap.dataset.url) {
                                jsPlayer.tracks = [{
                                    'file': jsPlayer.wrap.dataset.url,
                                    'artist': 'by-' + decodeURIComponent(jsPlayer.wrap.dataset.artist ||
                                        'unknown').replace(/^\s+|\s+$/g, ''),
                                    'name': decodeURIComponent(jsPlayer.wrap.dataset.title || '').replace(
                                        /^\s+|\s+$/g, '')
                                }];
                            }
                            if (jsPlayer.tracks.length > 0 && jsPlayer.player) {
                                jsPlayer.player.addEventListener('ended', jsPlayer.mediaEnded, true);
                                jsPlayer.player.addEventListener('loadeddata', jsPlayer.setDuration, true);
                                if (jsPlayer.wrapList.tagName) {
                                    jsPlayer.wrapList.addEventListener('click', jsPlayer.listClicked, true);
                                }
                                if (jsPlayer.bigPlayButton.tagName) {
                                    jsPlayer.bigPlayButton.addEventListener('click', jsPlayer.playClicked, true);
                                    if (jsPlayer.bigPauseButton.tagName) {
                                        jsPlayer.bigPauseButton.addEventListener('click', jsPlayer.pauseClicked,
                                            true);
                                    }
                                }
                                if (jsPlayer.playButton.tagName) {
                                    jsPlayer.playButton.addEventListener('click', jsPlayer.playClicked, true);
                                    if (jsPlayer.pauseButton.tagName) {
                                        jsPlayer.pauseButton.addEventListener('click', jsPlayer.pauseClicked, true);
                                    }
                                }
                                if (jsPlayer.prevButton.tagName) {
                                    jsPlayer.prevButton.addEventListener('click', jsPlayer.prevClicked, true);
                                }
                                if (jsPlayer.nextButton.tagName) {
                                    jsPlayer.nextButton.addEventListener('click', jsPlayer.nextClicked, true);
                                }
                                if (jsPlayer.playlistButton.tagName) {
                                    jsPlayer.playlistButton.addEventListener('click', jsPlayer
                                        .playlistButtonClicked, true);
                                }
                                if (jsPlayer.seekBar.tagName) {
                                    jsPlayer.seekBar.addEventListener('mousedown', jsPlayer.seekHeld, true);
                                    jsPlayer.seekBar.addEventListener('mouseup', jsPlayer.seekReleased, true);
                                }
                                jsPlayer.wrap.className += ' enabled';
                                jsPlayer.loadTrack(jsPlayer.idx);
                            }
                        }
                    };
                    jsPlayer.init();
                }
            })(window || {});

            (function(vWin) {
                var vDoc = vWin.document,
                    vPlayer = vDoc.querySelector('.player-wrap'),
                    vPlayerSize = vDoc.querySelector('.player-size');
                vDoc.querySelectorAll('[name="mode"]').forEach(function(item) {
                    item.addEventListener('click', function() {
                        vPlayer.classList.remove('track-view', 'cover-art', 'button-only');
                        vPlayer.classList.add(item.value);
                    });
                });
                vDoc.querySelectorAll('[name="theme"]').forEach(function(item) {
                    item.addEventListener('click', function() {
                        vPlayer.classList.remove('light', 'dark');
                        vPlayer.classList.add(item.value);
                    });
                });
                vDoc.querySelector('[name="width"]').addEventListener('change', function() {
                    vPlayer.style.width = this.value + '%';
                    vDoc.querySelector('[name="width"] + label')[vDoc.body.textContent ? 'textContent' :
                        'innerHTML'] = this.value + '%';
                });
                vPlayer.style.width = '50%';
            })(window || {});
        </script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 9,
                // slidesPerView: 'auto',
                spaceBetweenSlides: 30,
                centeredSlides: true,
                centeredSlidesBounds: true,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    2560: {
                        slidesPerView: 9,
                        spaceBetween: 20
                    },
                    1920: {
                        slidesPerView: 8,
                        spaceBetween: 20
                    },

                    1366: {
                        slidesPerView: 6,
                        spaceBetween: 30
                    },

                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    },
                    414: {
                        slidesPerView: 1,
                        spaceBetweenSlides: 40
                    },
                    375: {
                        slidesPerView: 1,
                        spaceBetweenSlides: 20
                    }


                }
            });
            imgGallery()
            swiper.on('slideChangeTransitionEnd', function() {
                imgGallery()
            });
            /***************    ------- home swiper slider js end -------   ***************/

            function imgGallery() {
                $('.swiper-slide-active').attr("data-bs-toggle", "modal")
                $('.swiper-slide-active').attr("data-bs-target", "#staticBackdrop")
                $(".swiper-slide-active").click(function() {
                    let allSlides = document.querySelectorAll('[data-swiper-slide-index]')
                    let currentSlide = $("[data-swiper-slide-index]").index(this);
                    //   console.log(currentSlide);
                    //   console.log(allSlides[currentSlide].childNodes[1].childNodes[1].src);
                    let img = $(this).find('img').attr('src');
                    //   console.log('allSlides.length ', allSlides.length);
                    document.getElementById('modal_img').setAttribute('src', img)
                    $('.swiper-slide-active').removeAttr("data-bs-toggle")
                    $('.swiper-slide-active').removeAttr("data-bs-target")
                    $("#next_btn_modal_slider").click(function() {
                        currentSlide++
                        if (currentSlide == allSlides.length) {
                            currentSlide = 0
                        }
                        let nextImg = allSlides[currentSlide].childNodes[1].childNodes[1].src
                        document.getElementById('modal_img').setAttribute('src', nextImg)
                    });
                    $("#prev_btn_modal_slider").click(function() {
                        if (currentSlide == 0) {
                            currentSlide = allSlides.length
                        }
                        currentSlide--
                        let nextImg = allSlides[currentSlide].childNodes[1].childNodes[1].src
                        document.getElementById('modal_img').setAttribute('src', nextImg)
                    });
                });
            }


            $("#songs-palylist li").click(function() {
                var path = "{{ asset('storage/uploads/audio/') }}/" + $(this).attr('data-img');
                $("#set_image").css("background-image", "url( " + path + "  )");

                var path2 = "{{ asset('storage/uploads/audio/') }}/" + $(this).attr('data-img');
                $("#set_title").css("background-image", "url( " + path2 + "  )");
                console.log('songs-palylist li');

            })

        </script>
        <!------------- multi-media card player end  ----------------->
    @endpush
