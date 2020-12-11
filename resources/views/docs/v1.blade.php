@extends("layouts.home-layout")
@section("title","Documentation")
@section("page-description")
    Api documentation V{!! $version !!}
@endsection
@section("page-style")
    <link rel="stylesheet" type="text/css" href="{!! asset("assets/css/pretty-print-json.css") !!}"/>
    <style>

        .sidebar {
            position: fixed;
            overflow-y: scroll;
            height: 100%;
            background: #fff;
            z-index: 1;
            padding-top: 50px;
        }
        .show-sidebar-sm {
            position: fixed;
            bottom: 5%;
            padding: 12px;
            background: #3bb9ff;
            width: 60px;
            z-index: 2;
            color: white;
            left: 3%;
            border-radius: 48%;
            font-size: 22px;
            text-align: center;
            box-shadow: 2px 3px 8px 0px rgba(32,41,66,0.75);
            -webkit-box-shadow: 2px 3px 8px 0px rgba(32,41,66,0.75);
            -moz-box-shadow: 2px 3px 8px 0px rgba(32,41,66,0.75);
            display: none;
        }
        .inner h6{
            font-weight: bolder;
        }
        .navbar {
            background: #fff;
            border-bottom: 1px solid #ececec;
        }
        .navbar-nav li{

            float: left;
            display: block;
            position: relative;
            margin: 0 10px;

        }
        .navbar-nav > li > a {
            display: block;
            color: rgba(255, 255, 255, 0.8);
            font-size: 13px;
            background-color: transparent !important;
            font-weight: 700;
            letter-spacing: 1px;
            line-height: 24px;
            text-transform: uppercase;
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
            font-family: "Nunito", sans-serif;
            padding-left: 15px;
            padding-right: 15px;
        }

        .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
            color: #4466d8;
        }
        .code{

            background: #ececec;
            color: olive;
            font-size: small;
            padding: 0 10px;
            display: inline-block;

        }
        @media(max-width: 994px){
            .sidebar{
                display: none;
            }
            .show-sidebar-sm {
                display: block;
            }
        }
    </style>
@endsection

@section('nav-bar')
    <!-- Navigation Bar-->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{!! route('home') !!}">
                <img  alt="Restful Countries" src="{!! asset("assets/images/logo/logo-w-b.png") !!}" class="logo-light" height="60" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{!! route('home') !!}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route("documentation",env("APP_VERSION")) !!}">Documentation</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{!! route("feedback") !!}">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{!! route("donate") !!}">Donate</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
@endsection

