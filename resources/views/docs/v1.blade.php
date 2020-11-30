
@extends("layouts.home-layout")
@section("title","Documentation")
@section("page-description")
    See our api documentation
@endsection
@section("page-style")
    <link rel="stylesheet" type="text/css" href="{!! asset("storage/css/pretty-print-json.css") !!}" />
@endsection
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
                <div class="col-lg-4 col-md-6 col-12 order-1 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="sidebar mt-sm-30 p-4 rounded shadow">

                        <div class="widget mb-4 pb-2">
                            <h4 class="widget-title">Endpoints</h4>
                            <ul class="list-unstyled mt-4 mb-0 catagories">
                                <li><a href="#base-url">Base Url</a> <span class="float-right"></span></li>
                                <li><a href="#all-countries">All Countries</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-name">Country by name</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-continent">Country by continent</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-code">Country by code</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-region">Country by region</a> <span class="float-right"></span></li>
                                <li><a href="#country-presidents">Country Presidents</a> <span class="float-right"></span></li>
                                <li><a href="#covid19">Covid 19 cases only</a> <span class="float-right"></span></li>
                                <li><a href="#covid19-by-deaths">Covid 19 by deaths</a> <span class="float-right"></span></li>
                                <li><a href="#covid19-by-total">Covid 19 by total case</a> <span class="float-right"></span></li>
                                <li><a href="#state-by-country">States by country name</a> <span class="float-right"></span></li>
                                <li><a href="#state-by-country-state">State by country name and state name</a> <span class="float-right"></span></li>

                            </ul>
                        </div>

                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-md-6 order-2 order-md-2">
                    <br/>
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
                                    <a href="https://restfulcountries.com/api/v1" target="_blank">https://restfulcountries.com/api/v1</a>                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">All Countries - <span class="text-success">GET</span></a></h4>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1</a></p>
                                    <p>Or</p>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries</a></p>
                                    <p>Returns a paginated result of all countries available</p>
                                    <pre id="countries-response"></pre>

                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by name - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/Nigeria</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
                    <div class="row" id="country-by-continent">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Countries by continent - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?continent={continent}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries?continent=africa</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-code">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by code - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?code={code}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries?code=+234</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-region">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Countries by region - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?region={region}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries?code=sahara</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-presidents">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country Presidents - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}/presidents</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/India/presidents</a></p>
                                   <
                                    <pre id="presidents-response"></pre>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="covid19">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Covid 19 cases only - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/covid19</a></p>
                                    <p>Returns a paginated result of all countries covid19 case</p>

                                    <pre id="covid19-response"></pre>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="covid19-by-deaths">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Covid 19 cases by death range only - <span class="text-success">GET</span></a></h4>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/covid19?death_from={minimum_death}&death_to={maximum-deaths}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/covid19?death_from=50&death_to=200000</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="covid19-by-total">
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">Covid 19 cases by total confirmed range only - <span class="text-success">GET</span></a></h4>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/covid19?total_from={minimum_total}&death_to={maximum-total}</p>

                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/covid19?total_from=3000&total_to=500000</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>


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
                                    <h4><a href="javascript:void(0)" class="title text-dark">States by country name - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}/states</p>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/Nigeria/states</a></p>
