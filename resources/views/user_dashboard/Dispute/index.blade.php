@extends('user_dashboard.layouts.user-master')
@section('content')
    <style>
        .main-tabs-card {
            box-shadow: 0 0px 8px #ababab4f;
            padding: 1rem;
            border-radius: 10px;
        }
        .cstm-modal .modal-dialog {
            max-width: 500px !important;
            height: auto !important;
        }

        .cstm-modal .modal-dialog .modal-content {
            background-color: #fff !important;
            border: none !important;
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
                        <h1>Dispute List</h1>
                    </div>
                </div>
                {{-- <div class="col-lg-3">
                    <div class="tabs-main-heading mt3 mb3">
                        <a href="{{ route('Appoinment.create') }}" type="button" class="btn btn-primary">Add</a>
                    </div>
                </div> --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Message</th>
                            <th scope="col">File</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($getDispute as $key => $value)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $value->message }}</td>
                                {{-- <td>{{ $value->file }}</td> --}}
                                <td>
                                    <a href="{{ (!empty($value->file))?
                                        asset('storage/uploads/cms/'.$value->file):asset('storage/uploads/No-image.jpg') }}" download>
                                        <button class="btn btn-primary" type="button">View</button>
                                         </a>
                                </td>
                                <td>
                                    {{-- {{ route('Appoinment.edit', $value->id) }} --}}
                                    <div class="tabs-inner-button">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#DisputeModalBtn">Challenge</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- card started -->
                {{-- this modal is for DisputeModal --}}
                <div class="cstm-modal">
                    <div class="modal fade" id="DisputeModalBtn" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                        <form id="DisputeModal">
                                            {{ csrf_field() }}
                                            {{-- <form  action="{{ route('challenge_Dispute_send', $value->id) }}"
                                                enctype="multipart/form-data" method="post">
                                                @csrf --}}
                                            <textarea class="form-control" type="text" placeholder="message..." name="message" id="message" required></textarea>
                                            <br>
                                            <input name="file" id="file" class="form-control" type="file">
                                            <br>
                                            <div class="addon">
                                                <button class="btn btn-primary">send</i>
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

    </div>
@endsection
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


@push('scripts')
    <script type="text/javascript">
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

        const DisputeModal = document.getElementById('DisputeModal');
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

        DisputeModal.addEventListener("submit", function(e) {
            e.preventDefault();
            console.log("success");
            $("#pageloader").fadeIn();
            let formData = new FormData(DisputeModal);
            let url = "{{ route('challenge_Dispute_send', $value->id ?? '') }}";
            console.log(url);
            $.ajax({
                type: "POST",
                url: url,
                contentType: false,
                processData: false,
                data: formData,
                success: function(data) {
                    console.log(data);
                    $("#DisputeModalBtn").modal('hide');
                    toastr.success('Your msg has been send', 'Success');
                    $("#message").val('');
                    $("#file").val('');
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


    </script>
@endpush
