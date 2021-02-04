<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4ZP57S5Q18"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="Countries,States Api, Restful api,Covid19,Countries Api,Continents,Api,Earth,States,Presidents, Presidents Api, Independence, Donations" />
    <meta name="author" content="Nathan Dauda">
    <meta property="og:image" itemprop="image" content="{!! asset("assets/images/logo/logo-w-b.png") !!}">
    <link rel="shortcut icon" href="{!! asset("assets/images/logo/logo-white.png") !!}">
    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{!! asset("css/app.css") !!}" />
    <link rel=stylesheet href=https://cdn.jsdelivr.net/npm/pretty-print-json@0.0/dist/pretty-print-json.css>

</head>
<body>
<div id="app">

    <doc-navigation></doc-navigation>
    <router-view></router-view>
    <footer-view></footer-view>

</div>



<script src="{!! asset("js/app.js") !!}"></script>

</body>
</html>

