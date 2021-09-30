<!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:impactafrica@hotmail.com">impactafrica@hotmail.com</a> / <a href="mailto:impactafrica09@gmail.com">impactafrica09@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i>(00224) 629-93-47-47 / 629-93-48-48
      </div>
      <div class="cta d-none d-md-block">
        @if ($view_name === 'home')
            <a href="#about" class="scrollto">@lang('public.decouvrir')</a>
        @else
            <a href="#contact" class="scrollto">@lang('public.Contact')</a>
        @endif
      </div>
    </div>
  </div>
