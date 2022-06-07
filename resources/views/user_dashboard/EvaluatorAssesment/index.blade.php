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
                <div class="col-lg-9">
                    <div class="tabs-main-heading mt3 mb3">
                        <h1>Assesment List</h1>
                    </div>
                </div>
                {{-- <div class="col-lg-3">
                    <div class="tabs-main-heading mt3 mb3">
                        <a href="{{ route('assesment_create') }}" type="button" class="btn btn-primary">Add</a>
                    </div>
                </div> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Title</th>
                            {{-- <th scope="col">Date</th> --}}
                            <th scope="col">Audio</th>
                            {{-- <th scope="col">Description</th> --}}
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($getAssesment as $key => $value)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $value->get_bookedUserName->name ??''}}</td>
                                <td>{{ $value->title }}</td>
                                <td>
                                    {{-- {{ $value->audio }} --}}
                                    <a href="{{ (!empty($value->audio))?
                                        asset('storage/uploads/audio/'.$value->audio ??''):asset('storage/uploads/No-image.jpg') }}" download>
                                        <button class="btn btn-primary" type="button">View</button>
                                    </a>

                                </td>

                                {{-- <td>{{ $value->audiotime }}</td> --}}
                                {{-- <td>{{ $value->content }}</td> --}}
                                <td>
                                    <a class="btn btn-primary" type="button"
                                        href="{{ route('assesment_edit', $value->id ??'') }}">Edit</a>
                                        <a class="btn btn-danger" type="button"
                                        href="{{ route('assesment_delete', $value->id ??'') }}" id="delete" >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            {{ $getAssesment->appends(Request::all())->links(); }}

        </div>

    </div>
@endsection
