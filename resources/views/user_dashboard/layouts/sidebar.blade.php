<style>
    .main-tabs-card {
        box-shadow: 0 0px 8px #ababab4f;
        padding: 1rem;
        border-radius: 10px;
    }
    img {
        width: 100%;
        height: 100%;
        object-position: center;
        object-fit: cover;
    }

    .cstm-ul-li ul {
        list-style: none;
    }

    .tabs-card-name label {
        width: auto;
    }

    .main-tabs-card:hover {
        transform: scale(1.05);
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
    }

    .tabs-card-name {
        text-align: center;
    }

    .tabs-card-name h1 {
        text-align: center;
        font-size: 18px;
        margin-top: 12px;
        margin-bottom: 6px;
        font-family: PlayfairDisplay-Bold;
    }

    .tabs-card-name span {
        text-align: center;
        font-size: 14px;
        font-family: ProximaNova-Regular;
        font-weight: 600;


    }

    .card-profile-img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2);
        border-radius: 50%;
    }

    img {
        width: 100%;
        height: 100%;
    }

    .tabs-card-content h2 {
        font-size: 18px;
        margin-top: 2rem;
        font-family: PlayfairDisplay-Regular;
    }

    .tabs-card-title-content p {
        font-size: 14px;
        margin-top: 1rem;
        font-family: PlayfairDisplay-Regular;
    }

    .read-more-btn {
        text-decoration: none;
        font-family: PlayfairDisplay-Regular;
    }

    .tabs-card-name i {
        color: #ffe100;
        font-size: 14px;
    }

    .for-icon-btn i {
        padding-left: 1rem;
    }

    .for-icon-btn:focus i {
        transform: rotate(180deg);
        padding-right: 1rem;
    }

    .sidebar-link.active {
        display: block !important;
    }
    .for-cstm-tabs-button{
text-decoration: none;
    }

    .sidebar-submenu.active {
        display: block !important;
    }
    .sidebar-submenu{
        list-style: none;
    }

    /* .sidebar-submenu {
        display: block !important;
    } */

    @media only screen and (max-width: 1024px) {
        .tabs-card-name i {
            color: #ffe100;
            font-size: 10px;
        }

        .main-tabs-card {
            padding: 1rem 4px;
        }

        .tabs-card-title-content p {
            font-size: 13px;
        }

        .main-tabs-card .card-profile-img {
            width: 80px;
            height: 80px;
        }


    }

    @media only screen and (max-width: 820px) {
        .main-tabs-card {
            width: 60%;
            margin: 1rem auto;

        }

        .tabs-inner-button {
            width: 90% !important;
            margin: auto;
        }

        .sidenav {
            z-index: 4;

        }

        .for-cstm-height {
            height: 1000px;
            overflow-y: scroll;
        }

    }

    @media only screen and (max-width: 414px) {
        .main-tabs-card {
            width: 90%;
            margin: 1rem auto;
        }

    }

