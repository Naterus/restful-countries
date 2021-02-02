<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4ZP57S5Q18"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield("page-description")" />
    <meta name="keywords" content="Countries,States Api, Restful api,Covid19,Countries Api,Continents,Api,Earth,States,Presidents, Presidents Api, Independence, Donations" />
    <meta name="author" content="Nathan Dauda">
    <meta property="og:image" itemprop="image" content="{!! asset("assets/images/logo/logo-w-b.png") !!}">


    <link rel="shortcut icon" href="{!! asset("assets/images/logo/logo-white.png") !!}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--Material Icon -->
{{--    <link rel="stylesheet" type="text/css" href="{!! asset("assets/css/materialdesignicons.min.css") !!}" />--}}

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{!! asset("assets/css/style.css") !!}" />

</head>
<body>
<div id="app">

    <navigation></navigation>
    <router-view></router-view>
    <footer-view></footer-view>

</div>
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="{!! asset("assets/js/plugins.js") !!}" defer></script>

<script src="{!! asset("js/app.js") !!}"></script>

<script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>

</body>
</html>

