

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restful Countries - Login</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="shortcut icon" href="{!! asset("assets/images/logo/logo-white.png") !!}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{!! asset("assets/css/bootstrap.min.css") !!}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{!! asset("assets/css/materialdesignicons.min.css") !!}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{!! asset("assets/css/style.css") !!}" />

    <link rel="stylesheet" type="text/css" href="{!! asset("assets/css/custom.css") !!}" />

</head>

<body>

<!-- Hero Start -->
<section class="vh-100" style="background: url('{!! asset("assets/images/login.jpg") !!}') center center;">

    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="login-page bg-white shadow rounded p-4">
                            <div class="text-center">
                                <a href="{!! route('home') !!}"><img src="{!! asset("assets/images/logo/logo-v.png") !!}" alt="" class="logo-light" height="100" style="margin-bottom:30px;"/></a>

                            </div>
                            <form class="login-form" action="{!! route("admin.login.attempt") !!}" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <label>Email address</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email"  required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <label>Password </label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-0">
                                        <button class="btn btn-primary w-100">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div><!---->
                    </div> <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </div>
    </div>
</section><!--end section-->
<!-- Hero End -->

<!-- javascript -->
<script src="{!! asset("assets/js/jquery.min.js") !!}"></script>
<script src="{!! asset("assets/js/bootstrap.bundle.min.js") !!}"></script>
<script src="{!! asset("assets/js/jquery.easing.min.js") !!}"></script>
<script src="{!! asset("assets/js/plugins.js") !!}"></script>


<script src="{!! asset("assets/js/app.js") !!}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(Session::has('error'))
    <script>
        swal("Login Failed!", "{!! Session::get('error') !!}.", "error");
    </script>
@endif
</body>
</html>
