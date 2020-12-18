@extends("layouts.home-layout")
@section("title","Refresh Token")
@section("page-description")
    Refresh Api Access Token.
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
                            <h1 class="text-uppercase mb-4 text-center">Refresh Api Token</h1>
                            <p>If you already generated a token but can't access it, provide your email to get new one.</p>
                        </div>

                        <div class="home-form-position">

                            @if(Session::has('success') && Session::has('api_token'))
                                <div class="alert alert-success text-center">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{!! Session::get('success') !!}</strong>
                                </div>
                                <textarea placeholder="API Token" id="api-token" class="api-text" rows="14" readonly>
                                    {!! Session::get('api_token') !!}
                                </textarea>

                                <button class="copy-btn">Copy</button>
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


                            <form action="{!! route('refresh_token.regenerate') !!}" method="post" name="donation-form">
                                @csrf
                                <div class="form-group">
                                    <label>Email address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" name="email" placeholder="Email address" required>
                                </div>

                                <div class="form-group">

                                    <button class="btn  btn-submit" >Submit</button>
                                </div>

                            </form>
                            <a href="{!! route("request_token") !!}" style="color: #ffffff;">Request new Token</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- end home -->



@endsection
@section("page-script")
    <script>

    </script>

@endsection
