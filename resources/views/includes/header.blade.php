<!-- ======= Header ======= -->
@if ($view_name === 'about')
  <header id="header" class="fixed-top d-flex align-items-center custom-fixed-header">
@else
  <header id="header" class="fixed-top d-flex align-items-center">
@endif
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ url('/') }}"> <img src="{{ asset('assets/img/logo/impc1.png') }}" alt=""> Impact Africa</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="{{ asset('Anyar/assets/img/logo.png') }}" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
              @if ($view_name === 'home')
                <li><a class="nav-link scrollto active" href="#hero">@lang('public.Acceuil')</a></li>
              @else
                <li><a class="nav-link scrollto active" href="{{ url('/') }}">Acceuil</a></li>
              @endif
                <li><a class="nav-link scrollto" href="#about">@lang('public.Apropos')</a></li>
              @if ($view_name === 'home')
                <li><a class="nav-link scrollto" href="#services">@lang('public.Services')</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">@lang('public.Réalisations')</a></li>
                <li><a class="nav-link scrollto" href="#pricing">@lang('public.Plus-démandés')</a></li>
                <li><a href="#faq">F.A.Q</a></li>
              @endif
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                <li class=" nav-item dropdown ">
                      <a  href="#" class= "nav-link dropdown-toggle" data-toggle="dropdown"  >
                      @lang('public.language')
                      </a>

                     <div class="dropdown-menu" >
                      <a class="dropdown-item text-dark" href="locale/en"> English <img src="{{ asset('assets/img/logo/flag-1.jpg') }}" alt=""></a>
                      <a class="dropdown-item text-dark" href="locale/fr"> Francais <img src="{{ asset('assets/img/logo/flag-2.jpg') }}" alt=""></a>
                     </div>
                  </li>
         </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->










