@extends('user_dashboard.layouts.user-master')
@section('content')
<style>

   .main-tabs-card {
            /* box-shadow: 0 0px 8px #ababab4f; */
            padding: 1rem;
            border-radius: 10px;
            background: #c2c5cd;
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
            font-size: 20px;
            margin-top: 12px;
            margin-bottom: 6px;
            font-family: PlayfairDisplay-Bold;
            color: rgb(30, 32, 37);
        }

        .tabs-card-name span {
            text-align: center;
            font-size: 16px;
            font-family: ProximaNova-Regular;
            font-weight: 600;
            color: rgb(30, 32, 37);


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
            object-position: center;
            object-fit: cover;
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

        .gold_star {
            color: #ffe100 !important;
            font-size: 14px;
        }
        .rricons

        .black_star {
            color: #2c2c2c !important;
            font-size: 14px;
        }

        .tabs-card-name-btn {
            display: flex;
            justify-content: space-between;
        }

        .tabs-card-name-btn button {
            border: none;
            border-radius: 5px;
            background: #2c2c2c;
            color: #ffffff;
            font-size: 14px;
            width: 90%;
            font-family: ProximaNova-Regular;

        }
        .tabs-inner-button{
            width: 100%;
        margin-top: 1rem;
        }

        .tabs-card-name-btn button:hover {
            border: 2px solid #000;
            border-radius: 5px;
            background: #c2c5cd;
            color: #000;
            font-family: ProximaNova-Regular;
            font-weight: 600;
        }

        @media only screen and (max-width: 1024px) {
            .tabs-card-name i {
                font-size: 10px;
            }

            .main-tabs-card {
                padding: 1rem 4px;
            }

            .tabs-card-title-content p {
                font-size: 13px;
            }

            .card-profile-img {
                width: 80px;
                height: 80px;
            }

        }

        .cstm-modal .modal-dialog {
            max-width: 500px !important;
            height: auto !important;
        }

        .cstm-modal .modal-dialog .modal-content {
            background-color: #fff !important;
            border: none !important;
        }

        .msg-textarea textarea {
            width: 100%;
            min-height: 300px;
            max-height: 300px;
            outline: none;
            border: 2px solid #000;
            border-radius: 5px;
            padding: 1rem 10px;
            font-family: ProximaNova-Regular;
        }

        .titlefont-style {
            font-family: PlayfairDisplay-Bold;
            font-size: 30px;
            text-align: center;
        }

        .cstm-modal .modal-header {
            padding-bottom: 0px;
        }

        .user-information select option {
            width: 100%;
        }
        .for-complete-cstm-btn{
            background-color: #086db0 !important;
            color: #fff;
        }
    @media only screen and (max-width: 1024px) {

        .for-btns-width {
            width: 28%;
        }

        .user-information {
            width: 100%;
        }
    }

    @media only screen and (max-width: 414px) {
        .profile-user-inner {
            padding: 2rem 6px;
        }

        .for-btns-width {
            width: 60%;
        }
    }

    #pageloader {
        background:rgb(129 129 129 / 17%);
        display: none;
        height: 100%;
        position: fixed;
        width: 100%;
        z-index: 9999;
        top: 0;
        left: 0;
    }

    #pageloader img {
        left: 50%;
        /* margin-left: -32px;
                margin-top: -32px; */
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        filter: grayscale(1);
    }
    #mybox{

display: none;
 }
