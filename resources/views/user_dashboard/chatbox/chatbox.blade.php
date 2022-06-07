@extends('user_dashboard.layouts.user-master')
@section('content')
    <style>
        .profile-user-inner {
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0px 8px #ababab4f;
        }

        .card-profile-img {
            width: 140px;
            height: 140px;
            overflow: hidden;
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

        .messageOneBox {
            width: 50%;
            margin-left: auto;
        }

        .messageOneBox p {
            /* width: 50%; */
            background-color: #0072ffe0;
            padding: 6px 16px;
            border-radius: 20px;
            margin-top: 10px;
            margin-bottom: 2rem;
            font-size: 14px;
            color: #ffffff;
            margin-left: auto;
            font-family: PlayfairDisplay-Regular;

        }

        .BoxOne-img,
        .BoxTwo-img {
            width: 40px !important;
            height: 40px !important;
            border-radius: 50%;
            overflow: hidden;
        }

        /* .BoxTwo-img{
                    } */
        /* .messageTwoBox p {
                        width: 50%;
                        background-color: #cccccc52;
                        padding: 6px 16px;
                        border-radius: 20px;
                        margin-right: auto;
                        margin-bottom: 8px;
                        font-size:14px;
                        font-family: PlayfairDisplay-Regular;

                    } */
        .messageTwoBox {
            width: 50%;
            margin-right: auto;
        }

        .messageTwoBox p {
            /* width: 50%; */
            background-color: #cccccc52;
            padding: 6px 16px;
            border-radius: 20px;
            margin-top: 10px;
            margin-bottom: 2rem;
            font-size: 14px;
            color: #000;
            margin-left: auto;
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
                        <h2>Chat with {{ $receiver_id->name ?? ''}}</h2>
                    </div>
                    <div class="chatBox">
                        <div class="nameHeading">
                            {{-- @foreach ($message as $message_details) --}}
                            <h4> Message
                            </h4>
                            {{-- @endforeach --}}
                        </div>
                        @foreach ($message as $message_details)
                            @if (@$message_details->sender_id == Auth::id())
                                <div class="messageOneBox">

                                    <div class="BoxOne-img">

                                        <img class="b-r-10"
                                            src="{{ !empty($message_details->users_invers->image)
                                                ? asset('storage/uploads/cms/' . $message_details->users_invers->image)
                                                : asset('storage/uploads/No-image.jpg') }}"
                                            alt="">

                                    </div>
                                    <p>{{ $message_details->message ?? ''}}</p>
                                </div>
                            @else
                                <div class="messageTwoBox">

                                    <div class="BoxTwo-img">

                                        <img class="b-r-10"
                                            src="{{ !empty($message_details->users_invers->image ?? '')
                                                ? asset('storage/uploads/cms/' . $message_details->users_invers->image ?? '')
                                                : asset('storage/uploads/No-image.jpg') }}"
                                            alt="">

                                    </div>
                                    <p> {{ $message_details->message ?? ''}}</p>
                                </div>
                            @endif
                        @endforeach
                        {{-- <div class="chatContainer">
                    <p></p>
                </div> --}}

                        <form id="messageInModal">
                            {{ csrf_field() }}
                            <input class="message" type="text" placeholder="message..." name="message" id="message"
                                required></input>
                            <br>
                            {{-- <input type="text" class="message" placeholder="Message"> --}}
                            <div class="addon send">
                                <button type="submit">
                                    Send
                                </button>
                            </div>
                            {{-- <div class="send">
                        <button >Send</button>
                    </div> --}}
                        </form>

                    </div>
                </div>
            </div>
            <!-- card started -->




        </div>
    </div>
@endsection

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@push('scripts')
    <script type="text/javascript">
        const chattArray = {!! $message !!};
        // console.log(chattArray);
        const authUser = {!! auth()->user() !!};
        console.log(authUser);
        chattArray.forEach(e => {
            $('.chatContainer').append(
                `
            <div  ${ e.sender_id != authUser.id ? 'other' :  'me' }">
                <div  ${ e.sender_id != authUser.id ? 'other' :  'messageTwoBox' }">
                    <div class="chatt messageOneBox">
                        <p>${e.message}</p>
                </div>
            </div>
            </div>

            `
            );
        });

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

        const messageInModal = document.getElementById('messageInModal');
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
        messageInModal.addEventListener("submit", function(e) {
            e.preventDefault();
            console.log("success");
            let formData = new FormData(messageInModal);
            let url = "{{ route('message.send', $receiver_id->id ?? '') }}";
            console.log(url);
            $.ajax({
                type: "POST",
                url: url,
                contentType: false,
                processData: false,
                data: formData,
                success: function(data) {
                    console.log(data);
                    toastr.success('Your msg has been sent', 'Success');
                    location.reload();
                    // setTimeout(function() {
                    //         }, 1000);
                    $('.chatContainer').append(`
                <div  ${ e.sender_id != authUser.id ? 'other' :  'other me' }">
                    <div class="chatt messageTwoBox">
                        <p> ${data.message}</p>
                </div>
            </div>
            `);
                    $('#message').val(null);

                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });

        });
    </script>
@endpush
