@extends('user_dashboard.layouts.user-master')
@section('content')
    {{-- <?php
    $data['User_Signup'] = Session::get('User_Signup');
    dd($data);
    ?> --}}
    <style>
          .main-tabs-card {
        /* box-shadow: 0 0px 8px #ababab4f; */
        padding: 1rem;
        border-radius: 10px;
        background: #c2c5cd;
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
        .user-information {
            display: flex;
            border-bottom: 2px solid #000;
            width: 80%;
            padding-bottom: 6px;
            margin-top: 3rem;
            align-items: baseline;

        }

        /* .user-information span {
            font-family: ProximaNova-Regular;
            color: #2c2c2c;
            font-size: 18px;
        } */

        .user-information select {
            border: none;
            width: 70%;
            font-family: ProximaNova-Regular;
            outline: none;
            color: #2c2c2c;
            font-size: 18px;
        }
        .user-information input {
            border: none;
            width: 70%;
            font-family: ProximaNova-Regular;
            outline: none;
            color: #2c2c2c;
            font-size: 18px;
            outline: none;
        }

        .user-information label {
            width: auto;
            margin-right: 1rem;
            font-family: PlayfairDisplay-Bold;
        }
        .user-rating {
            width: 100%;
            text-align: start;
            font-family: PlayfairDisplay-Bold;
        }

    </style>

    <div class="for-content-tabs">
        <div class="tab-content" id="v-pills-tabContent">

            @if (Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                    {{ Session::get('message') }}</p>
            @endif
            {{-- {{ route('User_Profile_update', $edit_data->id) }} --}}
            <form action="{{ route('User_Profile_update', $edit_data->id ?? '') }}" enctype="multipart/form-data" method="post">
                @csrf

                    <!-- card started -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="tabs-main-heading mt3 mb3">
                            <h1>
                                @if (Auth::user()->type == 2)
                                    Student
                                @elseif (Auth::user()->type == 3)
                                    Coach
                                @elseif (Auth::user()->type == 4)
                                    Evaluator
                                @endif
                                -Dashboard
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        @if ($edit_data->image ?? '')
                            <img src="{{ asset('storage/uploads/cms/' . $edit_data->image ?? '') }}" alt="image"
                                style="width:100px; height:100px;">
                        @else
                            <img src="{{ !empty($edit_data->image ?? '')
                                ? asset('storage/uploads/cms/' . $edit_data->image ?? '')
                                : asset('storage/uploads/No-image.jpg') }}"
                                style="width:100px; height:100px;">
                        @endif
                    </div>
                    <div class="col-lg-6">
                    </div>

                    <div class="col-lg-2">

                            @if (Auth::user()->type == 2)
                            <div id="rating_show_on_Student_profile"></div>
                            <span>({{ isset($edit_data->get_user_rating[0]['rating_start']) == true ? number_format($edit_data->get_user_rating[0]['rating_start'] ,1)  : '0.0' }})</span>

                            @elseif (Auth::user()->type == 3)
                            <div id="rating_show_on_profile"></div>
                            <span>({{ isset($edit_data->coach_rating[0]['rating_start']) == true ? number_format($edit_data->coach_rating[0]['rating_start'] ,1)  : '0.0' }})</span>

                            @elseif (Auth::user()->type == 4)
                            <div id="rating_show_on_evaluator_profile"></div>
                            <span>({{ isset($edit_data->get__evaluator_profile_rating[0]['rating_start']) == true ? number_format($edit_data->get__evaluator_profile_rating[0]['rating_start'] ,1)  : '0.0' }})</span>
                            @endif

                     </div>

                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-6">
                        <label class="col-sm-3 col-form-label">Upload Profile</label>
                        <div class="col-sm-9">
                            <input name="image" id="image" class="form-control" type="file">
                        </div>
                    </div>
                    <div class="tabs-card-name user-rating">

                        <div class="col-lg-8">
                    </div>
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>First Name:</label>
                            <input type="text" name="name" id="" value="{{ $edit_data->name  ?? ''}}" placeholder="First Name">
                        </div>
                        @error('name')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('name') }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                    </div>

                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>Last Name:</label>
                            <input type="text" name="last_name" value="{{ $edit_data->last_name ?? '' }}" id=""
                            placeholder="last Name">
                        </div>
                        @error('last_name')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('last_name') }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                    </div>

                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>Email:</label>
                            <input type="email" readonly name="email" value="{{ $edit_data->email ?? '' }}"
                                placeholder="Email">
                        </div>


                        @error('email')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('email') }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>Address:</label>
                            <input type="text" name="address" value="{{ $edit_data->address ?? '' }}" placeholder="Address">
                        </div>
                        @error('address')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('address') }}
                            </p>
                        @enderror
                    </div>
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>Contact:</label>
                            <input type="tel" name="contact" value="{{ $edit_data->contact ?? '' }}" placeholder="Contact"
                            autocomplete="tel" maxlength="14" pattern="[(][0-9]{3}[)] [0-9]{3}-[0-9]{4}" id="phone12">
                        </div>
                        @error('contact')
                            <p class="help-block" style="color: red">
                                {{ $errors->first('contact') }}
                            </p>
                        @enderror
                    </div>

                    <div class="col-lg-12 mt8 for-removed-margin">
                        <div class="d-flex justify-content-end mt2">
                            <a href="checkout.html" class="black-btn-width"><button class="black-btn"
                                    onClick="window.location.reload();">Update</button></a>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
@endsection
@push('scripts')
<script>
        $(document).ready(function () {

            var rating_item = '{{ $edit_data->coach_rating[0]['rating_start'] ?? 0}}';
                $('#rating_show_on_profile').jsRapStar({
                value: rating_item,
                colorFront: 'gold',
                enabled: false,
                step: false,
                length: 5,
                onClick: false,
                onMousemove: null


            });

            });



</script>
<script>
    $(document).ready(function () {

        var rating_item = '{{ $edit_data->get_user_rating[0]['rating_start'] ?? 0}}';

            $('#rating_show_on_Student_profile').jsRapStar({
            value: rating_item,
            colorFront: 'gold',
            enabled: false,
            step: false,
            length: 5,
            onClick: false,
            onMousemove: null


        });

        });


</script>
<script>

    $(document).ready(function () {

    var rating_item = '{{ $edit_data->get__evaluator_profile_rating[0]['rating_start'] ?? 0}}';

        $('#rating_show_on_evaluator_profile').jsRapStar({
        value: rating_item,
        colorFront: 'gold',
        enabled: false,
        step: false,
        length: 5,
        onClick: false,
        onMousemove: null


    });

    });

</script>

    <script type="text/javascript">
        document.getElementById('phone12').addEventListener('input', function(e) {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
            e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
        });

    </script>
@endpush
