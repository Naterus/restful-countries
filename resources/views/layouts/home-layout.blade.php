<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield("page-description")" />
    <meta name="keywords" content="Countries,States Api, Restful api,Covid19,Countries Api,Continents,Api,Earth,States,Presidents, Presidents Api, Independence, Donations" />
    <meta name="author" content="Nathan Dauda">
    <meta property="og:image" itemprop="image" content="{!! asset("storage/images/logo/logo-w-b.png") !!}">
    <title>Restful Countries - @yield("title")</title>

    <link rel="shortcut icon" href="{!! asset("storage/images/logo/logo-white.png") !!}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{!! asset("storage/css/bootstrap.min.css") !!}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{!! asset("storage/css/materialdesignicons.min.css") !!}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{!! asset("storage/css/style.css") !!}" />

    @yield("page-style")
</head>
<body>

@yield('nav-bar')


@yield("page-content")



<span>
       <hr>
    </span>
<footer class="footer footer-bar">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <div style="margin-top:10px;">
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="https://twitter.com/restfulcountrie" target="_blank"  class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="mail-to:support@restfulcountries.com" class="rounded"><i class="mdi mdi-email"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-github-circle"></i></a></li>
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
<script src="{!! asset("storage/js/jquery.min.js") !!}"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="{!! asset("storage/js/plugins.js") !!}"></script>

@yield("page-script")

</body>
</html>
