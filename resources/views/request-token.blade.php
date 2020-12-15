@extends("layouts.home-layout")
@section("title","Request Token")
@section("page-description")
    Request Token to access Api.
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

                            @if(Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <strong>{!! Session::get('success') !!}</strong>
                                </div>
                            @endif

                            @if(Session::has('api_token'))

                                <textarea placeholder="API Token" id="api-token" class="api-text" rows="14" readonly>
                                    {!! Session::get('api_token') !!}
                                </textarea>

                                <button class="copy-btn">Copy</button>
                            @endif


                            <form action="{!! route('request_token.generate') !!}" method="post" name="donation-form">
                                @csrf
                                <div class="form-group">
                                    <label>Email address </label>
                                    <input type="email" class="form-control" name="email" placeholder="Email address" required>
                                </div>

                                <div class="form-group">
                                    <label>Website URL </label>
                                    <input type="text" class="form-control" name="website" placeholder="Website URL">
                                </div>
                                <div class="form-group">

                                    <button class="btn  btn-submit" >Submit</button>
                                </div>

                            </form>
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
