
@extends("layouts.home-layout")
@section("title","Feedback")
@section("page-description")
    Suggest new features, Report bugs, or invalid data returned in api.
@endsection
@section("page-style")
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/modal/remodal/remodal.css") !!}">
    <link rel="stylesheet" href="{!! asset("storage/users/plugin/modal/remodal/remodal-default-theme.css") !!}">

@endsection
@section("page-content")

    <!-- Start home -->
    <section class="bg-half page-next-level" style="background-image: url('{!! asset('storage/images/feedback.jpg') !!}');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Feedback</h4>
                        <p>Tell us what you think is missing in restful countries, it could be a bug,feature,or incorrect data returned in our api.</p>
                        <p>Note : New feature suggestions would only be added to subsequent releases, older Api versions would remain intact.</p>
                        <div class="home-form-position">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center" >
                                        <span  data-remodal-target="feedback-form" class="btn btn-primary">Give Feedback</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
    <div class="remodal" data-remodal-id="feedback-form" role="dialog"
         aria-labelledby="modal1Title" aria-describedby="modal1Desc">
        <button data-remodal-action="close" class="remodal-close"
                aria-label="Close"></button>

        <div class="remodal-content">
            <h2 id="modal1Title">Feedback Form</h2>
            <form action="{!! route('feedback.submit') !!}" method="post" name="donation-form">
                @csrf
                <label>Email Address (Optional)</label>
                <input type="email" class="form-control" name="email">
                <br/>
                <label>Feedback Category</label>
                <select class="form-control" name="feedback_category">
                    <option>Select category</option>
                    <option value="New Feature">New Feature</option>
                    <option value="Bug">Bug</option>
                    <option value="Appraisal">Appraisal</option>
                    <option value="Data Error">Data Error</option>
                    <option value="Others">Others</option>
                </select>
                <br/>
                <label>Feedback</label>
                <textarea name="feedback" class="form-control"></textarea>
                <br/>
                <span data-remodal-action="cancel" class="remodal-cancel">Cancel</span>
                <button class="remodal-confirm" onclick="payStackInit()">Submit Feedback
                </button>
            </form>

        </div>
    </div>


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
