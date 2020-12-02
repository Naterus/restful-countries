
@extends("layouts.home-layout")
@section("title","Documentation")
@section("page-description")
    Api documentation V{!! $version !!}
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
                                <span class="text-uppercase text-white font-weight-bold">Documentation helps you navigate our api endpoints.</span>
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
                                <li><a href="#country-by-population">Country by population range</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-size">Country by Size range</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-iso2">Country by ISO2</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-iso3">Country by ISO3</a> <span class="float-right"></span></li>
                                <li><a href="#country-by-code">Country by code</a> <span class="float-right"></span></li>
                                <li><a href="#country-slim">Slim Country response</a> <span class="float-right"></span></li>
                                <li><a href="#presidents-by-country">Presidents by country</a> <span class="float-right"></span></li>
                                <li><a href="#president-by-country">Presidents by country and name</a> <span class="float-right"></span></li>
                                <li><a href="#covid19">Covid 19 cases only</a> <span class="float-right"></span></li>
                                <li><a href="#covid19-by-deaths">Covid 19 by deaths</a> <span class="float-right"></span></li>
                                <li><a href="#covid19-by-total">Covid 19 by total case</a> <span class="float-right"></span></li>
                                <li><a href="#state-by-country">States by country name</a> <span class="float-right"></span></li>
                                <li><a href="#state-by-country-state">State by country name and state name</a> <span class="float-right"></span></li>
                                <li><a href="#state-slim">Slim State response</a> <span class="float-right"></span></li>
                                <li><a href="#references">References</a> <span class="float-right"></span></li>
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
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">All Countries - <span class="text-success">GET</span></a></h4>
                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1</a></p>
                                    <p>Or</p>
                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries</a></p>
                                    <p>Returns a list of all countries available</p>
                                    <pre id="countries-response"></pre>
                                    <p>Use the per_page parameter to specify number of items to return</p>
                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries?per_page=15</a></p>
                                    <p>This would return 15 countries per page</p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
                    <div class="row" id="country-by-name">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by name - <span class="text-success">GET</span></a></h4>
                                    <p>Get a single company by name : You may use space in country name or hyphen e.g <span class="text-muted">countries/south africa</span>  or <span class="text-muted">countries/south-africa</span></p>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries/Nigeria</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>
                    <div class="row" id="country-by-continent">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Countries by continent - <span class="text-success">GET</span></a></h4>
                                    <p>Get a list of countries by continent</p>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?continent={continent}</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries?continent=africa</a></p>

                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-code">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by code - <span class="text-success">GET</span></a></h4>
                                    <p>Get a single country by calling code</p>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?code={code}</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries?code=+234</a></p>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-population">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by Population - <span class="text-success">GET</span></a></h4>
                                    <p>Get a  list of countries by Population range.</p>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?population_from={min_population}&population_to={max_population}</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries?population_from=100&population_to=5000</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-size">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by Size - <span class="text-success">GET</span></a></h4>

                                    <p>Get a list of countries by size (km²) range </p>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?size_from={min_size}&size_to={max_size}</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries?size_from=1000&size_to=60000</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-iso2">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by ISO2 - <span class="text-success">GET</span></a></h4>
                                    <p>Get a single country by ISO2 code</p>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?iso2={iso2}</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries?iso2=AO</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="country-by-iso3">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Country by ISO3 - <span class="text-success">GET</span></a></h4>
                                    <p>Get a single country by ISO3 code </p>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries?iso3={iso3}</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries?iso3=AGO</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>


                    <div class="row" id="country-slim">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Slim country response - <span class="text-success">GET</span></a></h4>

                                    <p>In the case were you just want the minimal country information to reduce the amount of data loaded to your page, you can use the slim fetch type parameter.</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries?fetch_type=slim</a></p>
                                    <pre id="countries-slim"></pre>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="presidents-by-country">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Presidents by country - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}/presidents</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries/India/presidents</a></p>
                                    <p>Returns a list of country presidents available.</p>
                                    <pre id="presidents-response"></pre>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="president-by-country">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">President by country and name - <span class="text-success">GET</span></a></h4>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}/presidents/{president}</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries/afghanistan/presidents/Ashraf-Ghani</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="covid19">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Covid 19 cases only - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/covid19</a></p>
                                    <p>Returns a paginated result of all countries covid 19 case</p>
                                    <pre id="covid19-response"></pre>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="covid19-by-deaths">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Covid 19 cases by death range only - <span class="text-success">GET</span></a></h4>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/covid19?death_from={minimum_death}&death_to={maximum-deaths}</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/covid19?death_from=50&death_to=200000</a></p>
                                    <p>Returns a list of covid 19 confirmed cases</p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="covid19-by-total">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Covid 19 cases by total confirmed range only - <span class="text-success">GET</span></a></h4>
                                    <p class="text-muted">https://restfulcountries.com/api/v1/covid19?total_from={minimum_total}&death_to={maximum-total}</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/covid19?total_from=3000&total_to=500000</a></p>
                                    <p>Returns a list of covid 19 confirmed cases</p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>


                    <div class="row" id="state-by-country">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">States by country name - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}/states</p>
                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries/Nigeria/states</a></p>
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
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">State by country name and state name - <span class="text-success">GET</span></a></h4>

                                    <p class="text-muted">https://restfulcountries.com/api/v1/countries/{country}/states/{state}</p>
                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries/United States/states/Alaska</a></p>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="state-slim">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">Slim state response - <span class="text-success">GET</span></a></h4>
                                    <p>Just like the slim country response , you may want to reduce the amount of data loaded to your page, you can use the slim fetch type parameter.</p>

                                    <p class="text-muted"><a href="javascript:void(0)">https://restfulcountries.com/api/v1/countries/United States/states?fetch_type=slim</a></p>

                                    <pre id="states-slim"></pre>
                                </div>

                            </div>
                        </div><!--end col-->
                    </div>
                    <br/>

                    <div class="row" id="references">
                        <div class="col-lg-12 mb-12 pb-12">
                            <div class="blog position-relative overflow-hidden shadow rounded">
                                <div class="content p-4">
                                    <h4><a href="javascript:void(0)" class="title text-dark">References </a></h4>
                                    <div class="alert alert-warning text-center">
                                        <strong>As much as we try to source data from reliable sources, the information returned by our api stands to be corrected in the case of spelling errors or invalid data.</strong>
                                        <p>See <a href="{!! route("feedback") !!}" >Feedback</a> to submit errors or new feature suggestions</p>
                                    </div>
                                    <ul>
                                        <li><a href="https://en.wikipedia.org/" target="_blank">https://en.wikipedia.org/</a> </li>
                                        <li><a href="https://www.worldometers.info/world-population" target="_blank">https://www.worldometers.info/world-population</a> </li>
                                        <li><a href="https://covid19.who.int/" target="_blank">https://covid19.who.int</a> </li>
                                    </ul>
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
            window.location.href='http://restfulcountries.com/api-documentation/version/'+version;
        });
    </script>
    <script src="{!! asset("storage/js/pretty-print-json.js") !!}"></script>
    <script>
        const countriesResponse =

            { "data":
                    [
                        {
                            "name": "Nigeria",
                            "full_name": "Federal Republic of Nigeria",
                            "capital": "Abuja",
                            "iso2": "NG",
                            "iso3": "NGA",
                            "covid19": {
                                "total_case": "67,412",
                                "total_deaths": "1,173",
                                "last_updated": "2020-11-30T19:36:49.000000Z"
                            },
                            "current_president": {
                                "name": "Muhammadu Buhari",
                                "gender": "Male",
                                "appointment_start_date": "2015-05-29",
                                "appointment_end_date": null,
                                "href": {
                                    "self": "https://restfulcountries.com/api/v1/countries/Nigeria/presidents/Muhammadu-Buhari",
                                    "country": "https://restfulcountries.com/api/v1/countries/Nigeria",
                                    "picture": "https://restfulcountries.com/storage/images/presidents/muhammadu-buharipxpjw98lcj.jpg"
                                }
                            },
                            "currency": "NGN",
                            "phone_code": "234",
                            "continent": "Africa",
                            "description": "Nigeria is the most populous country in Africa and the seventh most populous country in the world, with an estimated 206 million inhabitants as of late 2019.  The name Nigeria was taken from the Niger River running through the country.",
                            "size": "923,768 km²",
                            "independence_date": "1960-10-01",
                            "population": "208,355,710",
                            "href": {
                                "self": "https://restfulcountries.com/api/v1/countries/Nigeria",
                                "states": "https://restfulcountries.com/api/v1/countries/Nigeria/states",
                                "presidents": "https://restfulcountries.com/api/v1/countries/Nigeria/presidents",
                                "flag": "https://restfulcountries.com/storage/images/flags/Nigeria.png"
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
                    "per_page": 1,
                    "to": 1,
                    "total": 1
                }
            };

        const covid19Response =
            {
                "data": [
                    {
                        "country_name": "Afghanistan",
                        "total_case": "46,498",
                        "total_deaths": "1,774",
                        "last_updated": "2020-12-01T15:35:51.000000Z",
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
                    "name": "Adamawa",
                    "iso2": "AD",
                    "fips_code": "35",
                    "population": "5,527,800",
                    "size": null,
                    "official_language": null,
                    "region": "North East",
                    "href": {
                        "self": "https://restfulcountries.com/api/v1/countries/Nigeria/states/Adamawa",
                        "country": "https://restfulcountries.com/api/v1/countries/Nigeria"
                    }
                },

                {
                    "name": "Akwa Ibom",
                    "iso2": "AK",
                    "fips_code": "21",
                    "population": "5,482,200",
                    "size": null,
                    "official_language": null,
                    "region": "South South",
                    "href": {
                        "self": "https://restfulcountries.com/api/v1/countries/Nigeria/states/Akwa%20Ibom",
                        "country": "https://restfulcountries.com/api/v1/countries/Nigeria"
                    }

                }
            ]
        };

        const presidentsResponse =
            {
                "data": [
                    {
                        "name": "Ram Nath Kovind",
                        "gender": "Male",
                        "appointment_start_date": "2017-07-20",
                        "appointment_end_date": null,
                        "picture": "https://restfulcountries.com/storage/images/presidents/ram-nath-kovindfy6d2usmhy.jpg",
                        "href": {
                            "self": "https://restfulcountries.com/api/v1/countries/India/presidents/Ram-Nath-Kovind",
                            "country": "https://restfulcountries.com/api/v1/countries/India"
                        }
                    }
                ]
            };

        const countriesSlim =
            {
                "data": [
                    {
                        "name": "Afghanistan",
                        "phone_code": "93",
                        "href": {
                            "self": "https://restfulcountries.com/api/v1/countries/Afghanistan",
                            "flag": "https://restfulcountries.com/storage/images/flags/Afghanistan.png"
                        }
                    },
                    {
                        "name": "Albania",
                        "phone_code": "355",
                        "href": {
                            "self": "https://restfulcountries.com/api/v1/countries/Albania",
                            "flag": "https://restfulcountries.com/storage/images/flags/Albania.png"
                        }
                    },
                ],
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
                    "per_page": 2,
                    "to": 2,
                    "total": 2
                }
            };

        const statesSlim = {
            "data" : [
                {
                    "name": "Al Jazirah",
                    "iso2": "GZ",
                    "href": {
                        "self": "https://restfulcountries.com/api/v1/countries/Sudan/states/Al%20Jazirah",
                        "country": "https://restfulcountries.com/api/v1/countries/Sudan"
                    }
                },
                {
                    "name": "Al Qadarif",
                    "iso2": "GD",
                    "href": {
                        "self": "https://restfulcountries.com/api/v1/countries/Sudan/states/Al%20Qadarif",
                        "country": "https://restfulcountries.com/api/v1/countries/Sudan"
                    }
                }
            ]
        }

        $('#countries-response').html(prettyPrintJson.toHtml(countriesResponse));
        $('#covid19-response').html(prettyPrintJson.toHtml(covid19Response));
        $('#states-response').html(prettyPrintJson.toHtml(statesResponse));
        $('#presidents-response').html(prettyPrintJson.toHtml(presidentsResponse));
        $('#countries-slim').html(prettyPrintJson.toHtml(countriesSlim));
        $('#states-slim').html(prettyPrintJson.toHtml(statesSlim));
    </script>
@endsection
