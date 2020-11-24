
@extends("layouts.home-layout")
@section("page-content")


    <!-- Start home -->
    <section class="bg-half page-next-level" style="background-image: url('{!! asset('storage/images/places.jpg') !!}');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">{!! $country->name !!}</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <div class="home-form-position">
                                <img src="{!! asset("storage/images/flags/Afghanistan.png") !!}" style="height:60px; width: 100px;">
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- BLOG LIST START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="sidebar mt-sm-30 p-4 rounded shadow">

                        <!-- CATAGORIES -->
                        <div class="widget mb-4 pb-2">
                            <h4 class="widget-title">Countries</h4>
                            <ul class="list-unstyled mt-4 mb-0 catagories">
                                @foreach($countries as $county)
                                    <li><a href="{!! route("country",$county->id) !!}">{!! $county->name !!}</a> <span class="float-right"></span></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- CATAGORIES -->


                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-md-6 order-1 order-md-2">
                    <div class="row" id="base-url">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="position-relative overflow-hidden">
                                    <div class="overlay rounded-top bg-dark"></div>
                                    <div class="likes">
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-inline-item mr-2"><a href="javascript:void(0)" class="text-white like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                            <li class="list-inline-item"><a href="javascript:void(0)" class="text-white comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">{!! $country->name !!}</a></h4>
                                    <img src="{!! asset("storage/images/flags/Afghanistan.png") !!}" style="height:60px; width: 100px;">
                                    <h5>About</h5>
                                    <p class="text-muted">{!! $country->description !!}</p>
                                    <h5>President</h5>
                                    <p>fd</p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG LIST END -->


@endsection
@section("page-script")
    <script type="text/javascript">
        $("#select-country").on("change",function(){
            version = $("select[name='version']").val();
            window.location.href='http://localhost:8080/docs/'+version;
        });
    </script>
@endsection
