
@extends("layouts.home-layout")
@section("page-content")

    <!-- Start home -->
    <section class="bg-half page-next-level" style="background-image: url('{!! asset('storage/images/docs.jpg') !!}');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Docs Version {!! $version !!}</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <div class="home-form-position">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="home-registration-form p-4 mb-3">
                                            <form class="registration-form">
                                                <div class="row">

                                                    <div class="col-lg-12 col-md-6">
                                                        <div class="registration-form-box">
                                                            <i class="fa fa-book"></i>
                                                            <select  id="select-country" name="version" class="demo-default">
                                                                @for($version = 1; $version <= env('APP_VERSION'); $version++)
                                                                    <option value="{!! $version !!}">Version {!! $version !!}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <span class="text-uppercase text-white font-weight-bold">Read our documentation for easy api consumption.</span>
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
                            <h4 class="widget-title">Endpoints</h4>
                            <ul class="list-unstyled mt-4 mb-0 catagories">
                                <li><a href="#base-url">Base Url</a> <span class="float-right"></span></li>
                                <li><a href="#all-countries">All Countries</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-name">Country by name</a> <span class="float-right"></span></li>
                                <li><a href="#state-by-country">States by country name</a> <span class="float-right"></span></li>
                                <li><a href="#state-by-country-state">State by country name and state name</a> <span class="float-right"></span></li>
                                <li><a href="#districts-by-country-state">Districts by country name and state name</a> <span class="float-right"></span></li>
                                <li><a href="#response-structure">Response Structure</a> <span class="float-right"></span></li>


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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Base Url</a></h4>
                                    <p class="text-muted">https://restfulcountries.com/api/v1</p>                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <div class="row" id="all-countries">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">All Countries</a></h4>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1</a></p>
                                    <p>Or</p>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <div class="row" id="country-by-name">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by country name</a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{name}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/nigeria</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <div class="row" id="state-by-country">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">States by country name</a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{name}/states</p>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/nigeria/states</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <div class="row" id="state-by-country-state">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">States by country name and state name</a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{name}/states/{name}</p>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/nigeria/states/lagos</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <div class="row" id="districts-by-country-state">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Districts by country name and state name</a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{name}/states/{name}/districts</p>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/nigeria/states/lagos/ogbomosho</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <div class="row" id="districts-by-country-state">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Response  Structure</a></h4>

                                    <p>To get the successful response to countries endpoint, you must pass your API key as a query string</p>
                                    <p>https://restfulcountries.com/api/v1/countries/Nigeria?k=RCAdejeds334rfdddd</p>
                                    <p></p>
                                    <p class="text-muted">
                                        {
                                        "countries":
                                        [{
                                        "name":"Nigeria",
                                        "id":1,
                                        "description":null,
                                        "shortName":"Ngn",
                                        "states":[{
                                        "id":1,
                                        "name":"Kaduna",
                                        "population":null,
                                        "governor":null,
                                        "description":null,
                                        "districts":[{
                                        "districtId":1,
                                        "districtName":"Kajuru",
                                        "population":null,
                                        "description":null
                                        }]
                                        }]
                                        }]

                                    </p>

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
