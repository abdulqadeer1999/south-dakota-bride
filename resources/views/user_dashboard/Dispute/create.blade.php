@extends('user_dashboard.layouts.user-master')
@section('content')
    <style>
        .main-tabs-card {
            box-shadow: 0 0px 8px #ababab4f;
            padding: 1rem;
            border-radius: 10px;
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

            .card-profile-img {
                width: 80px;
                height: 80px;
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
                        <h1>Appoinment create</h1>
                    </div>
                </div>
                {{-- <div class="col-lg-3">
                    <div class="tabs-main-heading mt3 mb3">
                        <a href="{{ route('Appoinment.create') }}" type="button" class="btn btn-primary">Add</a>
                    </div>
                </div> --}}

                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                    {{Session::get('message') }}</p>
                @endif

                <form action="{{ route('Appoinment.store') }}" enctype="multipart/form-data"
                    method="post">
                    @csrf
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="login-content2 placeholder-white">
                                 <label>Title:</label>
                                <input type="text" name="title" id="" value=""
                                    placeholder="title">
                            </div>
                            @error('title')
                                <p class="help-block" style="color: red">
                                    {{ $errors->first('title') }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                        </div>

                        <div class="col-lg-6">
                            <div class="login-content2 placeholder-white">
                                 <label>Appoinment Date:</label>
                                <input type="date" name="appoinment_date" value="" id=""
                                    placeholder="appoinment date">
                            </div>
                            @error('appoinment_date')
                                <p class="help-block" style="color: red">
                                    {{ $errors->first('appoinment_date') }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                        </div>
                        <div class="col-lg-6">
                            <div class="login-content2 placeholder-white">
                                 <label>Appoinment Time:</label>
                                <input type="text" name="appoinment_time" value="" id=""
                                    placeholder="00:00 AM to 00:00 PM">
                            </div>
                            @error('appoinment_time')
                                <p class="help-block" style="color: red">
                                    {{ $errors->first('appoinment_time') }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                        </div>
                        <div class="col-lg-6">
                            <div class="login-content2 placeholder-white">
                                 <label>Description:</label>
                                <input type="text" name="description" value=""
                                    placeholder="description">
                            </div>
                            @error('description')
                                <p class="help-block" style="color: red">
                                    {{ $errors->first('description') }}
                                </p>
                            @enderror
                        </div>
                        <div class="col-lg-12 mt8 for-removed-margin">
                            <div class="d-flex justify-content-end mt2">
                              <a><button type="submit" class="black-btn">create</button></a>
                            </div>
                        </div>
                    </div>
                </form>


            </div>


        </div>

    </div>
@endsection
