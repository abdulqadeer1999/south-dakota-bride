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
    .gold_star {
            color: #ffe100 !important;
            font-size: 14px;
        }
        .rricons

        .black_star {
            color: #2c2c2c !important;
            font-size: 14px;
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

</style>



    <div class="for-content-tabs">
        <div class="tab-content" id="v-pills-tabContent">

            @if (Session::has('message'))
                <p class="alert
        {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}
                </p>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-main-heading mt3 mb3">
                        <h1>Coaches List</h1>
                    </div>
                </div>
            </div>

            <!-- card started -->
            @php
            $rating_count = 0;
            $id_arr = [];
            $json = json_encode($id_arr);
            $rating_avg = [];
        @endphp

            <div class="row mt4">
                @foreach ($getCoaches as $key => $value)
                <div class="col-lg-3">
                    <a>
                        <div class="main-tabs-card">
                            <div class="tabs-card-content">
                                <div style="display: none;">
                                @php
                                array_push($id_arr,$value->id);
                                 $rating_count++
                                @endphp
                                @foreach ($value->get_coachlist_rating as $items)
                                {{ array_push($rating_avg,$items->rating_start)}}
                                @endforeach
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="card-profile-img">
                                        @if ($value->image != null)
                                        <img src="{{ asset('storage/uploads/cms/' . $value->image) }}" alt="image">
                                        @else
                                        <img src="{{ (!empty($Value->image))?
                                            asset('storage/uploads/cms/'.$Value->image):asset('storage/uploads/No-image.jpg') }}"
                                          >
                                        @endif
                                    </div>
                                </div>
                                <div class="tabs-card-name">
                                    <h1>{{$value->name}}</h1>
                                    <div class="tabs-card-name">

                                        {{-- @if (!empty($value->get_coachlist_rating_avg_rating_start))
                                        <div class="tabs-card-name">
                                            <div class="rricons">
                                                @php
                                                    $conditioned_stars = ceil($value->get_coachlist_rating_avg_rating_start) > 5 ? 5 : ceil($value->get_coachlist_rating_avg_rating_start);

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
                                        @endif --}}
                                    </div>
                                </div>
                                <div id="rating_show_on_profile_{{ $value->id }}"></div>

                                <div class="tabs-card-name">
                                    <p><span>{{$value->email}}</span></p>
                                    <p><span>{{$value->contact}}</span></p>
                                    <a href="{{ route('coach_profile',$value->id) }}" class="read-more-btn">Read More <i
                                            class="fa fa-angle-right icone-padding-left" aria-hidden="true"></i><i
                                            class="fa fa-angle-right icone-padding-left" aria-hidden="true"></i></a>
                                </div>
                                <br>
                            </div>

                        </div>
                    </a>
                </div>
                @endforeach

            </div>
            <br>
            {{ $getCoaches->links() }}



        </div>

    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function () {

        var rating_item = '{{ $rating_count }}';
        var json_arr = {!! json_encode($id_arr) !!};
        var get_ratings = {!! json_encode($rating_avg) !!};
        // alert(json_arr)
        // return false;

        for(var x = 0; x < rating_item; x++){


            $('#rating_show_on_profile_'+json_arr[x]).jsRapStar({
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
</script>
@endpush

