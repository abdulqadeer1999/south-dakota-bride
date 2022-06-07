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



            <h1>PayPal</h1>
            <input type="hidden" value="{{ csrf_token() }}" name="_token" id="_token" />
            <form id="regiterForm">
                {{ csrf_field() }}
            <div class="d-flex justify-content-center mt3 mb5 wow bounceIn">
                <div id="paypal-button-container"></div>
            </div>
            </form>

        </div>
    </div>
@endsection
<script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD&intent=capture"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>

  const paypalButtonsComponent = paypal.Buttons({
      // optional styling for buttons
      // https://developer.paypal.com/docs/checkout/standard/customize/buttons-style-guide/
      style: {
        color: "gold",
        shape: "rect",
        layout: "vertical"
      },

      // set up the transaction
      createOrder: (data, actions) => {
          const createOrderPayload = {
              purchase_units: [
                  {
                      amount: {
                          value: "100"

                      }


                    }
                    // console.log(value,'')
              ]
          };

          return actions.order.create(createOrderPayload);
      },
      onApprove: (data, actions) => {
          const captureOrderHandler = (details) => {
              const payerName = details.payer.name.given_name;
            //   console.log(details);

            // const TOKEN = $("#token").val();
            $("#pageloader").fadeIn();
              $.ajax({
              method:"POST",
              url: "{{ route('evaluatorsBooking_paypal_store') }}",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              dataType: "json",
            //   data: {data: details},
                data: {
                    data: details,
                },
              success: function(data){
                if(data.status==200){
                    console.log(data)
                    window.location.href = '{{ route("evaluatorsBooking_list") }}';
                    toastr.success('Your Evaluator has been Booked', 'Success')
                };
                }
            });
            console.log('Transaction completed');
            };

        return actions.order.capture().then(captureOrderHandler);

        // success: function(data)
        // {
        // alert(data);
        // }
      },

      // handle unrecoverable errors
      onError: (err) => {
          console.error('An error prevented the buyer from checking out with PayPal');
      }
  });

  paypalButtonsComponent
      .render("#paypal-button-container")
      .catch((err) => {
          console.error('PayPal Buttons failed to render');
      });
</script>

@push('scripts')
