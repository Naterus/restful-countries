@extends("layouts.home-layout")
@section("title","Feedback")
@section("page-description")
    Suggest new features, Report bugs, or invalid data returned in api.
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
    <section class="bg-half page-next-level"
             style="">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class=" text-white f-14">
                        <div class="mb-4">
                        <h1 class="text-uppercase mb-4">Feedback</h1>

                        <p>Tell us what you think is missing in restful countries, it could be a bug,feature,or
                            incorrect data returned in our api.</p>
                        </div>

                    <div class="home-form-position">
                        <form action="{!! route('feedback.submit') !!}" method="post" name="donation-form">
                            @csrf
                            <label>Email Address </label>
                            <input type="email" class="form-control" name="email" required>
                            <br/>
                            <label>Feedback Category</label>
                            <select class="form-control" name="feedback_category" required>
                                <option>Select category</option>
                                <option value="New Feature">New Feature</option>
                                <option value="Bug">Bug</option>
                                <option value="Appraisal">Appraisal</option>
                                <option value="Data Error">Data Error</option>
                                <option value="Others">Others</option>
                            </select>
                            <br/>
                            <label>Feedback</label>
                            <textarea name="feedback" class="form-control" required></textarea>
                            <br/>

                            <button class="btn  btn-submit " onclick="payStackInit()">Submit</button>
                        </form>
                        <div class="mt-4">
                            <p>Note : New feature suggestions would only be added to subsequent releases, older Api versions
                            would remain intact.</p>
                        </div>
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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(Session::has('success'))
        <script>
            swal("Feedback Successful!", "{!! Session::get('success') !!}.", "success");
        </script>
    @endif
    @if(Session::has('error'))
        <script>
            swal("Error", "{!! Session::get('error') !!}.", "error");
        </script>
    @endif

@endsection
