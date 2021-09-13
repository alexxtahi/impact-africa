<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Africa - Accueil</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Anyar/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('Anyar/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Styles -->
  @include('includes.css')
</head>

<body>

  <!-- Top Bar -->
  @include('includes.topbar')

  <!-- Header -->
  @include('includes.header')

  <!-- Hero -->
  @include('layouts.hero')

  <main id="main"><!-- #main -->

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
