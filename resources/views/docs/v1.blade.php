@extends("layouts.home-layout")
@section("title","Documentation")
@section("page-description")
    Api documentation V{!! $version !!}
@endsection
@section("page-style")
    <link rel="stylesheet" type="text/css" href="{!! asset("assets/css/pretty-print-json.css") !!}"/>
@endsection

{{--todo: as the page scrolls set active links and onclick of link set active link - sidebar--}}
{{--todo: Update sample request and response--}}

@section('nav-bar')
    <!-- simple__navigation Bar-->
    <div id="simple__navigation">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{!! route('home') !!}">
                    <img alt="Restful Countries" src="{!! asset("assets/images/logo/logo-w-b.png") !!}"
                         class="logo-light" height="60"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item {{Route::is('home') ? 'active' : ''}}">
                            <a class="nav-link" href="{!! route('home') !!}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{Route::is('documentation') ? 'active' : ''}}">
                            <a class="nav-link"
                               href="{!! route("documentation",env("APP_VERSION")) !!}">Documentation</a>
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
                            <li><a href="#api-reference" class="scroll-div">API Reference</a></li>
                            <li><a href="#authentication-guide" class="scroll-div">Authentication Guide</a></li>
                            <li><a href="#rate-limiting" class="scroll-div">Rate Limiting</a></li>
                            <li><a href="#base-url" class="scroll-div">Base URL</a></li>
                            {{--<li><a href="#quick-start" class="scroll-div">Quick Start</a></li>--}}
                            <li><a href="#all-countries" class="scroll-div">All Countries</a></li>
                            <li><a href="#country-by-name" class="scroll-div">Country by name</a></li>
                            <li><a href="#country-by-continent" class="scroll-div">Countries by continent</a></li>
                            <li><a href="#country-by-population" class="scroll-div">Country by population range</a></li>
                            <li><a href="#country-by-size" class="scroll-div">Country by Size range</a></li>
                            <li><a href="#country-by-iso2" class="scroll-div">Country by ISO2</a></li>
                            <li><a href="#country-by-iso3" class="scroll-div">Country by ISO3</a></li>
                            <li><a href="#country-by-code" class="scroll-div">Country by code</a></li>
                            <li><a href="#country-slim" class="scroll-div">Slim Country response</a></li>
                            <li><a href="#presidents-by-country" class="scroll-div">Presidents by country</a></li>
                            <li><a href="#president-by-country-name" class="scroll-div">Presidents by country and name</a>
                            </li>
                            <li><a href="#covid19" class="scroll-div">Covid 19 cases only</a></li>
                            <li><a href="#covid19-by-deaths" class="scroll-div">Covid 19 by deaths</a></li>
                            <li><a href="#covid19-by-total" class="scroll-div">Covid 19 by total case</a></li>

                            {{--todo: add covid19-by-recovery--}}
                            {{--<li><a href="#covid19-by-deaths" class="scroll-div">Covid 19 by deaths</a></li>--}}

                            <li><a href="#state-by-country" class="scroll-div">States by country name</a></li>
                            <li><a href="#state-by-country-state" class="scroll-div">State by country name and state
                                    name</a></li>
                            <li><a href="#state-slim" class="scroll-div">Slim State response</a></li>
                            <li><a href="#references" class="scroll-div">References</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-8 col-md-12  ml-auto px-0">
                    <a href="https://github.com/Naterus/restful-countries/blob/main/resources/views/docs/v1.blade.php" target="_blank" >
                        <button class="btn btn-outline-dark">
                            <i class="mdi mdi-github-circle"></i> Edit This Page
                        </button>
                    </a>
                    <div class="text-right">
                        <a href="{{url('/request-access-token')}}">
                            <button class="btn btn-primary" style="font-size: smaller;">Get Token</button>
                        </a>
                    </div>

                    <div id="api-reference" class="content">
                        <h4 class="title text-dark">API Reference </h4>
                        <div class="inner">
                            <p>Restful Countries API allows users to explore the entire database for information on
                                countries and their states, presidents, flag, population, covid19 stats and others.</p>
                            <p>Restful Countries API is organized around <a
                                    href="http://en.wikipedia.org/wiki/Representational_State_Transfer"
                                    target="_blank"> REST</a>. Our API has predictable resource-oriented URLs,
                                returns JSON-encoded responses and uses standard HTTP response codes, and verbs.</p>
                        </div>
                    </div>

                    <div id="authentication-guide" class="content ">
                        <h4 class="title text-dark">Authentication Guide </h4>
                        <div class="inner">
                            <p>
                                Restful Countries API requires authentication credentials, in the form of an API key, to
                                be sent with each request.
                            </p>
                            <p>
                                To obtain an API key, go to the <a href="{{url('/request-access-token')}}"> request
                                    access token page </a> and register your application by providing your email and
                                application URL. This will allocate a unique key to your application which can be sent
                                with any GET request for a public resource served by Restful Countries API.
                            <p>

                            </p>
                        </div>
                    </div>

                    <div id="rate-limiting" class="content ">
                        <h4 class="title text-dark">Rate Limiting </h4>
                        <div class="inner">
                            <p>
                                Rate limiting is applied to the Restful Countries API to ensure a high-quality service
                                is delivered for all users, and to protect client applications from unexpected loops.
                            </p>
                            <h6>Per application rates</h6>
                            <p>
                                You can make up to 100 requests within a minute period. If you exceed this limit, you
                                will receive a <span class="code">429 Too Many Requests HTTP status code</span> for each
                                request made within the remainder of the one-minute window. At the end of the period,
                                your rate limit will reset back to its maximum value of 100 requests.
                            </p>
                            <h6>Increasing your rate limit</h6>
                            <p>
                                If you have an application that requires a higher rate limit than the default applied,
                                then please <a href="{{url('feedback')}}"> contact us </a>, we will be happy to help.
                            </p>
                        </div>
                    </div>

                    <div id="base-url" class="content ">
                        <h4 class="title text-dark">Base URL </h4>
                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}/api/v1</span></div>
                        </div>
                    </div>

                    <div id="all-countries" class="content ">
                        <h4 class="title text-dark">All Countries </h4>
                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}/api/v1/countries</span></div>

                            <p>Returns information of all the countries available in the world. Including every other
                                information on that country. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>None</td>
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
                                            <td class="color-alert">per_page</td>
                                            <td>optional</td>
                                            <td>Specifies number of items to return.<br> Returns paginated data</td>
                                            <td>integer</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries?per_page=1" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="all-countries-response"></pre>
                            </div>

                        </div>
                    </div>

                    <div id="country-by-name" class="content ">
                        <h4 class="title text-dark">Country by name</h4>

                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}
                                    /api/v1/countries/{country}</span></div>

                            <p>Returns information of a particular country. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{country}</td>
                                            <td>The name of the particular country you want to look up. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries/Nigeria</span></div>
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
                                            <td class="color-alert">none</td>
                                            <td>none</td>
                                            <td>none</td>
                                            <td>none</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries/Nigeria" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}" </pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
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
                        <h4 class="title text-dark">Country by continent</h4>
                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}
                                    /api/v1/countries?continent={continent}</span></div>

                            <p>Returns information of all countries in a continent. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>none</td>
                                            <td>none</td>
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
                                            <td class="color-alert">continent</td>
                                            <td>required</td>
                                            <td>Specifies continent to retrieve data on. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?continent=africa</span></div>
                                            </td>
                                            <td>String</td>

                                        </tr>
                                        <tr>
                                            <td class="color-alert">per_page</td>
                                            <td>optional</td>
                                            <td>Specifies number of items to return. Returns paginated data. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?continent=africa&per_page=5</span></div>

                                            </td>
                                            <td>integer</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries?continent=africa" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="countries-by-continent-response"></pre>
                            </div>

                        </div>

                    </div>

                    <div id="country-by-population" class="content ">
                        <h4 class="title text-dark">Country by Population</h4>

                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}
                                    /api/v1/countries?population_from={min_population}&population_to={max_population}</span>
                            </div>

                            <p>Returns information a list of countries filtered by their Population range. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>none</td>
                                            <td>none</td>
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
                                            <td class="color-alert">population_from</td>
                                            <td>optional</td>
                                            <td>Specifies countries population starting point i.e. smallest population.
                                                Example
                                                <div class="code"> <span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?population_from=500000</span></div>
                                            </td>
                                            <td>integer</td>

                                        </tr>
                                        <tr>
                                            <td class="color-alert">population_to</td>
                                            <td>optional</td>
                                            <td>Specifies countries population ending point i.e. largest population..
                                                Example
                                                <div class="code"> <span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?population_to=1000000</span></div>
                                            </td>
                                            <td>integer</td>

                                        </tr>
                                        <tr>
                                            <td class="color-alert">per_page</td>
                                            <td>optional</td>
                                            <td>Specifies number of items to return. Returns paginated data. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?continent=africa&per_page=5</span></div>

                                            </td>
                                            <td>integer</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries?population_from=20000&population_to=5000000" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="countries-by-population-response"></pre>


                            </div>
                        </div>

                    </div>

                    <div id="country-by-size" class="content ">
                        <h4 class="title text-dark">Country by Size </h4>
                        <div class="inner">
                            <div class="code">GET
                                <span class="url"> {{env('APP_URL')}}
                                    /api/v1/countries?size_from={min_size}&size_to={max_size}</span>
                            </div>

                            <p>Returns information a list of countries filtered by size (km²) range . </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>none</td>
                                            <td>none</td>
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
                                            <td class="color-alert">size_from</td>
                                            <td>optional</td>
                                            <td>Specifies countries size starting point i.e. smallest size.
                                                Example
                                                <div class="code"> <span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?size_from=10000</span></div>
                                            </td>
                                            <td>integer</td>

                                        </tr>
                                        <tr>
                                            <td class="color-alert">size_to</td>
                                            <td>optional</td>
                                            <td>Specifies countries population ending point i.e. largest size..
                                                Example
                                                <div class="code"> <span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?size_to=1000000</span></div>
                                            </td>
                                            <td>integer</td>

                                        </tr>
                                        <tr>
                                            <td class="color-alert">per_page</td>
                                            <td>optional</td>
                                            <td>Specifies number of items to return. Returns paginated data. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?size_from=10000&size_to=100000&per_page=5</span>
                                                </div>

                                            </td>
                                            <td>integer</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries?size_from=300&size_to=200000" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="country-by-size-response"></pre>


                            </div>
                        </div>


                    </div>

                    <div id="country-by-iso2" class="content ">
                        <h4 class="title text-dark">Country by ISO2</h4>
                        <div class="inner">
                            <div class="code">GET
                                <span class="url"> {{env('APP_URL')}}/api/v1/countries?iso2={iso2}</span>
                            </div>

                            <p>Returns information of a country by ISO2 code . </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>none</td>
                                            <td>none</td>
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
                                            <td class="color-alert">iso2</td>
                                            <td>optional</td>
                                            <td>Specifies country to retrieve by passing country's ISO2 code.
                                                Example
                                                <div class="code"> <span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?iso2=AO</span></div>
                                            </td>
                                            <td>String</td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries?iso2=GH" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="country-by-iso2-response"></pre>


                            </div>
                        </div>

                    </div>

                    <div id="country-by-iso3" class="content ">
                        <h4 class="title text-dark">Country by ISO3 - <span class="text-success">GET</span></h4>
                        <div class="inner">
                            <div class="code">GET
                                <span class="url"> {{env('APP_URL')}}/api/v1/countries?iso3={iso3}</span>
                            </div>

                            <p>Returns information of a country by ISO3 code . </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>none</td>
                                            <td>none</td>
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
                                            <td class="color-alert">iso3</td>
                                            <td>optional</td>
                                            <td>Specifies country to retrieve by passing country's ISO2 code.
                                                Example
                                                <div class="code"> <span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?iso3=AGO</span></div>
                                            </td>
                                            <td>String</td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries?iso3=AGO" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="country-by-iso3-response"></pre>


                            </div>
                        </div>

                    </div>

                    <div id="country-by-code" class="content ">
                        <h4 class="title text-dark">Country by Code </h4>

                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}
                                    /api/v1/countries?code={code}</span></div>

                            <p>Returns information of a single country by calling code. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>none</td>
                                            <td>none</td>
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
                                            <td class="color-alert">code</td>
                                            <td>required</td>
                                            <td>Specifies country to retrieve by passing country's calling code. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?code=234</span></div>
                                            </td>
                                            <td>String</td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries?code=234" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                {{--<pre id="country-by-continent-response"></pre>--}}


                            </div>
                        </div>
                    </div>
                    <div id="country-slim" class="content ">
                        <h4 class="title text-dark">Slim Country Response </h4>
                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}
                                    /api/v1/countries?fetch_type=slim</span></div>

                            <p>Returns minimal information of countries. Response will only include name, phone code,
                                flag and self link </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>none</td>
                                            <td>none</td>
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
                                            <td class="color-alert">fetch_type</td>
                                            <td>required</td>
                                            <td>Specifies that response should only include name, phone code,
                                                flag and self link . Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries?fetch_type=slim</span></div>
                                            </td>
                                            <td>String</td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I -X "Accept: application/json" "Authorization: Bearer ${TOKEN}" GET "{{env('APP_URL')}}
                                    /api/v1/countries?per_page=20"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="countries-slim"></pre>


                            </div>
                        </div>
                    </div>

                    <div id="presidents-by-country" class="content ">
                        <h4 class="title text-dark">Presidents by Country</h4>
                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}/api/v1/countries/{country}/presidents</span></div>

                            <p>Returns information on a country's past and present presidents and/or presidents </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{country}</td>
                                            <td>Specifies the country the name of the particular country you want to look up. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}
                                                        /api/v1/countries/india/presidents</span></div>
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
                                            <td >none</td>
                                            <td >none</td>
                                            <td >none</td>
                                            <td >none</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries/nigeria/presidents" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="presidents-response"></pre>


                            </div>
                        </div>

                    </div>


                    <div id="president-by-country-name" class="content ">
                        <h4 class="title text-dark">Presidents by Country and Name</h4>

                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}/api/v1/countries/{country}/presidents/{president}</span></div>

                            <p>Returns information on a particular country's presidents including leader's name, gender, appointment start and end date. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{country}</td>
                                            <td>Specifies the country the name of the particular country you want to look up. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}/api/v1/countries/india/presidents/{president}</span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{president}</td>
                                            <td>Specifies the president in the {country} you want to look up. Example
                                                <div class="code"><span class="url">{{env('APP_URL')}}/api/v1/countries/{country}/presidents/Ashraf Ghani</span></div>
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
                                            <td >none</td>
                                            <td >none</td>
                                            <td >none</td>
                                            <td >none</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries/nigeria/presidents/Muhammadu Buhari" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="president-by-country-name-response"></pre>

                            </div>
                        </div>
                    </div>

                    <div id="covid19" class="content ">
                        <h4 class="title text-dark">Covid 19 Cases Only</h4>

                        <div class="inner">
                            <div class="code">GET <span class="url">{{env('APP_URL')}}/api/v1/covid19</span></div>

                            <p>Returns countries information on Covid19 cases. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>none</td>
                                            <td>none</td>
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
                                            <td class="color-alert">per_page</td>
                                            <td>optional</td>
                                            <td>Specifies number of items to return.<br> Returns paginated data</td>
                                            <td>integer</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I -X "Accept: application/json" "Authorization: Bearer ${TOKEN}" GET "{{env('APP_URL')}}
                                    /api/v1/countries?per_page=1"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="covid19-response"></pre>


                            </div>
                        </div>

                    </div>


                    <div id="covid19-by-deaths" class="content ">
                        <h4 class="title text-dark">Covid 19 cases by death range only</h4>
                        <div class="inner">
                            <div class="code">GET <span class="url">{{env('APP_URL')}}
                                    /api/v1/covid19?death_from={minimum_death}&death_to={maximum-deaths}</span></div>

                            <p>Returns information countries Covid19 cases filtered by death rate. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>none</td>
                                            <td>none</td>
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
                                            <td class="color-alert">death_from</td>
                                            <td>optional</td>
                                            <td>Specifies countries covid19 death rate starting point i.e. lowest death rate.
                                                Example
                                                <div class="code"> <span class="url"> {{env('APP_URL')}}
                                                        /api/v1/covid19?death_from=10000</span></div>
                                            </td>
                                            <td>integer</td>

                                        </tr>
                                        <tr>
                                            <td class="color-alert">death_to</td>
                                            <td>optional</td>
                                            <td>Specifies countries covid19 death rate ending point i.e. highest death rate.
                                                Example
                                                <div class="code"> <span class="url"> {{env('APP_URL')}}
                                                        /api/v1/covid19?death_to=50000</span></div>
                                            </td>
                                            <td>integer</td>

                                        </tr>
                                        <tr>
                                            <td class="color-alert">per_page</td>
                                            <td>optional</td>
                                            <td>Specifies number of items to return.<br> Returns paginated data</td>
                                            <td>integer</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/covid19?death_from=1000&death_to1000000" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                {{--<pre id="covid19-response"></pre>--}}


                            </div>
                        </div>
                    </div>

                    <div id="covid19-by-total" class="content ">
                        <h4 class="title text-dark">Covid 19 cases by total confirmed range only</h4>

                        <div class="inner">
                            <div class="code">GET <span class="url">{{env('APP_URL')}}
                                    /api/v1/covid19?total_from={minimum_total}&death_to={maximum-total}</span></div>

                            <p>Returns information countries Covid19 cases filtered by total confirmed cases. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>none</td>
                                            <td>none</td>
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
                                            <td class="color-alert">total_from</td>
                                            <td>optional</td>
                                            <td>Specifies countries covid19 death rate starting point i.e. lowest death rate.
                                                Example
                                                <div class="code"> <span class="url"> {{env('APP_URL')}}/api/v1/covid19?total_from=3000</span></div>
                                            </td>
                                            <td>integer</td>

                                        </tr>
                                        <tr>
                                            <td class="color-alert">total_to</td>
                                            <td>optional</td>
                                            <td>Specifies countries covid19 death rate ending point i.e. highest death rate.
                                                Example
                                                <div class="code"> <span class="url"> {{env('APP_URL')}}/api/v1/covid19?total_to=500000</span></div>
                                            </td>
                                            <td>integer</td>

                                        </tr>
                                        <tr>
                                            <td class="color-alert">per_page</td>
                                            <td>optional</td>
                                            <td>Specifies number of items to return.<br> Returns paginated data</td>
                                            <td>integer</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/covid19?total_from=2000&total_to=10000000" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                {{--<pre id="covid19-response"></pre>--}}


                            </div>
                        </div>

                    </div>


                    <div id="state-by-country" class="content ">
                        <h4 class="title text-dark">State by Country Name </h4>
                        <div class="inner">
                            <div class="code">GET <span class="url">{{env('APP_URL')}}/api/v1/countries/{country}/states</span></div>

                            <p>Returns information a country's states. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{country}</td>
                                            <td>Specifies the country the name of the particular country you want to look up. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}/api/v1/countries/Nigeria/states</span></div>
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
                                            <td>none</td>
                                            <td>none</td>
                                            <td>none</td>
                                            <td>none</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries/Nigeria/states" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>
                                <pre id="states-response"></pre>


                            </div>
                        </div>
                    </div>

                    <div id="state-by-country-state" class="content ">
                        <h4 class="title text-dark">State by Country Name and State Name</h4>

                        <div class="inner">
                            <div class="code">GET <span class="url">{{env('APP_URL')}}/api/v1/countries/{country}/states/{state}</span></div>

                            <p>Returns information a country's states. </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{country}</td>
                                            <td>Specifies the country the name of the particular country you want to look up. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}/api/v1/countries/United States/states/{state}</span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{state}</td>
                                            <td>Specifies the state of the particular {country} you want to look up. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}/api/v1/countries/{country}/states/Alaska</span></div>
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
                                            <td>none</td>
                                            <td>none</td>
                                            <td>none</td>
                                            <td>none</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries/united-states/states/Alaska" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>
                                {{--<pre id="states-response"></pre>--}}


                            </div>
                        </div>

                    </div>

                    <div id="state-slim" class="content ">
                        <h4 class="title text-dark">Slim State Response </h4>

                        <div class="inner">
                            <div class="code">GET <span class="url"> {{env('APP_URL')}}/api/v1/countries/United-States/states?fetch_type=slim</span></div>

                            <p>Returns minimal information of country's state. Response will only include name, phone code,
                                flag and self link </p>
                            <div>
                                <h5>Parameters</h5>
                                <h6>Path Parameters</h6>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Path parameter</th>
                                            <th scope="col">Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>none</td>
                                            <td>none</td>
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
                                            <td class="color-alert">fetch_type</td>
                                            <td>required</td>
                                            <td>Specifies that response should only include name, ISO 2 code, ISO 3 code and self link. Example
                                                <div class="code"><span class="url"> {{env('APP_URL')}}/api/v1/countries/United-States/states?fetch_type=slim</span></div>
                                            </td>
                                            <td>String</td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div>
                                <h5>Sample Request</h5>
                                <pre class="pre-dark">curl -I "{{env('APP_URL')}}/api/v1/countries/united-states/states?fetch_type=slim" -H "Accept: application/json" -H "Authorization: Bearer {TOKEN}"</pre>
                                <p>In the sample request above, replace {TOKEN} with your actual token. <a
                                        href="{{url('/request-access-token')}}">Generate your Token here</a></p>
                            </div>
                            <div>
                                <h5>Sample Response</h5>

                                <pre id="states-slim"></pre>


                            </div>
                        </div>
                    </div>

                    <div id="references" class="content ">
                        <h4 class="title text-dark">References </h4>
                        <div class="inner">

                            <div class="alert">As much as we try to source data from reliable sources, the information
                                returned by
                                our api stands to be corrected in the case of spelling errors or invalid data.


                            </div>
                            <ul>
                                <li><a href="https://en.wikipedia.org/" target="_blank">https://en.wikipedia.org/</a>
                                </li>
                                <li><a href="https://www.worldometers.info/world-population" target="_blank">https://www.worldometers.info/world-population</a>
                                </li>
                                <li><a href="https://covid19.who.int/" target="_blank">https://covid19.who.int</a></li>
                            </ul>

                            <small>See <a href="{!! route("feedback") !!}">Feedback</a> to submit errors or new feature
                                suggestions
                            </small>
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

