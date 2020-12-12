@extends("layouts.home-layout")
@section("title","Request Token")
@section("page-description")
    Request Token to access Api.
@endsection
@section("page-style")
    <link rel="stylesheet" href="{!! asset("assets/users/plugin/modal/remodal/remodal.css") !!}">
    <link rel="stylesheet" href="{!! asset("assets/users/plugin/modal/remodal/remodal-default-theme.css") !!}">

@endsection

@section('nav-bar')
    @include('layouts.navbar')
@endsection


@section("page-content")

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
                                    <p class="text-info">{!! Session::get('api_token') !!}</p>
                                </div>
                            @endif
                            <form action="{!! route('request_token.generate') !!}" method="post" name="donation-form">
                                @csrf
                                <label>Email Address </label>
                                <input type="email" class="form-control" name="email" required>
                                <br/>
                                <label>Website Url (Optional) </label>
                                <input type="website" class="form-control" name="email" required>
                                <br/>

                                <button class="btn  btn-submit" >Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!-- end home -->



@endsection
@section("page-script")


@endsection
