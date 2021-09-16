<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ url('/') }}">Impact Africa</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="{{ asset('Anyar/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        @if ($view_name === 'home')
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
        @else
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Accueil</a></li>
        @endif
        @if ($view_name === 'home')
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
        @endif
          <li><a class="nav-link scrollto" href="#team">Direction</a></li>
        @if ($view_name === 'home')
          <li><a class="nav-link scrollto" href="#pricing">Plus demandés</a></li>
          <li><a href="#faq">F.A.Q</a></li>
        @endif
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

