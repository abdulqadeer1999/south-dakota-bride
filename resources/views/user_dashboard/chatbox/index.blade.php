@extends('user_dashboard.layouts.user-master')
@section('content')
    <style>
        .profile-user-inner {
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0px 8px #ababab4f;
        }



        img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .user-information {
            display: flex;
            border-bottom: 1px solid #000;
            width: 80%;
            padding-bottom: 6px;
            margin-top: 3rem;
            align-items: baseline;

        }

        .user-information span {
            font-family: ProximaNova-Regular;
            color: #2c2c2c;
            font-size: 18px;
        }

        .user-information select {
            border: none;
            width: 70%;
            font-family: ProximaNova-Regular;
            outline: none;
            color: #2c2c2c;
            font-size: 18px;
        }

        .user-information label {
            width: auto;
            margin-right: 1rem;
            font-family: PlayfairDisplay-Bold;
        }

        .tabs-inner-button button {
            outline: none;
            border: none;
            background: #000;
            color: #fff;
            font-family: ProximaNova-Regular;
            padding: 10px 2rem;
            width: 100%;
            margin-top: 1rem;
        }

        .tabs-inner-button button:hover {
            border: 2px solid #000;
            background: #fff;
            color: #000;
        }

        .for-btns-width {
            width: 16%;
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

        .chatHeading h2 {
            font-family: PlayfairDisplay-Regular;
            margin-bottom: 20px;
            text-align: center;
        }

        .nameHeading h4 {
            font-family: PlayfairDisplay-Regular;
            margin-bottom: 20px;
        }

        .chatBox {
            width: 100%;
            min-height: 80%;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 16px 22px;
            box-shadow: 0 0px 8px #ababab4f;



        }

        .messageOneBox p {
            width: 50%;
            background-color: #0072ffe0;
            padding: 6px 16px;
            border-radius: 20px;
            margin-bottom: 8px;
            font-size: 14px;
            color: #ffffff;
            margin-left: auto;
            font-family: PlayfairDisplay-Regular;

        }

        .messageTwoBox p {
            width: 50%;
            background-color: #cccccc52;
            padding: 6px 16px;
            border-radius: 20px;
            margin-right: auto;
            margin-bottom: 8px;
            font-size: 14px;
            font-family: PlayfairDisplay-Regular;

        }

        .message {
            width: 100%;
            border: 1px solid #cccccc;
            border-radius: 8px;
            margin-top: 180px;
            padding: 8px;
            font-size: 14px;
            background-color: ##cccccc52;
            outline: none;
            font-family: PlayfairDisplay-Regular;

        }

        .send button {
            border: none;
            background-color: #0072ffe0;
            font-size: 14px;
            padding: 6px;
            width: 100px;
            border-radius: 8px;
            margin: 10px 0px;
            font-family: PlayfairDisplay-Regular;
            color: #ffffff;
        }

        .send {
            text-align: end;
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
                    <div class="chatHeading">
                        <h2>Chat</h2>
                    </div>
                    <div class="chatBox">

                        <table class="table">
                            {{-- <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Chat List</th>

                            <th scope="col">Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead> --}}
                            <tbody>
                                <br>
                                <hr>
                                @if (Auth::User()->type == '2' ?? '')
                                    @foreach ($getMessage as $key => $value)
                                        <tr>
                                            <td>
                                                <div class="tabs-card-content">

                                                    <div class="d-flex justify-content-center card-profile-img" style=" width: 60px;
                                        height: 60px;">
                                                        <img class="b-r-10"
                                                            src="{{ !empty($value->get_message->image)
                                                                ? asset('storage/uploads/cms/' . $value->get_message->image)
                                                                : asset('storage/uploads/No-image.jpg') }}"
                                                            alt="">
                                                    </div>

                                                </div>
                                            </td>
                                            <td>{{ $value->get_message->name ?? '' }}</td>
                                            <td>
                                                @if (@$value->get_message->type == '3' ?? '')
                                                    Coach
                                                @elseif (@$value->get_message->type == '4' ?? '')
                                                    Evaluator
                                                @elseif (@$value->get_message->type == '2' ?? '')
                                                    Student
                                                @endif
                                            </td>
                                            <td>

                                                <a class="btn btn-success" type="button"
                                                href="{{ route('message.ChatBox', $value->reciever_id) }}">Click here
                                                for Chat </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                @elseif(Auth::User()->type == '3' ?? '')
                                    @foreach ($getRecieverMessage as $key => $value)
                                        <tr>
                                            <td>
                                                <div class="tabs-card-content">

                                                    <div class="d-flex justify-content-center card-profile-img" style=" width: 50px;
                                        height: 50px;">
                                                        <img class="b-r-10"
                                                            src="{{ !empty($value->users_invers->image)
                                                                ? asset('storage/uploads/cms/' . $value->users_invers->image)
                                                                : asset('storage/uploads/No-image.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ @$value->users_invers->name ?? '' }}</td>
                                            <td>
                                                @if (@$value->users_invers->type == '3' ?? '')
                                                    Coach
                                                @elseif (@$value->users_invers->type == '4' ?? '')
                                                    Evaluator
                                                @elseif (@$value->users_invers->type == '2' ?? '')
                                                    Student
                                                @endif
                                            </td>

                                            {{-- <td><a class="btn btn-success" type="button"
                                                    href="{{ route('message.ChatBox', $value->sender_id) }}">Click here
                                                    for Chat</a></td> --}}


                                                    <td><a class="btn btn-success toggle-class" type="button" data-id="{{$value->sender_id}}"  data-off="InActive" {{ $value->status ? 'checked' : '' }}
                                                        href="{{ route('message.ChatBox', $value->sender_id ?? '') }}">Click here
                                                        for Chat</a></td>
                                        </tr>
                                    @endforeach
                                @elseif(Auth::User()->type == '4')
                                    @foreach ($getRecieverMessage as $key => $value)
                                        <tr>
                                            <td>
                                                <div class="tabs-card-content">

                                                    <div class="d-flex justify-content-center card-profile-img" style=" width: 50px;
                                                            height: 50px;">
                                                        <img class="b-r-10"
                                                            src="{{ !empty($value->users_invers->image ?? '')
                                                                ? asset('storage/uploads/cms/' . $value->users_invers->image ?? '')
                                                                : asset('storage/uploads/No-image.jpg') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ @$value->users_invers->name ?? ''}}</td>
                                            <td>
                                                @if (@$value->users_invers->type == '3' ?? '')
                                                    Coach
                                                @elseif (@$value->users_invers->type == '4' ?? '')
                                                    Evaluator
                                                @elseif (@$value->users_invers->type == '2' ?? '')
                                                    Student
                                                @endif
                                            </td>

                                            <td><a class="btn btn-success toggle-class" type="button" data-id="{{$value->sender_id}}"  data-off="InActive" {{ $value->status ? 'checked' : '' }}
                                                href="{{ route('message.ChatBox', @$value->sender_id ?? '') }}">Click here
                                                for Chat</a></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- card started -->




            </div>
        </div>
    @endsection
    <script>
        $(function() {
          $('.toggle-class').change(function() {
            //   console.log('here');
              var status = $(this).prop('checked') == true ? 1 : 0;
            //   var reciever_id = document.getElementById("id").getElementsByClassName("toggle-class")[0];
              var reciever_id = $(this).data('id');

              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: '/ChangeMessageStatus',
                  data: {'status': status, 'reciever_id': reciever_id ?? ''},
                  success: function(data){
                    console.log(data.success)
                  }
              });
          })
        })
      </script>
