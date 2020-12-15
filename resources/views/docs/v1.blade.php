@extends("layouts.home-layout")
@section("title","Documentation")
@section("page-description")
    Api documentation V{!! $version !!}
@endsection
@section("page-style")
    <link rel="stylesheet" type="text/css" href="{!! asset("assets/css/pretty-print-json.css") !!}"/>
@endsection

@section('nav-bar')
    <!-- simple__navigation Bar-->
<div id="simple__navigation">

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
                    <li class="nav-item {{Route::is('home') ? 'active' : ''}}">
                        <a class="nav-link" href="{!! route('home') !!}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{Route::is('documentation') ? 'active' : ''}}">
                        <a class="nav-link" href="{!! route("documentation",env("APP_VERSION")) !!}">Documentation</a>
                    </li>

                    <li class="nav-item {{Route::is('feedback') ? 'active' : ''}}">
                        <a class="nav-link" href="{!! route("feedback") !!}">Feedback</a>
                    </li>
                    <li class="nav-item {{Route::is('donate') ? 'active' : ''}}">
                        <a class="nav-link" href="{!! route("donate") !!}">Donate</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

</div>
@endsection

@section("page-content")



    <!-- API DOCUMENTATION START -->
    <section style="margin-top: 100px;padding: 0 20px;">
        <div class="container-fluid">
            <div class="row">

                <div class="sidebar">

                        <div class="widget pl-4">
                            <h4 class="widget-title">Restful Countries API</h4>

                            <div class="home-registration-form my-4">
                                <form class="registration-form">

                                            <select id="select-country" name="version" class="select__version">
                                                @for($version = 1; $version <= env('APP_VERSION'); $version++)
                                                    <option value="{!! $version !!}">Version {!! $version !!}</option>
                                                @endfor
                                            </select>


                                </form>
                            </div>
                            <ul class="list-unstyled mb-40 categories">
                                <li><a href="#api-reference" class="scroll-div">API Reference</a> </li>
                                <li><a href="#authentication-guide" class="scroll-div">Authentication Guide</a></li>
                                <li><a href="#rate-limiting" class="scroll-div">Rate Limiting</a> </li>
                                <li><a href="#base-url" class="scroll-div">Base URL</a></li>
                                {{--<li><a href="#quick-start" class="scroll-div">Quick Start</a></li>--}}
                                <li><a href="#all-countries" class="scroll-div">All Countries</a></li>
                                <li><a href="#country-by-name" class="scroll-div">Country by name</a></li>
                                <li><a href="#country-by-continent" class="scroll-div">Countries by continent</a> </li>
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



                <div class="col-lg-8 col-md-12  ml-auto px-0">

                    <div class="text-right">
                        <a href="{{url('/request-access-token')}}"><button class="btn btn-primary" style="font-size: smaller;">Get Token</button></a>
                    </div>

                    <div id="api-reference" class="content" >
                        <h4 class="title text-dark">API Reference </h4>
                        <div class="inner">
                            <p>Restful Countries API allows users to explore the entire database for information on countries and their states, presidents, flag, population, covid19 stats and others.</p>
                            <p>Restful Countries API is organized around <a href="http://en.wikipedia.org/wiki/Representational_State_Transfer" target="_blank"> REST</a>. Our API has predictable resource-oriented URLs, returns JSON-encoded responses and uses standard HTTP response codes, and verbs.</p>
                        </div>
                    </div>

                    <div id="authentication-guide" class="content " >
                        <h4 class="title text-dark">Authentication Guide </h4>
                        <div class="inner">
                           <p>
                               Restful Countries API requires authentication credentials, in the form of an API key, to be sent with each request.
                           </p>
                            <p>
                                To obtain an API key, go to the <a href="{{url('/request-access-token')}}"> request access token page </a> and register your application by providing your email and application URL. This will allocate a unique key to your application which can be sent with any GET request for a public resource served by Restful Countries API.  <p>

                            </p>
                        </div>
                    </div>
                    <div id="rate-limiting" class="content " >
                        <h4 class="title text-dark">Rate Limiting </h4>
                        <div class="inner">
                            <p>
                                Rate limiting is applied to the Restful Countries API to ensure a high-quality service is delivered for all users, and to protect client applications from unexpected loops.
                            </p>
                            <h6>Per application rates</h6>
                            <p>
                                You can make up to 100 requests within a minute period. If you exceed this limit, you will receive a <span class="code">429 Too Many Requests HTTP status code</span>  for each request made within the remainder of the one-minute window. At the end of the period, your rate limit will reset back to its maximum value of 100 requests.
                            </p>
                            <h6>Increasing your rate limit</h6>
                            <p>
                                If you have an application that requires a higher rate limit than the default applied, then please <a href="{{url('feedback')}}"> contact us </a>, we will be happy to help.
                            </p>
                        </div>
                    </div>

                    <div id="base-url" class="content " >
                        <h4 class="title text-dark">Base URL </h4>
                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}/api/v1</span> </div>
                        </div>
                    </div>

                    <div id="all-countries" class="content " >
                        <h4 class="title text-dark">All Countries </h4>
                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}/api/v1/countries</span> </div>

                            <p>Returns information of all the countries available in the world. Including every other information on that country. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter 	</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>None	</td>
                                            <td>None</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h6>Query string parameter</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Query string parameter</th>
                                            <th scope="col">Required / optional</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Type</th>

                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="color-alert">per_page	</td>
                                            <td>optional</td>
                                            <td>Specifies number of items to return.<br> Returns paginated data </td>
                                            <td>integer</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I -X "Accept: application/json" "Authorization: Bearer ${TOKEN}" GET "{{env('APP_URL')}}/api/v1/countries?per_page=1"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="countries-response"></pre>
                            </div>

                        </div>
                    </div>


                    <div id="country-by-name" class="content ">
                        <h4 class="title text-dark">Country by name</h4>

                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}/api/v1/countries/{country}</span> </div>

                            <p>Returns information of a particular country. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter 	</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{country}	</td>
                                            <td>The name of the particular country you want to look up. Example
                                                <div class="code"> <span class="url"> {{env('APP_URL')}}/api/v1/countries/Nigeria</span> </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h6>Query string parameter</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Query string parameter</th>
                                            <th scope="col">Required / optional</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Type</th>

                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="color-alert">none	</td>
                                            <td>none</td>
                                            <td>none </td>
                                            <td>none</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I -X "Accept: application/json" "Authorization: Bearer ${TOKEN}" GET "{{env('APP_URL')}}/api/v1/countries?per_page=1"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="country-by-name-response"></pre>
                            </div>

                        </div>


                            <small> You may use space in country name or hyphen e.g
                                <span class="url">countries/south africa</span>
                                or <span class="url">countries/south-africa</span>
                            </small>





                    </div>

                    <div id="country-by-continent" class="content ">
                        <h4 class="title text-dark">Country by continent - <span class="text-success">GET</span></h4>
                        <div class="inner">
                            <p>Get a list of countries by continent</p>
                            <p class="url">{{env('APP_URL')}}/api/v1/countries?continent={continent}</p>

                            <p class="url">{{env('APP_URL')}}/api/v1/countries?continent=africa</p>

                            <pre id="country-by-continent-response"></pre>

                        </div>
                    </div>

                    <div id="country-by-code" class="content ">
                        <h4 class="title text-dark">Country by Code - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p>Get a single country by calling code</p>
                        <p class="url">{{env('APP_URL')}}/api/v1/countries?code={code}</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries?code=+234</p>
                        </div>
                    </div>

                    <div id="country-by-population" class="content ">
                        <h4 class="title text-dark">Country by Population - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p>Get a list of countries by Population range.</p>

                        <p class="url">{{env('APP_URL')}}
                            /api/v1/countries?population_from={min_population}&population_to={max_population}</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries?population_from=100&population_to=5000</p>
                        </div>
                    </div>


                    <div id="country-by-size" class="content ">
                        <h4 class="title text-dark">Country by Size - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p>Get a list of countries by size (km²) range </p>
                        <p class="url">{{env('APP_URL')}}
                            /api/v1/countries?size_from={min_size}&size_to={max_size}</p>

                        <p class="url"><a href="javascript:void(0)">{{env('APP_URL')}}
                                /api/v1/countries?size_from=1000&size_to=60000</a></p>
                        </div>
                    </div>

                    <div id="country-by-iso2" class="content ">
                        <h4 class="title text-dark">Country by ISO2 - <span class="text-success">GET</span></h4>

                        <div class="inner">
                        <p>Get a single country by ISO2 code</p>
                        <p class="url">{{env('APP_URL')}}/api/v1/countries?iso2={iso2}</p>

                        <p class="url">{{env('APP_URL')}}
                                /api/v1/countries?iso2=AO</p>
                        </div>
                    </div>
                    <div id="country-by-iso3" class="content ">
                        <h4 class="title text-dark">Country by ISO3 - <span class="text-success">GET</span></h4>
                        <div class="inner">
                        <p>Get a single country by ISO3 code </p>
                        <p class="url">{{env('APP_URL')}}/api/v1/countries?iso3={iso3}</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries?iso3=AGO</p>
                        </div>
                    </div>

                    <div id="country-slim" class="content ">
                        <h4 class="title text-dark">Slim Country Response - <span class="text-success">GET</span></h4>

                        <div class="inner">

                        <p>In the case were you just want the minimal country information to reduce the amount of data
                            loaded to your page, you can use the slim fetch type parameter.</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries?fetch_type=slim</p>
                        <pre id="countries-slim"></pre>
                        </div>
                    </div>

                    <div id="presidents-by-country" class="content ">
                        <h4 class="title text-dark">Presidents by Country - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p class="url">{{env('APP_URL')}}/api/v1/countries/{country}/presidents</p>

                        <p class="url">{{env('APP_URL')}}
                                /api/v1/countries/India/presidents</p>
                        <p>Returns a list of country presidents available.</p>
                        <pre id="presidents-response"></pre>
                        </div>
                    </div>


                    <div id="president-by-country" class="content ">
                        <h4 class="title text-dark">Presidents by Country and Name - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p class="url">{{env('APP_URL')}}/api/v1/countries/{country}/presidents/{president}</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries/afghanistan/presidents/Ashraf-Ghani</p>
                        </div>
                    </div>

                    <div id="covid19" class="content ">
                        <h4 class="title text-dark">Covid 19 Cases Only - <span class="text-success">GET</span></h4>

                        <div class="inner">
                            <p class="url">{{env('APP_URL')}}/api/v1/covid19</p>
                            <p>Returns a paginated result of all countries covid 19 case</p>
                            <pre id="covid19-response"></pre>
                        </div>
                    </div>


                    <div id="covid19-by-deaths" class="content ">
                        <h4 class="title text-dark">Covid 19 cases by death range only - <span class="text-success">GET</span></h4>

                        <div class="inner">
                        <p class="url">{{env('APP_URL')}}
                            /api/v1/covid19?death_from={minimum_death}&death_to={maximum-deaths}</p>

                        <p class="url">{{env('APP_URL')}}
                                /api/v1/covid19?death_from=50&death_to=200000</p>
                        <p>Returns a list of covid 19 confirmed cases</p>
                        </div>
                    </div>

                    <div id="covid19-by-total" class="content ">
                        <h4 class="title text-dark">Covid 19 cases by total confirmed range
                            only - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p class="url">{{env('APP_URL')}}
                            /api/v1/covid19?total_from={minimum_total}&death_to={maximum-total}</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/covid19?total_from=3000&total_to=500000</p>
                        <p>Returns a list of covid 19 confirmed cases</p>
                        </div>
                    </div>


                    <div id="state-by-country" class="content ">
                        <h4 class="title text-dark">State by Country Name - <span class="text-success">GET</span></h4>

                        <div class="inner">
                            <p class="url">{{env('APP_URL')}}/api/v1/countries/{country}/states</p>
                            <p class="url">{{env('APP_URL')}}/api/v1/countries/Nigeria/states</p>
                            <p>Returns result of country states without pagination</p>
                            <pre id="states-response"></pre>
                        </div>
                    </div>

                    <div id="state-by-country-state" class="content ">
                        <h4 class="title text-dark">State by Country Name and State Name - <span class="text-success">GET</span></h4>


                        <div class="inner">
                        <p class="url">{{env('APP_URL')}}/api/v1/countries/{country}/states/{state}</p>
                        <p class="url">{{env('APP_URL')}}/api/v1/countries/United States/states/Alaska</p>
                        </div>
                    </div>

                    <div id="state-slim" class="content ">
                        <h4 class="title text-dark">Slim State Response - <span class="text-success">GET</span></h4>
                        <div class="inner">

                        <p>Just like the slim country response , you may want to reduce the amount of data loaded to
                            your page, you can use the slim fetch type parameter.</p>

                        <p class="url">{{env('APP_URL')}}/api/v1/countries/UnitedStates/states?fetch_type=slim</p>

                        <pre id="states-slim"></pre>
                        </div>
                    </div>

                    <div id="references" class="content ">
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