@section("page-content")



    <!-- API DOCUMENTATION START -->
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-12 " style="margin-left: -25px;">

                    <div class="sidebar">

                        <div class="widget mb-4 pl-4">
                            <h4 class="widget-title">Restful Countries API</h4>

                            <div class="home-registration-form my-4">
                                <form class="registration-form">
                                        <div class="registration-form-box">
                                            <i class="mdi mdi-book ml-2"></i>
                                            <select id="select-country" name="version" class="select__version">
                                                @for($version = 1; $version <= env('APP_VERSION'); $version++)
                                                    <option value="{!! $version !!}">Version {!! $version !!}</option>
                                                @endfor
                                            </select>
                                        </div>

                                </form>
                            </div>
                            <ul class="list-unstyled mt-4 mb-0 catagories">
                                <li><a href="#api-reference" class="scroll-div">API Reference</a> </li>
                                <li><a href="#authentication-guide" class="scroll-div">Authentication Guide</a></li>
                                <li><a href="#rate-limiting" class="scroll-div">Rate Limiting</a> </li>
                                <li><a href="#base-url" class="scroll-div">Base URL</a></li>
                                <li><a href="#quick-start" class="scroll-div">Quick Start</a></li>
                                {{--<li><a href="#all-countries" class="scroll-div">All Countries</a></li>--}}
                                <li><a href="#country-by-name" class="scroll-div">Country by name</a></li>
                                <li><a href="#country-by-continent" class="scroll-div">Country by continent</a> </li>
                                <li><a href="#country-by-code" class="scroll-div">Country by code</a></li>
                                <li><a href="#country-by-population" class="scroll-div">Country by population range</a> </li>
                                <li><a href="#country-by-size" class="scroll-div">Country by Size range</a></li>
                                <li><a href="#country-by-iso2" class="scroll-div">Country by ISO2</a></li>
                                <li><a href="#country-by-iso3" class="scroll-div">Country by ISO3</a></li>
                                <li><a href="#country-by-code" class="scroll-div">Country by code</a></li>
                                <li><a href="#country-slim" class="scroll-div">Slim Country response</a></li>
                                <li><a href="#presidents-by-country" class="scroll-div">Presidents by country</a></li>
                                <li><a href="#president-by-country" class="scroll-div">Presidents by country and name</a></li>
                                <li><a href="#covid19" class="scroll-div">Covid 19 cases only</a> </li>
                                <li><a href="#covid19-by-deaths" class="scroll-div">Covid 19 by deaths</a></li>
                                <li><a href="#covid19-by-total" class="scroll-div">Covid 19 by total case</a></li>
                                <li><a href="#state-by-country" class="scroll-div">States by country name</a></li>
                                <li><a href="#state-by-country-state" class="scroll-div">State by country name and state name</a></li>
                                <li><a href="#state-slim" class="scroll-div">Slim State response</a> </li>
                                <li><a href="#references" class="scroll-div">References</a> </li>
                            </ul>
                        </div>
                    </div>

                </div><!--end col-->

                <div class="col-lg-8  col-sm-12">

                    <div id="api-reference" class="content p-4" >
                        <h4 class="title text-dark">API Reference </h4>
                        <div class="inner">
                            <p>Restful Countries API allows users to explore the entire database for information on countries and their states, presidents, flag, population, covid19 stats and others.</p>
                            <p>Restful Countries API is organized around <a href="http://en.wikipedia.org/wiki/Representational_State_Transfer" target="_blank"> REST</a>. Our API has predictable resource-oriented URLs, returns JSON-encoded responses and uses standard HTTP response codes, and verbs.</p>
                        </div>
                    </div>

                    <div id="authentication-guide" class="content p-4" >
                        <h4 class="title text-dark">Authentication Guide </h4>
                        <div class="inner">
                           <p>No authentication is required while using Restful Countries API.
                            </p>
                          
                        </div>
                    </div>
                    <div id="rate-limiting" class="content p-4" >
                        <h4 class="title text-dark">Rate Limiting </h4>
                        <div class="inner">
                            <p>
                                Rate limiting is applied to the Restful Countries API to ensure a high-quality service is delivered for all users, and to protect client applications from unexpected loops.
                            </p>
                            <h6>Per application rates</h6>
                            <p>
                                You can make up to 100 requests within a minute period. If you exceed this limit, you will receive a <span class="code">429 Too Many Requests HTTP status code</span>  for each request made within the remainder of the five-minute window. At the end of the period, your rate limit will reset back to its maximum value of 100 requests.
                            </p>
                            <h6>Increasing your rate limit</h6>
                            <p>
                                If you have an application that requires a higher rate limit than the default applied, then please contact us, we will be happy to help.
                            </p>
                        </div>
                    </div>

                    <div id="base-url" class="content p-4" >
                        <h4 class="title text-dark">Base URL </h4>
                        <div class="inner">
                            <p>
                                <span class="code">GET  <a href="{{env('APP_URL')}}/api/v1" target="_blank">{{env('APP_URL')}}/api/v1</a> </span>
                            </p>
                        </div>
                    </div>
                    <div id="quick-start" class="content p-4" >
                        <h4 class="title text-dark">Quick Start </h4>
                        <div class="inner">
                            <p>Returns a list of all countries available</p>
                            <div class="url">{{env('APP_URL')}}/api/v1/countries</div>


                            <pre id="countries-response"></pre>

                            <p class="pl-3">Use the per_page parameter to specify number of items to return</p>
                            <div class="url">{{env('APP_URL')}}/api/v1/countries?per_page=15</div>
                            <p>This would return 15 countries per page</p>
                        </div>
                    </div>


                    <div id="country-by-name" class="content p-4">
                        <h4 class="title text-dark">Country by name - <span class="text-success">GET</span></h4>
                        <div class="inner">
                            <p>Get a single country by name

                            </p>

                            <div class="url">{{env('APP_URL')}}/api/v1/countries/{country}</div>

                            <div class="url">{{env('APP_URL')}}/api/v1/countries/Nigeria</div>

                            <br>
                            <small> You may use space in country name or hyphen e.g
                                <span class="url">countries/south africa</span>
                                or <span class="url">countries/south-africa</span>
                            </small>

                            <pre id="country-by-name-response"></pre>

                        </div>

                    </div>

                    <div id="country-by-continent" class="content p-4">
                        <h4 class="title text-dark">Country by continent - <span class="text-success">GET</span></h4>
                        <div class="inner">
                            <p>Get a list of countries by continent</p>
                            <p class="url">{{env('APP_URL')}}/api/v1/countries?continent={continent}</p>

                            <p class="url">{{env('APP_URL')}}/api/v1/countries?continent=africa</p>

                            <pre id="country-by-continent-response"></pre>

                        </div>
                    </div>

                    <div id="country-by-code" class="content p-4">
                        <h4 class="title text-dark">Country by Code - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p>Get a single country by calling code</p>
                        <p class="url">{{env('APP_URL')}}/api/v1/countries?code={code}</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries?code=+234</p>
                        </div>
                    </div>

                    <div id="country-by-population" class="content p-4">
                        <h4 class="title text-dark">Country by Population - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p>Get a list of countries by Population range.</p>

                        <p class="url">{{env('APP_URL')}}
                            /api/v1/countries?population_from={min_population}&population_to={max_population}</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries?population_from=100&population_to=5000</p>
                        </div>
                    </div>


                    <div id="country-by-size" class="content p-4">
                        <h4 class="title text-dark">Country by Size - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p>Get a list of countries by size (km²) range </p>
                        <p class="url">{{env('APP_URL')}}
                            /api/v1/countries?size_from={min_size}&size_to={max_size}</p>

                        <p class="url"><a href="javascript:void(0)">{{env('APP_URL')}}
                                /api/v1/countries?size_from=1000&size_to=60000</a></p>
                        </div>
                    </div>

                    <div id="country-by-iso2" class="content p-4">
                        <h4 class="title text-dark">Country by ISO2 - <span class="text-success">GET</span></h4>

                        <div class="inner">
                        <p>Get a single country by ISO2 code</p>
                        <p class="url">{{env('APP_URL')}}/api/v1/countries?iso2={iso2}</p>

                        <p class="url">{{env('APP_URL')}}
                                /api/v1/countries?iso2=AO</p>
                        </div>
                    </div>
                    <div id="country-by-iso3" class="content p-4">
                        <h4 class="title text-dark">Country by ISO3 - <span class="text-success">GET</span></h4>
                        <div class="inner">
                        <p>Get a single country by ISO3 code </p>
                        <p class="url">{{env('APP_URL')}}/api/v1/countries?iso3={iso3}</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries?iso3=AGO</p>
                        </div>
                    </div>

                    <div id="country-slim" class="content p-4">
                        <h4 class="title text-dark">Slim Country Response - <span class="text-success">GET</span></h4>

                        <div class="inner">

                        <p>In the case were you just want the minimal country information to reduce the amount of data
                            loaded to your page, you can use the slim fetch type parameter.</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries?fetch_type=slim</p>
                        <pre id="countries-slim"></pre>
                        </div>
                    </div>

                    <div id="presidents-by-country" class="content p-4">
                        <h4 class="title text-dark">Presidents by Country - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p class="url">{{env('APP_URL')}}/api/v1/countries/{country}/presidents</p>

                        <p class="url">{{env('APP_URL')}}
                                /api/v1/countries/India/presidents</p>
                        <p>Returns a list of country presidents available.</p>
                        <pre id="presidents-response"></pre>
                        </div>
                    </div>


                    <div id="president-by-country" class="content p-4">
                        <h4 class="title text-dark">Presidents by Country and Name - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p class="url">{{env('APP_URL')}}/api/v1/countries/{country}/presidents/{president}</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries/afghanistan/presidents/Ashraf-Ghani</p>
                        </div>
                    </div>

                    <div id="covid19" class="content p-4">
                        <h4 class="title text-dark">Covid 19 Cases Only - <span class="text-success">GET</span></h4>

                        <div class="inner">
                            <p class="url">{{env('APP_URL')}}/api/v1/covid19</p>
                            <p>Returns a paginated result of all countries covid 19 case</p>
                            <pre id="covid19-response"></pre>
                        </div>
                    </div>


                    <div id="covid19-by-deaths" class="content p-4">
                        <h4 class="title text-dark">Covid 19 cases by death range only - <span class="text-success">GET</span></h4>

                        <div class="inner">
                        <p class="url">{{env('APP_URL')}}
                            /api/v1/covid19?death_from={minimum_death}&death_to={maximum-deaths}</p>

                        <p class="url">{{env('APP_URL')}}
                                /api/v1/covid19?death_from=50&death_to=200000</p>
                        <p>Returns a list of covid 19 confirmed cases</p>
                        </div>
                    </div>

                    <div id="covid19-by-total" class="content p-4">
                        <h4 class="title text-dark">Covid 19 cases by total confirmed range
                            only - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p class="url">{{env('APP_URL')}}
                            /api/v1/covid19?total_from={minimum_total}&death_to={maximum-total}</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/covid19?total_from=3000&total_to=500000</p>
                        <p>Returns a list of covid 19 confirmed cases</p>
                        </div>
                    </div>


                    <div id="state-by-country" class="content p-4">
                        <h4 class="title text-dark">State by Country Name - <span class="text-success">GET</span></h4>

                        <div class="inner">
                            <p class="url">{{env('APP_URL')}}/api/v1/countries/{country}/states</p>
                            <p class="url">{{env('APP_URL')}}/api/v1/countries/Nigeria/states</p>
                            <p>Returns result of country states without pagination</p>
                            <pre id="states-response"></pre>
                        </div>
                    </div>

                    <div id="state-by-country-state" class="content p-4">
                        <h4 class="title text-dark">State by Country Name and State Name - <span class="text-success">GET</span></h4>


                        <div class="inner">
                        <p class="url">{{env('APP_URL')}}/api/v1/countries/{country}/states/{state}</p>
                        <p class="url">{{env('APP_URL')}}/api/v1/countries/United States/states/Alaska</p>
                        </div>
                    </div>

                    <div id="state-slim" class="content p-4">
                        <h4 class="title text-dark">Slim State Response - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p>Just like the slim country response , you may want to reduce the amount of data loaded to
                            your page, you can use the slim fetch type parameter.</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries/UnitedStates/states?fetch_type=slim</p>

                        <pre id="states-slim"></pre>
                        </div>
                    </div>

                    <div id="references" class="content p-4">
                        <h4 class="title text-dark">References </h4>
                        <div class="inner">

                            <div class="alert">As much as we try to source data from reliable sources, the information returned by
                                    our api stands to be corrected in the case of spelling errors or invalid data.


                            </div>
                            <ul>
                                <li><a href="https://en.wikipedia.org/" target="_blank">https://en.wikipedia.org/</a></li>
                                <li><a href="https://www.worldometers.info/world-population" target="_blank">https://www.worldometers.info/world-population</a>
                                </li>
                                <li><a href="https://covid19.who.int/" target="_blank">https://covid19.who.int</a></li>
                            </ul>

                            <small>See <a href="{!! route("feedback") !!}">Feedback</a> to submit errors or new feature
                                suggestions</small>
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- API DOCUMENTATION END -->

    <div class="show-sidebar-sm">
        <i class="mdi mdi-book-open-page-variant"></i>
    </div>
@endsection
@section("page-script")

    <script src="{!! asset("assets/js/pretty-print-json.js") !!}"></script>
    <script src="{!! asset("assets/js/app.js") !!}"></script>
@endsection
