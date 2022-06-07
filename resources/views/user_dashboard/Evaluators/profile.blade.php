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
    </style>



    <div class="for-content-tabs">
     <div class="tab-content" id="v-pills-tabContent">

            @if (Session::has('message'))
                <p class="alert
        {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}
                </p>
            @endif



            <h1>Evaluator Profile</h1>

            <!-- card started -->
            @foreach ($getEvaluators_profile as $key => $value)
            <div class="profile-user-inner">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
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
                    <div class="tabs-inner-button">
                        <button data-bs-toggle="modal" data-bs-target="#messageModalBtn">Message</button>
                    </div>
                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary">
                            Launch demo modal
                        </button> -->

                    <!-- Modal -->
                </div>
                <form action="{{ route('evaluators_create',$value->id) }}" enctype="multipart/form-data"
                    method="post">
                    @csrf
                <div class="row mt2">
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>First Name:</label><span>{{ $value->name }}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>Last Name:</label><span>{{ $value->last_name }}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>Email:</label><span>{{ $value->email }}</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="user-information">
                            <label>Contact:</label><span>{{ $value->contact }}</span>
                        </div>
                    </div>
                </div>
                <div class="for-btns-width">
                    <div class="tabs-inner-button mt1">
                        <a href=""><button type="submit" class="black-btn">Book</button></a>

                    </div>
                </div>
                </form>
            </div>

            @endforeach

            <div class="cstm-modal">
                <div class="modal fade" id="messageModalBtn" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title titlefont-style" id="exampleModalLabel">Message {{ $value->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body modalbody1">
                                <div class="div ">
                                    <div class="inputF inputff">
                                        <input type="hidden" value="{{ csrf_token() }}" name="_token" id="_token" />
                                        <form id="messageInModal">
                                            {{ csrf_field() }}
                                            <textarea class="form-control" type="text" placeholder="message..." name="message" id="message" required></textarea>
                                            <br>
                                            <div class="addon">
                                                <button>
                                                    <i class="fa fa-send snd-btn"></i>
                                                </button>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
<script type="text/javascript">

    console.log(00)
    if(window.innerWidth < 791){
        $('.hustHead.bbio label').text('Bio/Extracurriculars/ Reason for Transferring')
    }else{
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
        let url = "{{ route('message.send',$value->id) }}";
        console.log(url);
        $.ajax({
            type: "POST",
            url: url,
            contentType: false,
            processData: false,
            data: formData,
            success: function(data) {
                console.log(data);
                $("#messageModalBtn").modal('hide');
                toastr.success('Your msg has been sent', 'Success');
                $("#message").val('');
                // $(".modal-backdrop").removeClass("show")
                // $(".md").removeClass("show");
                // $(this).trigger("reset")
                $(".closeBtn").trigger('click')

            },
            error: function(data, textStatus, errorThrown) {
                console.log(data);

            },
        });

    });
</script>
@endpush