</style>
      <div id="pageloader">
        <img src="{{asset('frontend/assets/1x/Preloader.gif') }}" alt="processing..." />
    </div>

    <div class="for-content-tabs">
        <div class="tab-content" id="v-pills-tabContent">

            @if (Session::has('message'))
                <p class="alert
        {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}
                </p>
            @endif

            <div class="row">
                <div class="col-lg-9">
                    <div class="tabs-main-heading mt3 mb3">
                        <h1>Coach Students List</h1>
                    </div>
                </div>
            </div>

            <div class="row mt4">

            @php
            $rating_count = 0;
            $id_arr = [];
            $json = json_encode($id_arr);
            $rating_avg = [];
            @endphp
                @foreach ($getStudents as $key => $value)
                <div class="col-lg-4">
                        <div class="main-tabs-card">
                            <div class="tabs-card-content">
                                <div class="tabs-card-name">
                                <div id="mybox">
                                @php
                                array_push($id_arr,$value->id);
                                 $rating_count++
                                @endphp
                                @foreach ($value->get_rating_by_coach_forStudentList as $items)
                                {{ array_push($rating_avg,$items->rating_start)}}
                                @endforeach
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="card-profile-img">
                                        @if ($value->get_bookedStudent->image ?? '')
                                        <img src="{{ asset('storage/uploads/cms/' . $value->get_bookedStudent->image) }}" alt="image">
                                        @else
                                        <img src="{{ (!empty($Value->get_bookedStudent->image))?
                                            asset('storage/uploads/cms/'.$Value->get_bookedStudent->image ?? ''):asset('storage/uploads/No-image.jpg') }}"
                                          >
                                        @endif
                                    </div>
                                </div>

                                <div class="tabs-card-name">
                                    <h1>{{$value->get_bookedStudent->name ?? ''}}</h1>
                                    {{-- <div class="tabs-card-name">

                                        @if (!empty($value->get_rating_by_coach_for_student_list_avg_rating_start ?? ''))
                                        <div class="tabs-card-name">
                                            <div class="rricons">
                                                @php
                                                    $conditioned_stars = ceil($value->get_rating_by_coach_for_student_list_avg_rating_start) > 5 ? 5 : ceil($value->get_rating_by_coach_for_student_list_avg_rating_start);

                                                    $black_star = 5 - $conditioned_stars;

                                                    // dd($value->get_Rating->rating_start ?? '');

                                                @endphp

                                                @for ($x = 1; $x <= $conditioned_stars; $x++)
                                                    <i class="fa fa-star gold_star"></i>
                                                @endfor

                                                @for ($i = 0; $i < $black_star; $i++)
                                                    <i class="fa fa-star black_star"></i>
                                                @endfor
                                            </div>
                                        </div>
                                    @else
                                        <div class="tabs-card-name rricons">
                                            <i class="fa fa-star black_star"></i>
                                            <i class="fa fa-star black_star"></i>
                                            <i class="fa fa-star black_star"></i>
                                            <i class="fa fa-star black_star"></i>
                                            <i class="fa fa-star black_star"></i>
                                        </div>
                                    @endif
                                    </div> --}}
                                </div>
                            </div>
                            <div id="divMain">
                                <div id="rating_show_on_profile_coach{{ $value->id }}"></div>
                            </div>
                                <div class="tabs-card-name">
                                    <p><span>{{$value->get_bookedStudent->email ?? ''}}</span></p>
                                </div>
                                    <div class="tabs-card-name">
                                    <p><span>{{$value->get_bookedStudent->contact ?? ''}}</span></p>
                                </div>
                                <div class="tabs-card-name-btn">
                                  <div class="tabs-inner-button">
                                    <button class="btn btn-default" data-bs-toggle="modal"
                                                data-bs-target="#ReScheduledModalBtn">ReScheduled</button>
                                </div>
                                 {{-- <div class="tabs-inner-button">
                                    <button class="btn btn-default" data-bs-toggle="modal" data-bs-target="#CompleteModalBtn"
                                    onclick="get_user_id({{ $value->get_bookedStudent->id }},{{ $value->id }})">Complete</button>
                                </div> --}}
                                @if ($value->get_rating_by_coach_for_student_list_avg_rating_start)
                                <div class="tabs-inner-button">
                                    <button class="btn for-complete-cstm-btn" data-bs-toggle="modal" data-bs-target="#CompleteModalBtn"  onclick="get_user_id({{ $value->get_bookedStudent->id }},{{ $value->id }})" disabled>Completed</button>
                                </div>
                                @else
                                <div class="tabs-inner-button">
                                    <button class="btn btn-default" data-bs-toggle="modal" data-bs-target="#CompleteModalBtn"  onclick="get_user_id({{ $value->get_bookedStudent->id }},{{ $value->id }})">Complete</button>
                                </div>
                                @endif
                            </div>
                                <br>
                            </div>
                        </div>
                </div>
                @endforeach

            </div>

            <br>
                {{ $getStudents->links() }}
               {{-- this modal is for ReScheduledModal --}}
               <div class="cstm-modal">
                <div class="modal fade" id="ReScheduledModalBtn" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title titlefont-style" id="exampleModalLabel">Message</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="msg-textarea">
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token" id="_token" />
                                    <form id="ReScheduledModal">
                                        {{ csrf_field() }}
                                        <textarea class="form-control" type="text" placeholder="message..." name="message" id="message" required></textarea>
                                        <br>
                                        <div class="addon">
                                            <button class="btn btn-primary">send
                                            </button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                    {{-- <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              {{-- this modal is for Complete Modal --}}
              <div class="cstm-modal">
                <div class="modal fade" id="CompleteModalBtn" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title titlefont-style" id="exampleModalLabel">Rating</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" value="{{ csrf_token() }}" name="_token" id="_token" />
                                {{-- <form id="CompleteModal">
                                    {{ csrf_field() }} --}}
                                    <form action="{{ route('StudentRateing',$value->get_bookedStudent->id ?? '') }}"  enctype="multipart/form-data" method="post">

                                        @csrf
                                        <input type="hidden" name="card_id" id="cardId" />
                                        <input type="hidden" name="user_id" id="UserId" />
                                        <div id="divMain">
                                            <div id="modalRating"></div>
                                            <div id="starsScore"></div>
                                        </div>
                                    {{-- <div class="rricons rating_star_main">
                                        <i class="fa fa-star rating_star" id="star_1"></i>
                                        <i class="fa fa-star rating_star" id="star_2"></i>
                                        <i class="fa fa-star rating_star" id="star_3"></i>
                                        <i class="fa fa-star rating_star" id="star_4"></i>
                                        <i class="fa fa-star rating_star" id="star_5"></i>
                                    </div> --}}

                                    <input type="hidden" name="rating_start" id="CoachratingStart">
                                    <br>
                                    <div class="addon">
                                        <button class="btn btn-primary">send
                                        </button>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


@push('scripts')
<script>
    $(document).ready(function () {
        $('#modalRating').jsRapStar({
            step: false,
            length: 5,
            starHeight: 64,
            colorFront: '#575757',
            onClick: function (score) {
                this.StarF.css({ color: 'yellow' });
                $('#starsScore').text(score);
                $('#CoachratingStart').val(score);
            },
            onMousemove: function (score) {
                $(this).attr('title', 'Rate ' + score);
            }
        });
    });

    $(document).ready(function () {

        var rating_item = '{{ $rating_count }}';
        var json_arr = {!! json_encode($id_arr) !!};
        var get_ratings = {!! json_encode($rating_avg) !!};
        // alert(json_arr)
        // return false;

        for(var x = 0; x < rating_item; x++){


            $('#rating_show_on_profile_coach'+json_arr[x]).jsRapStar({
            value: get_ratings[x],
            colorFront: 'gold',
            enabled: false,
            step: false,
            length: 5,
            onClick: false,
            onMousemove: null


        });
        }
    });
</script>
    <script type="text/javascript">
     function get_user_id(user_id, card_id){

        $("#UserId").val(user_id);
        $("#cardId").val(card_id);


    }
        console.log(00)
        if (window.innerWidth < 791) {
            $('.hustHead.bbio label').text('Bio/Extracurriculars/ Reason for Transferring')
        } else {
            $('.hustHead.bbio label').text('Bio/Extracurriculars/Reason for Transferring')
        }

        setTimeout(() => {
            var po = document.getElementById('successBtn')
            if (po != null) {
                po.style.display = 'none'
            }
        }, 5000)

        const CompleteModal = document.getElementById('CompleteModal');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const DisputeModal = document.getElementById('DisputeModal');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        const ReScheduledModal = document.getElementById('ReScheduledModal');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        toastr.options = {
            "positionClass": "toast-top-right",
            "textcolor": "white",
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
     ReScheduledModal.addEventListener("submit", function(e) {
            e.preventDefault();
            console.log("success");
            $("#pageloader").fadeIn();
            let formData = new FormData(ReScheduledModal);
            let url = "{{ route('CoachReScheduled', $value->id ?? '') }}";
            console.log(url);
            $.ajax({
                type: "POST",
                url: url,
                contentType: false,
                processData: false,
                data: formData,
                success: function(data) {
                    console.log(data);
                    $("#ReScheduledModalBtn").modal('hide');
                    toastr.success('Your msg has been send', 'Success');
                    $("#message").val('');
                    $(".closeBtn").trigger('click')
                    location.reload();
                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });

        });


        $(".rating_star").click(function() {
            const nodeList = document.querySelectorAll(".rating_star");

            for (let i = 0; i < nodeList.length; i++) {
                nodeList[i].style.color = "black";
            }
            let index_star = 1 + $(this).index();

            $("#ratingStart").val(index_star);
            for (let i = 0; i < index_star; i++) {
                nodeList[i].style.color = "#ffce00";
            }

        });
        CompleteModal.addEventListener("submit", function(e) {
            e.preventDefault();
            console.log("success");
            $("#pageloader").fadeIn();
            let formData = new FormData(CompleteModal);
            let url = "{{ route('Rateing.send', $value->id ?? '') }}";
            console.log(url);
            $.ajax({
                type: "POST",
                url: url,
                contentType: false,
                processData: false,
                data: formData,
                success: function(data) {
                    console.log(data);
                    $("#CompleteModalBtn").modal('hide');
                    toastr.success('Your rateing has been sent', 'Success');
                    $("#ratingStart").val('');
                    $(".closeBtn").trigger('click')
                    location.reload();

                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });

        });
    </script>
@endpush
{{-- @push('scripts')
<script>

    $("#regiterForm").submit(function() {

    });
    </script>
@endpush --}}
