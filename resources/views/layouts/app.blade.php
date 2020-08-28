<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" />
<head>

  {{-- Required Meta tags --}}
  <meta charset="UTF-8" />
  <meta name="keywords" content="HTML, CSS, JavaScript, PHP, Laravel" />
  <meta name="description" content="Community Website" />
  <meta name="author" content="Muhamad Rezky Rizaldi" />
  {{-- <meta http-equiv="refresh" content="30" /> --}}
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
  <link rel="icon" href="/favicon.ico" type="x-icon" />
  <title>@yield('title')</title>

  {{-- Bootstrap CSS --}}
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css" />

  {{-- FontAwesome Icons --}}
  <link rel="stylesheet" href="/assets/fonts/pro/css/all.css" />

  {{-- Main CSS --}}
  <link rel="stylesheet" href="/assets/css/style.css" />

</head>

<body>

  @section('header')
  @parent
  @include('layouts.header')
  @show

  @yield('content')

  @section('footer')
  @parent
  @include('layouts.footer')
  @show


  {{-- Bootstrap JavaScript --}}
  <script type="text/javascript" src="/assets/js/jquery-3.5.1.js"></script>
  <!-- <script type="text/javascript" src="/assets/js/jquery-3.5.1.slim.min.js"></script> -->
  <script type="text/javascript" src="/assets/js/popper.min.js"></script>
  <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery-migrate.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.0.0/dist/tf.min.js"></script> -->
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@tensorflow-models/body-pix@1.0.0"></script>  -->

  {{-- Icons --}}
  <script type="text/javascript" src="/assets/fonts/pro/js/all.js"></script>

  {{-- Discord API --}}
  <script src="https://discordapp.com/api/guilds/715019741344825417/widget.json"></script>

  {{-- Google Translate JavaScript --}}
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  {{-- My Script --}}
  <script type="text/javascript" src="/assets/js/script.js"></script>

</body>

</html>

