@extends("layouts.home-layout")
@section("title","Donation")
@section("page-description")
    Support the development and maintenance of Restful Countries API.
@endsection
@section("page-style")

    <meta name="_token" content="{{ csrf_token() }}">

@endsection
@section('nav-bar')
    @include('layouts.navbar')
@endsection
@section("page-content")

    <!-- Start home -->
    <section class="bg-half " id="donation">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class=" text-center text-white f-14">
                        <div class="mb-5">
                            <h1 class="text-uppercase mb-4">Support Restful Countries</h1>
                            <p>Restful Countries API aims to provide developers and researchers all over the world with relevant information about any country.
                                </p>
                            <p>You may wish to support the research work, development and maintenance of restful
                                countries using any of the channels below:</p>

                        </div>

                        <div class="home-form-position ">
                            <div>
                                <form action="https://www.paypal.com/donate" method="post" target="_top">
                                    <input type="hidden" name="hosted_button_id" value="D5KM86CAKG5LA"/>
                                    <input type="image"
                                           src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"
                                           border="0" name="submit"
                                           title="PayPal - The safer, easier way to pay online!"
                                           alt="Donate with PayPal button"/>
                                    <img alt="" border="0" src="https://www.paypal.com/en_NG/i/scr/pixel.gif" width="1"
                                         height="1"/>
                                </form>
                            </div>
                            <div>

                                <div data-toggle="modal" data-target="#bitcoinModal">
                                    <img src="{!! asset("assets/images/iconfinder_payment_method_bitcoin_206681.png") !!}"
                                         style="height: 50px;">
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- end home -->


    <!-- Modal -->
    <div class="modal fade " id="bitcoinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Donate via Bitcoin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div style="margin:50px auto; width:300px" class="blockchain-btn"
                         data-address="15uoMC8HGgyHiT62VyxGB27R21qQmvHQc8" data-shared="false">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{----}}
    {{--<div class="modal" data-remodal-id="bitcoin" role="dialog"--}}
         {{--aria-labelledby="modal1Title" aria-describedby="modal1Desc">--}}
        {{--<button data-remodal-action="close" class="remodal-close"--}}
                {{--aria-label="Close"></button>--}}

        {{--<div class="remodal-content">--}}
            {{----}}

        {{--</div>--}}
        {{--<span data-remodal-action="cancel" style="margin-top:40px;" class="remodal-cancel">Exit</span>--}}
    {{--</div>--}}


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
