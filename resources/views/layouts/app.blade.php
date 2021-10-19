<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Africa - Accueil</title>
  <meta content="" name="description">
  <meta content="impact, africa, sarl, impact-africa, impact africa, btp" name="keywords">
  <meta name="author" content="XCODERS">

  <!-- Favicons -->
  <link href="{{ asset('favicon.ico') }}" rel="icon">
  <link href="{{ asset('favicon.ico') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Styles -->
  @include('includes.css')
</head>

<body>

  <!-- Top Bar -->
    @if ($view_name === 'home')
        @include('includes.topbar')
    @endif

  <!-- Header -->
  @include('includes.header')

  <!-- Hero -->
    @if ($view_name === 'home')
        @include('layouts.hero')
    @endif

    <!-- #main -->
  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- Footer -->
  @include('includes.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Scripts -->
  @include('includes.js')

</body>

</html>