</style>
<div class="tabs-side-bar-width">
    <div class="tabs-side-bar">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">


            <div class="tabs-card-content">
                <div class="d-flex justify-content-center card-profile-img" style="margin:auto;">
                    <img class="b-r-10"
                        src="{{ !empty(Auth::user()->image)
                            ? asset('storage/uploads/cms/' . Auth::user()->image)
                            : asset('storage/uploads/No-image.jpg') }}"
                        alt="">
                </div>
            </div>
            <ul class="tabs-ul">
                <li class="mt1">
                    <a class="for-cstm-tabs-button" target="_blank" href="{{ route('home') }}">Website Home</a>
                </li>
                <li class="mt1">
                    <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'User_Profile_edit' ? 'active' : '' }}"
                        href="{{ route('User_Profile_edit') }}">Profile</a>

                    {{-- <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'User_Profile_edit' ? 'active' : '' }}"
                    href="{{ route('User_Profile_edit', Auth::user()->id) }}">Profile</a> --}}
                </li>
                @if (Auth::user()->type == 2)
                    <li class="mt1">
                        {{-- <a class="for-cstm-tabs-button for-icon-btn" data-bs-toggle="collapse" href="#collapseExample"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            Booking List<i class="fa fa-caret-down"></i>
                        </a> --}}
                        {{-- <div class="collapse show" id="collapseExample">
                            <div class="cstm-ul-li">
                                <ul>
                                    <li>
                                        <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'CoachBooking' ? 'active' : '' }}"
                                            href="{{ route('CoachBooking', Auth::user()->id) }}">Coaches List</a>
                                    </li>
                                    <li>
                                        <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'evaluatorsBooking_list' ? 'active' : '' }}"
                                            href="{{ route('evaluatorsBooking_list', Auth::user()->id) }}">Evaluators
                                            List</a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </li>
                    <li class="sidebar-list">
                        {{-- <a class="sidebar-link sidebar-title {{ request()->route()->getPrefix() == '/audio'? 'active': '' }}"
                            href="#"><i data-feather="music"></i><span>{{ trans('Audio Management') }}</span>
                            <div class="according-menu"><i
                                    class="fa fa-angle-{{ request()->route()->getPrefix() == '/audio'? 'down': 'right' }}"></i>
                            </div>
                        </a> --}}
                        <a class="for-cstm-tabs-button for-icon-btn sidebar-link">
                            Booking List<i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="sidebar-submenu"
                            style="display: {{ request()->route()->getPrefix() == '/audio'? 'block': 'none;' }};">
                            <li>
                                <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'CoachBooking' ? 'active' : '' }}"
                                    href="{{ route('CoachBooking', Auth::user()->id) }}">Coaches List</a>
                            </li>
                            <li>
                                <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'evaluatorsBooking_list' ? 'active' : '' }}"
                                    href="{{ route('evaluatorsBooking_list', Auth::user()->id) }}">Evaluators
                                    List</a>
                            </li>

                        </ul>
                    </li>
                @endif

                @if (Auth::user()->type == 3)
                    <li class="mt1">
                        <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'appoinment' ? 'active' : '' }}"
                            href="{{ route('appoinment') }}">Appoinment</a>
                    </li>
                    <li class="mt1">
                        <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'Dispute' ? 'active' : '' }}"
                            href="{{ route('Dispute') }}">Dispute</a>
                    </li>
                @endif
                @if (Auth::user()->type != 2)
                    <li class="mt1">
                        <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'studentslist' ? 'active' : '' }}"
                            href="{{ route('studentslist') }}">Booking List</a>
                    </li>
                @endif
                @if (Auth::user()->type == 4)
                    <li class="mt1">
                        <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'assesment' ? 'active' : '' }}"
                            href="{{ route('assesment') }}">Assesment</a>
                    </li>
                @endif
                @if (Auth::user()->type == 2)
                    <li class="mt1">
                        <a class="for-cstm-tabs-button" href="{{ route('coaches') }}">Coaches</a>
                    </li>
                    <li class="mt1">
                        <a class="for-cstm-tabs-button" href="{{ route('Evaluators') }}">Evaluators</a>
                    </li>
                    <li class="mt1">
                        <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'assesmentStudent' ? 'active' : '' }}"
                            href="{{ route('assesmentStudent') }}">Assesment</a>
                    </li>
                @endif
                <li class="mt1">
                    <a class="for-cstm-tabs-button" {{ Route::currentRouteName() == 'ChatBox' ? 'active' : '' }}"
                        href="{{ route('ChatBox', $user = Auth::user()->id) }}">Chat </a>
                    {{-- <span
                            style="color: #07bd1c"><?php $countChat = App\Models\Message::where('reciever_id', $user)
                                ->where('status', 1)
                                ->count(); ?>({{ $countChat }})</span> --}}
                </li>
                <li class="mt1">
                    <a class="for-cstm-tabs-button" href="{{ route('User_Password_edit') }}">Change
                        Password</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <div class="for-cstm-height">
        <button href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</button>
        <div class="main-tabs-card">
            <div class="tabs-card-content">
                <div class="d-flex justify-content-center">
                    <img class="b-r-10"
                        src="{{ !empty(Auth::user()->image)
                            ? asset('storage/uploads/cms/' . Auth::user()->image)
                            : asset('storage/uploads/No-image.jpg') }}"
                        style="width:100px; height:100px;" alt="">

                </div>
            </div>
        </div>
        <a class="for-cstm-tabs-button" target="_blank" href="{{ route('home') }}">Website Home</a>
        <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'User_Profile_edit' ? 'active' : '' }}"
            href="{{ route('User_Profile_edit') }}">Profile</a>
            
        @if (Auth::user()->type == 2)
            {{-- <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'CoachBooking' ? 'active' : '' }}"
                href="{{ route('CoachBooking', Auth::user()->id) }}">Booking List</a> --}}
                <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'CoachBooking' ? 'active' : '' }}"
                href="{{ route('CoachBooking', Auth::user()->id) }}">Coaches List</a>
                <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'evaluatorsBooking_list' ? 'active' : '' }}"
                href="{{ route('evaluatorsBooking_list', Auth::user()->id) }}">Evaluators
                List</a>
        @endif
        @if (Auth::user()->type == 3)
            <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'appoinment' ? 'active' : '' }}"
                href="{{ route('appoinment') }}">Appoinment</a>
            <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'Dispute' ? 'active' : '' }}"
                href="{{ route('Dispute') }}">Dispute</a>
        @endif
        @if (Auth::user()->type != 2)
            <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'studentslist' ? 'active' : '' }}"
                href="{{ route('studentslist') }}">Booking list</a>
        @endif
        @if (Auth::user()->type == 4)
            <a class="for-cstm-tabs-button {{ Route::currentRouteName() == 'assesment' ? 'active' : '' }}"
                href="{{ route('assesment') }}">Assesment</a>
        @endif
        @if (Auth::user()->type == 2)
            <a class="for-cstm-tabs-button" href="{{ route('coaches') }}">Coaches</a>
            <a class="for-cstm-tabs-button" href="{{ route('Evaluators') }}">Evaluators</a>
        @endif
        <a class="for-cstm-tabs-button" {{ Route::currentRouteName() == 'ChatBox' ? 'active' : '' }}"
            href="{{ route('ChatBox', Auth::user()->id) }}">Chat</a>
        {{-- <span
            style="color: #07bd1c"><?php $countChat = App\Models\Message::where('reciever_id', $user)
                ->where('status', 1)
                ->count(); ?>({{ $countChat }})</span> --}}
        <a class="for-cstm-tabs-button" href="{{ route('User_Password_edit') }}">Change
            Password</a>

        <a class="link_header" href="{{ route('FrontendUser_logout') }}">
            <button class="log-out-button">
                <i class="fa fa-sign-out" aria-hidden="true"></i>LOG OUT
            </button></a>
    </div>
