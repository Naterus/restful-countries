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