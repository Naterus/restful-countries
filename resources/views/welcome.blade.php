
@extends("layouts.home-layout")
@section("title","Get countries data via restful api")
@section("page-description")
    Get countries information like states, covid19 summary, presidents, flag, population and others via Restful Api.
@endsection
@section('nav-bar')
    <!-- Navigation Bar-->
<header  id="topnav" class="defaultscroll scroll-active">
    <!-- Tagline STart -->
    <div class="tagline">
        <div class="container">
            <div class="float-left">
                <div class="email">
                    <a href="mail-to:support@restfulcountries.com">
                        <i class="mdi mdi-email"></i> support@restfulcountries.com
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Tagline End -->
    <!-- Menu Start -->
    <div class="container">
        <!-- Logo container-->
        <div>
            <a href="{!! route("home") !!}" class="logo">
                <img  alt="Restful Countries" src="{!! asset("storage/images/logo/logo-white.png") !!}" class="logo-light" height="60" />
                <img  alt="Restful Countries" src="{!! asset("storage/images/logo/logo-w-b.png") !!}" class="logo-dark" height="60" />
            </a>
        </div>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{!! route('home') !!}">Home</a></li>
                <li>
                    <a href="{!! route("documentation",env("APP_VERSION")) !!}">Documentation</a>
                </li>
                <li>
                    <a  href="{!! route("feedback") !!}">Feedback</a>
                </li>
                <li>
                    <a  href="{!! route("donate") !!}">Donate</a>
                </li>

            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
    <!--end end-->
</header><!--end header-->
<!-- Navbar End -->
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

