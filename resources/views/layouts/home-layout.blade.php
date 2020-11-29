<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />
    <title>Restful Countries - @yield("title")</title>

    <link rel="shortcut icon" href="{!! asset("storage/images/logo/logo-white.png") !!}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{!! asset("storage/css/bootstrap.min.css") !!}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{!! asset("storage/css/materialdesignicons.min.css") !!}" />

    <link rel="stylesheet" type="text/css" href="{!! asset("storage/css/fontawesome.css") !!}" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{!! asset("storage/css/selectize.css") !!}" />

    <!--Slider-->
    <link rel="stylesheet" href="{!! asset("storage/css/owl.carousel.css") !!}" />
    <link rel="stylesheet" href="{!! asset("storage/css/owl.theme.css") !!}" />
    <link rel="stylesheet" href="{!! asset("storage/css/owl.transitions.css") !!}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{!! asset("storage/css/style.css") !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset("storage/css/custom.css") !!}" />
    @yield("page-style")
</head>
<body>
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


@yield("page-content")



<span>
       <hr>
    </span>
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="">
                    <p class="mb-0">© 2020 Restful Countries</p>
                </div>
                <div style="margin-top:10px;">
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-github-circle"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--end container-->
</footer><!--end footer-->
<!-- Footer End -->


<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top">
    <i class="mdi mdi-chevron-up d-block"> </i>
</a>
<!-- Back to top -->

<!-- javascript -->
<script src="{!! asset("storage/js/jquery.min.js") !!}"></script>
<script src="{!! asset("storage/js/bootstrap.bundle.min.js") !!}"></script>
<script src="{!! asset("storage/js/jquery.easing.min.js") !!}"></script>
<script src="{!! asset("storage/js/plugins.js") !!}"></script>

<!-- selectize js -->
<script src="{!! asset("storage/js/selectize.min.js") !!}"></script>
<script src="{!! asset("storage/js/jquery.nice-select.min.js") !!}"></script>

<script src="{!! asset("storage/js/owl.carousel.min.js") !!}"></script>
<script src="{!! asset("storage/js/counter.int.js") !!}"></script>

<script src="{!! asset("storage/js/app.js") !!}"></script>
<script src="{!! asset("storage/js/home.js") !!}"></script>
<script src="{!! asset("storage/users/plugin/modal/remodal/remodal.min.js") !!}"></script>
@yield("page-script")

</body>
</html>
