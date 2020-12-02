
@extends("layouts.home-layout")
@section("title","Get countries data via restful api")
@section("page-description")
    Get countries information like states, covid19 summary, presidents, flag, population and others via Restful Api.
@endsection
@section("page-content")
    <!-- Start Home -->
    <section class="bg-home" style="background: url('{!! asset("storage/images/map2.jpg") !!}') center center;">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                                <h1 class="heading font-weight-bold mb-4">All 	Countries Repository</h1>
                                <h6 class="small-title text-uppercase text-light mb-3">Get countries information like states, covid19 stats, presidents, flag, population and others via Restful Api.</h6>
                                <div class="text-center" style="margin-top: 50px;">
                                    <a href="{!! route("documentation",env("APP_VERSION")) !!}" class=""><button class="btn btn-primary">Explore Endpoints</button></a>
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

