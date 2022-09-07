<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>KP Minerals</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Directorate of Mines Minerals">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="{{asset('assets/images/logo.png')}}">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
  <!-- Animation -->
  <link rel="stylesheet" href="{{asset('assets/plugins/animate-css/animate.css')}}">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick-theme.css')}}">
  <!-- Colorbox -->
  <link rel="stylesheet" href="{{asset('assets/plugins/colorbox/colorbox.css')}}">
  <!-- Template styles-->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  @yield("styles")
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YNE068EFN1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YNE068EFN1');
</script>
</head>
<body>
  <div class="body-inner">

  @include("web.layouts.header")

    @yield('body')

@include("web.layouts.footer")


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="{{asset('assets/plugins/jQuery/jquery.min.js')}}"></script>
  <!-- Bootstrap jQuery -->
  <script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}" defer></script>
  <!-- Slick Carousel -->
  <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
  <script src="{{asset('assets/plugins/slick/slick-animation.min.js')}}"></script>
  <!-- Color box -->
  <script src="{{asset('assets/plugins/colorbox/jquery.colorbox.js')}}"></script>
  <!-- shuffle -->
  <script src="{{asset('assets/plugins/shuffle/shuffle.min.js')}}" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="{{asset('assets/plugins/google-map/map.js')}}" defer></script>

  <!-- Template custom -->
  <script src="{{asset('assets/js/script.js')}}"></script>
@yield("scripts")

  </div><!-- Body inner end -->
  </body>

  </html>