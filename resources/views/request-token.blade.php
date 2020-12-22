@extends("layouts.home-layout")
@section("title","Request Token")
@section("page-description")
    Request Token to access Api.
@endsection

@section('nav-bar')
    @include('layouts.navbar')
@endsection


@section("page-content")
    <style>
        .close{
            margin-top: -3px;
        }
        .alert.alert-danger {
            background-color: #e43f52;
            border-color: #e43f52;
            min-height: 40px;
        }
        .refresh{
            /*text-align: right;*/
            /*margin-top: -40px;*/
        }
        .refresh a{
            font-size: 15px;
            color: #66c8ff;
        }
    </style>
    <!-- Start home -->
    <section class="bg-half page-next-level">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class=" text-white f-14">
                        <div class="mb-4">
                            <h1 class="text-uppercase mb-4 text-center">Api Token Request</h1>
                            <p>Request authorization token to get complete access to Api.</p>
                        </div>

                        <div class="home-form-position">

                            @if(Session::has('success') && Session::has('api_token'))
                                <div class="alert alert-success text-center">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{!! Session::get('success') !!}</strong>
                                </div>
                                <div style="margin: 1.5rem;">
                                        <input type="text" placeholder="API Token" id="api-token" class="api-text "
                                               value="{!! Session::get('api_token') !!}" readonly>
                                        <button class="copy-btn">Copy</button>
                                 </div>
                            @elseif(Session::has('success') )
                                <div class="alert alert-success text-center">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{!! Session::get('success') !!}</strong>
                                </div>
                            @endif
                            @if(Session::has('error'))
                                <div class="alert alert-danger text-center">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{!! Session::get('error') !!}</strong>
                                </div>
                            @endif

                            <form action="{!! route('request_token.generate') !!}" method="post" name="donation-form">
                                @csrf
                                <div class="form-group">
                                    <label>Email address <span class="text-danger">*</span></label>
                                    <input type="email" value="{{old('email')}}" class="form-control" name="email" placeholder="Email address"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label>Website URL </label>
                                    <input type="text" value="{{old('website')}}"  class="form-control" name="website" placeholder="Website URL">
                                </div>
                                <div class="form-group">

                                    <button class="btn  btn-submit">Submit</button>
                                </div>

                            </form>
                                <div class="refresh">
                                    Click here to <a href="{!! route("refresh_token") !!}"> Refresh Token !</a>

                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- end home -->

@endsection

