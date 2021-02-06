

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href={{ asset("assets/css/bootstrap.min.css") }}>

<link rel="stylesheet" href={{ asset("assets/css/animate.min.css") }}>

<link rel="stylesheet" href={{ asset("assets/css/meanmenu.css") }}>

<link rel="stylesheet" href={{ asset("assets/css/boxicons.min.css") }}>

<link rel="stylesheet" href={{ asset("assets/css/owl.carousel.min.css") }}>

<link rel="stylesheet" href={{ asset("assets/css/owl.theme.default.min.css") }}>

<link rel="stylesheet" href={{ asset("assets/css/magnific-popup.min.css") }}>

<link rel="stylesheet" href={{ asset("assets/css/style.css") }}>

<link rel="stylesheet" href={{ asset("assets/css/responsive.css") }}>
<title>{{ $titrePage ?? "Site d'actualité" }}</title>
<link rel="icon" type="image/png" href={{ asset("assets/img/favicon.png") }}>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f8f1bcfcb3f91001234d2e6&product=inline-share-buttons" async="async"></script>

</head>
<body>

<div class="preloader">
<div class="loader">
<div class="wrapper">
<div class="circle circle-1"></div>
<div class="circle circle-1a"></div>
<div class="circle circle-2"></div>
<div class="circle circle-3"></div>
</div>
<span>LE SENEVE</span>
<span>Chargement...</span>
</div>
</div>


@include('partials.header')
@yield('content')
@include('partials.footer')

<div class="go-top">
<i class='bx bx-up-arrow-alt'></i>
</div>
<script src={{ asset("assets/js/jquery.min.js") }}></script>

<script src={{ asset("assets/js/popper.min.js") }}></script>

<script src={{ asset("assets/js/bootstrap.min.js") }}></script>

<script src={{ asset("assets/js/jquery.meanmenu.js") }}></script>

<script src={{ asset("assets/js/owl.carousel.min.js") }}></script>

<script src={{ asset("assets/js/jquery.magnific-popup.min.js") }}></script>

<script src={{ asset("assets/js/jquery.ajaxchimp.min.js") }}></script>

<script src={{ asset("assets/js/form-validator.min.js") }}></script>

<script src={{ asset("assets/js/contact-form-script.js") }}></script>

<script src={{ asset("assets/js/wow.min.js") }}></script>

<script src={{ asset("assets/js/main.js") }}></script>
</body>
</html>