<p>Returns result of country states without pagination</p>
                                    <pre id="states-response"></pre>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
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
                                    <h4><a href="javascript:void(0)" class="title text-dark">State by country name and state name - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}/states/{state}</p>
                                    <p class="text-muted"><a href="#">https://restfulcountries.com/api/v1/countries/United States/states/Alaska</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
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
    <script src="{!! asset("storage/js/pretty-print-json.js") !!}"></script>
    <script>
        const countriesResponse =

            { "data":
                    [
                        {
                            "name": "India",
                            "full_name": "The Republic of India (Bhārat Gaṇarājya)",
                            "capital": "New Delhi",
                            "iso2": "IN",
                            "iso3": "IND",
                            "covid19": {
                                "total_case": 0,
                                "total_deaths": 0,
                                "last_updated": "2020-11-28T04:34:33.000000Z"
                            },
                            "current_president": {
                                "name": "Ram Nath Kovind",
                                "gender": "Male",
                                "appointment_start_date": "2017-07-20",
                                "appointment_end_date": null,
                                "picture": "https://restfulcountries.com/storage/images/presidents/ram-nath-kovindfy6d2usmhy.jpg"
                            },
                            "currency": "INR",
                            "phone_code": "91",
                            "continent": null,
                            "description": null,
                            "size": null,
                            "independence_date": null,
                            "region": null,
                            "population": null,
                            "href": {
                                "self": "https://restfulcountries.com/api/v1/countries/India",
                                "states": "https://restfulcountries.com/api/v1/countries/India/states",
                                "presidents": "https://restfulcountries.com/api/v1/countries/India/presidents",
                                "flag": "https://restfulcountries.com/storage/images/flags/India.png"
                            }
                        }
                    ] ,

                "links": {
                    "first": "https://restfulcountries.com/api/v1/countries?page=1",
                    "last": "https://restfulcountries.com/api/v1/countries?page=1",
                    "prev": null,
                    "next": null
                },
                "meta": {
                    "current_page": 1,
                    "from": 1,
                    "last_page": 1,
                    "path": "https://restfulcountries.com/api/v1/countries",
                    "per_page": 241,
                    "to": 241,
                    "total": 241
                }
            };

        const covid19Response =
            {
                "data": [
                    {
                        "country_name": "Afghanistan",
                        "total_case": 500,
                        "total_deaths": 23,
                        "last_updated": "2020-11-28T04:46:01.000000Z",
                        "href": {
                            "country": "https://restfulcountries.com/api/v1/countries/Afghanistan"
                        }
                    },
                ],
                "links": {
                    "first": "https://restfulcountries.com/api/v1/covid19?page=1",
                    "last": "https://restfulcountries.com/api/v1/covid19?page=1",
                    "prev": null,
                    "next": null
                },
                "meta": {
                    "current_page": 1,
                    "from": 1,
                    "last_page": 1,
                    "path": "https://restfulcountries.com/api/v1/covid19",
                    "per_page": 1,
                    "to": 1,
                    "total": 1
                }
            };

        const statesResponse = {
            "data": [
                {
                    "name": "Jigawa",
                    "iso2": "JI",
                    "fips_code": "39",
                    "slogan": null,
                    "population": null,
                    "size": null,
                    "official_language": null,
                    "region": null,
                    "href": {
                        "self": "https://restfulcountries.com/api/v1/countries/Nigeria/states/Jigawa",
                        "country": "https://restfulcountries.com/api/v1/countries/Nigeria"
                    }
                },
                {
                    "name": "Enugu",
                    "iso2": "EN",
                    "fips_code": "47",
                    "slogan": null,
                    "population": null,
                    "size": null,
                    "official_language": null,
                    "region": null,
                    "href": {
                        "self": "https://restfulcountries.com/api/v1/countries/Nigeria/states/Enugu",
                        "country": "https://restfulcountries.com/api/v1/countries/Nigeria"
                    }
                },
            ]
        };

        const presidentsResponse =
            {
                "data": [
                    {
                        "name": "Ram Nath Kovind",
                        "gender": "Male",
                        "appointment_start_date": "2017-07-20",
                        "appointment_end_date": "2020-11-30",
                        "picture": "https://restfulcountries.com/storage/images/presidents/ram-nath-kovindfy6d2usmhy.jpg"
                    }
                ]
            };

        $('#countries-response').html(prettyPrintJson.toHtml(countriesResponse));
        $('#covid19-response').html(prettyPrintJson.toHtml(covid19Response));
        $('#states-response').html(prettyPrintJson.toHtml(statesResponse));
        $('#presidents-response').html(prettyPrintJson.toHtml(presidentsResponse));
    </script>
@endsection
