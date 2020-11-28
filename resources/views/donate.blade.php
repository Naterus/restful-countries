
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
                        <div class="home-form-position">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center" >
                           <span>
                               <form action="https://www.paypal.com/donate" method="post" target="_top">
                                <input type="hidden" name="hosted_button_id" value="D5KM86CAKG5LA" />
                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                                <img alt="" border="0" src="https://www.paypal.com/en_NG/i/scr/pixel.gif" width="1" height="1"  />
                                   <span data-remodal-target="bitcoin" ><img style="margin-bottom: 32px; margin-left:10px;"  src="{!! asset("storage/images/iconfinder_payment_method_bitcoin_206681.png") !!}" height="39" width="80"></span>
                            </form>
                           </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Our aim is to provide developers/researchers all over the  world with relevant information they need about any country.</p>
                        <p>You may wish to support the research work, development and maintenance (Web Server,Database,Domain name,SSL) of restful countries using any of the channels above.</p>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- end home -->

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>

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
