
@extends("layouts.home-layout")
@section("page-style")
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/modal/remodal/remodal.css") !!}">
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/modal/remodal/remodal-default-theme.css") !!}">
    <meta name="_token" content="{{ csrf_token() }}">
@endsection
@section("page-content")

    <!-- Start home -->
    <section class="bg-half page-next-level" style="background-image: url('{!! asset('storage/images/donate2.jpg') !!}');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Support Restful Countries</h4>
                        <p>Our aim is to provide developers all over the  world with relevant information they need about any country.</p>
                        <p>You may wish to support the research work, development and maintenance (Web Server,Database,Domain name,SSL) of restful countries using any of the channels below.</p>
                    </div>
                </div>
            </div>
            <div class="home-form-position">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center" >
                            <span data-remodal-target="paypal"><img src="{!! asset("storage/images/iconfinder_Paypal-Curved_70607.png") !!}" height="39" width="100"></span>
                            <span  data-remodal-target="paystack" class="btn btn-primary">Paystack</span>
                            <span  data-remodal-target="bitcoin"><img src="{!! asset("storage/images/iconfinder_payment_method_bitcoin_206681.png") !!}" height="39" width="100"></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end home -->
    <div class="remodal" data-remodal-id="paystack" role="dialog"
         aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close"
                aria-label="Close"></button>

        <div class="remodal-content">
            <h2 id="modal1Title">Donate with paystack</h2>
            <form action="{!! route('donate.paypal.charge') !!}" method="post" name="donation-form">
                @csrf
                <label>Email Address</label>
                <input type="email" class="form-control" name="email">
                <br/>
                <label>Amount (#)</label>
                <input type="number" class="form-control" name="paystack_amount" value="1">
                <br/>
            </form>


            <span data-remodal-action="cancel" class="remodal-cancel">Cancel</span>
            <button class="remodal-confirm" onclick="payStackInit()">Proceed Payment
            </button>
        </div>
    </div>
    <div class="remodal" data-remodal-id="paypal" role="dialog"
         aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close"
                aria-label="Close"></button>

        <div class="remodal-content">
            <h2 id="modal1Title">Donate with paypal</h2>
            <form action="{!! route('donate.paypal.charge') !!}" method="post" name="donation-form">
                @csrf
                <label>Amount ($)</label>
                <input type="number" class="form-control" name="amount" value="1">
                <br/>
                <span data-remodal-action="cancel" class="remodal-cancel">Cancel</span>
                <button class="remodal-confirm" type="submit">Proceed Payment
                </button>
            </form>
        </div>
    </div>
    <div class="remodal" data-remodal-id="bitcoin" role="dialog"
         aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close"
                aria-label="Close"></button>

        <div class="remodal-content">
            <div style="font-size:16px;margin:0 auto;width:300px" class="blockchain-btn" data-address="15uoMC8HGgyHiT62VyxGB27R21qQmvHQc8" data-shared="false">
                <div class="blockchain stage-begin">
                    <img src="https://blockchain.info/Resources/buttons/donate_64.png"/>
                </div>
                <div class="blockchain stage-loading" style="text-align:center">
                    <img src="https://blockchain.info/Resources/loading-large.gif"/>
                </div>
                <div class="blockchain stage-ready">
                    <p align="center">Please Donate To Bitcoin Address: <b>[[address]]</b></p>
                    <p align="center" class="qr-code"></p>
                </div>
                <div class="blockchain stage-paid">
                    Donation of <b>[[value]] BTC</b> Received. Thank You.
                </div>
                <div class="blockchain stage-error">
                    <font color="red">[[error]]</font>
                </div>
            </div>

        </div>
        <span data-remodal-action="cancel" style="margin-top:40px;" class="remodal-cancel">Exit</span>
    </div>


@endsection
@section("page-script")
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>

    <script type="text/javascript">

        function payStackInit(){
            let email =  $('input[name="email"]').val();
            let amount =  $('input[name="paystack_amount"]').val();

            if(amount > 0) {

                var handler = PaystackPop.setup({
                    key: '{!! env('PAYSTACK_PUBLIC_KEY') !!}',
                    email: email,
                    amount: amount * 100,
                    currency: "NGN",

                    callback: function (response) {
                        var form = $(document.createElement('form'));
                        $(form).attr('action', "{{ route('donate.paystack.callback') }}");
                        $(form).attr("method", "POST");
                        var _token = $("<input>")
                            .attr("type", "text")
                            .attr("name", "_token")
                            .val($('meta[name="_token"]').attr('content'));
                        var reference = $("<input>")
                            .attr("type", "hidden")
                            .attr("name", "reference_no")
                            .val(response.reference);
                        $(form).append($(reference));
                        $(form).append($(_token));
                        form.appendTo(document.body);
                        $(form).submit();
                    },
                    onClose: function () {

                    }
                });
                handler.openIframe();

            }else {
                alert("Invalid amount provided");
            }
        }

    </script>

    @if(Session::has('success'))
        <script>
            swal("Donation Successful!", "{!! Session::get('success') !!}.", "success");
        </script>
    @endif
    @if(Session::has('error'))
        <script>
            swal("Error", "{!! Session::get('error') !!}.", "error");
        </script>
    @endif

@endsection
