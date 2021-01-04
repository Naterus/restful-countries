<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield("page-description")" />
    <meta name="keywords" content="Countries,States Api, Restful api,Covid19,Countries Api,Continents,Api,Earth,States,Presidents, Presidents Api, Independence, Donations" />
    <meta name="author" content="Nathan Dauda">
    <meta property="og:image" itemprop="image" content="{!! asset("assets/images/logo/logo-w-b.png") !!}">
    <title>Restful Countries - @yield("title")</title>

    <link rel="shortcut icon" href="{!! asset("assets/images/logo/logo-white.png") !!}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{!! asset("assets/css/materialdesignicons.min.css") !!}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{!! asset("assets/css/style.css") !!}" />

    @yield("page-style")
</head>
<body>

@yield('nav-bar')


@yield("page-content")



<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <div style="margin-top:10px;">
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="https://github.com/Naterus/restful-countries" target="_blank" class="rounded"><i class="mdi mdi-github-circle"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/restfulcountrie" target="_blank"  class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="mailto:support@restfulcountries.com" target="_blank" class="rounded"><i class="mdi mdi-email"></i></a></li>
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

<!-- Jquery -->
<script src="{!! asset("assets/js/jquery.min.js") !!}"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="{!! asset("assets/js/plugins.js") !!}" defer></script>
<script src="{!! asset("assets/js/pretty-print-json.js") !!}"></script>
<script src="{!! asset("assets/js/app.js") !!}"></script>
@yield("page-script")

</body>
</html>