</div>
<span class="sidenav-open-btn" onclick="openNav()">&#9776;</span>


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "260px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    // $('.sidebar-link').click(function(e) {
    //     if ($("this").hasClass("active")) {
    //         $(this).removeClass("active");
    //     } else {
    //         $(this).addClass("active");
    //         $(".sidebar-submenu ").css("display:block;");
    //     }
    // });
    $('.sidebar-link').click(function() {
        $('.sidebar-submenu').toggleClass('active');
    });
    if (window.location.href === "{{ route('CoachBooking') }}") {
        $('.sidebar-submenu').toggleClass('active');
    }
    if (window.location.href === "{{ route('evaluatorsBooking_list') }}") {
        $('.sidebar-submenu').toggleClass('active');
    }
    // window.location.href === "http://localhost/Amea_Today/CoachBooking?3"
    // if (window.location.href === "http://localhost/Amea_Today/CoachBooking?3") {
    //     $('.sidebar-submenu').toggleClass('active');
    // }
    // if (window.location.href === "http://localhost/Amea_Today/evaluatorsBooking_list?3") {
    //     $('.sidebar-submenu').toggleClass('active');
    // }


    // Get the container element
    var btnContainer = document.getElementById("active-nav");

    // Get all buttons with class="btn" inside the container
    var btns = btnContainer.getElementsByClassName("for-cstm-tabs-button");

    // Loop through the buttons and add the active class to the current/clicked button
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

    // function myFunction() {
    //     var element = document.getElementById("fa-caret-down");
    //     element.classList.toggle("fa-caret-up");
    // }
    // $(document).ready(function() {
    //     $(".for-icon-btn").click(function() {
    //         $(".fa-caret-down").toggleClass(".fa-caret-down");
    //     });
    // });
</script>
