<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title id="tab-title">Administrator - @yield("title")</title>

    <link rel="shortcut icon" href="{!! asset('assets/images/logo/logo-white.png') !!}">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{!! asset('assets/admin/styles/style.min.css') !!}">

    <!-- Themify Icon -->
    <link rel="stylesheet" href="{!! asset('assets/admin/fonts/themify-icons/themify-icons.css') !!}">

    <!-- Data Tables -->
    <link rel="stylesheet" href="{!! asset('assets/admin/plugin/datatables/media/css/dataTables.bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/admin/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/admin/styles/custom.css') !!}">
    <link rel="stylesheet" href="{!! asset("assets/admin/plugin/toastr/toastr.css") !!}">
    <link rel="stylesheet" href="{!! asset("assets/admin/plugin/modal/remodal/remodal.css") !!}">
    <link rel="stylesheet" href="{!! asset("assets/admin/plugin/modal/remodal/remodal-default-theme.css") !!}">
    @yield("page-style")
</head>
<body>
<div class="main-menu">
    <header class="header">
        <div class="logo">
            <a href="{!! route("home") !!}" target="_blank"><img src="{!! asset('assets/images/logo/logo-blue.png') !!}" alt="Restful Countries" /></a>
        </div>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <h5 class="title">Menu</h5>
            <!-- /.title -->
            <ul class="menu js__accordion">
                @if(helper::instance()->isPermitted("VIEW DASHBOARD"))
                    <li class="@yield('dashboard')">
                        <a class="waves-effect" href="{!! route("admin.dashboard") !!}"><i class="menu-icon ti-dashboard"></i><span>Dashboard</span></a>
                    </li>
                @endif
                @if(helper::instance()->isPermitted("VIEW COUNTRY"))
                    <li class="@yield("countries")">
                        <a class="waves-effect" href="{!! route("admin.countries") !!}"><i class="menu-icon ti-map"></i><span>Countries</span></a>
                    </li>
                @endif
                @if(helper::instance()->isPermitted("VIEW FEEDBACKS"))
                    <li class="@yield('feedbacks')">
                        <a class="waves-effect" href="{!! route("admin.feedbacks") !!}"><i class="menu-icon ti-thumb-up"></i><span>Feedbacks</span></a>
                    </li>
                @endif
                @if(helper::instance()->isPermitted("VIEW API REQUESTS"))
                    <li class="@yield('api-requests')">
                        <a class="waves-effect" href="{!! route("admin.api_requests") !!}"><i class="menu-icon ti-signal"></i><span>Api Requests</span></a>
                    </li>
                @endif
                @if(helper::instance()->isPermitted("MANAGE TOKEN"))
                    <li class="@yield('tokens')">
                        <a class="waves-effect" href="{!! route("admin.api_tokens") !!}"><i class="menu-icon ti-key"></i><span>Api Tokens</span></a>
                    </li>
                @endif
                @if(helper::instance()->isPermitted("MANAGE USER"))
                    <li class="@yield('users')">
                        <a class="waves-effect" href="{!! route("admin.users") !!}"><i class="menu-icon ti-user"></i><span>Users</span></a>
                    </li>
                @endif
                @if(helper::instance()->isPermitted("MANAGE ROLE"))
                    <li class="@yield('roles')">
                        <a class="waves-effect" href="{!! route("admin.roles") !!}"><i class="menu-icon ti-lock"></i><span>Roles</span></a>
                    </li>
                @endif
                <li class="@yield('profile')">
                    <a class="waves-effect" href="{!! route("admin.profile") !!}"><i class="menu-icon ti-server"></i><span>Profile</span></a>
                </li>
            </ul>
            <!-- /.menu js__accordion -->
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title">@yield("page-title")</h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">


        <div class="ico-item">
            <i class="ti-user"></i>
            <ul class="sub-ico-item">
                <li><a href="{!! route("admin.profile") !!}">Profile</a></li>
                <li><a  href="{!! route("admin.logout") !!}">Log Out</a></li>
            </ul>
            <!-- /.sub-ico-item -->
        </div>
    </div>
    <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->


<div id="wrapper">
    @yield("page-content")
</div>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="{!! asset('assets/script/html5shiv.min.js') !!}"></script>
    <script src="{!! asset('assets/script/respond.min.js') !!}"></script>
    <![endif]-->

<script src="{!! asset('assets/admin/scripts/jquery.min.js') !!}"></script>

<!-- Data Tables -->
<script src="{!! asset('assets/admin/plugin/datatables/media/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('assets/admin/plugin/datatables/media/js/dataTables.bootstrap.min.js') !!}"></script>
<script src="{!! asset('assets/admin/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js') !!}"></script>
<script src="{!! asset('assets/admin/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js') !!}"></script>
<script src="{!! asset('assets/admin/scripts/datatables.demo.min.js') !!}"></script>

<script src="{!! asset('assets/admin/scripts/main.min.js') !!}"></script>
<script src="{!! asset("assets/admin/plugin/toastr/toastr.min.js") !!}"></script>
<!-- Remodal -->
<script src="{!! asset("assets/admin/plugin/modal/remodal/remodal.min.js") !!}"></script>

@if(Session::has("success"))
    <script>
        Command: toastr["success"]("{!! Session::get("success") !!}", "Success")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "rtl": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 10000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
@endif
@if(Session::has("error"))
    <script>
        Command: toastr["error"]("{!! Session::get("error") !!}", "Error")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "rtl": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 10000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
@endif

@if(Session::has("errors"))
    <script>
        Command: toastr["error"]("{!! $errors->first() !!}", "Error")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "rtl": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 10000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
@endif
@yield("page-script")
</body>
</html>

