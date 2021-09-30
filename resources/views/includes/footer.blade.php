<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>@lang('public.newsletter')</h4>
            <p>@lang('public.newsletter-message')</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value=@lang('public.souscrire')>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>@lang('public.liens')</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">@lang('public.Acceuil')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">@lang('public.Apropos')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/').'#services' }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/').'#portfolio' }}">@lang('public.Réalisations')</a></li>
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Termes des services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Police de confidentialité</a></li>-->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>@lang('public.nservies')</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a>@lang('public.activite1')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>@lang('public.activite2')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>@lang('public.activite3')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>@lang('public.activite4')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>@lang('public.activite5')</a></li>
              <li><i class="bx bx-chevron-right"></i> <a>@lang('public.activite6')</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>@lang('public.page9-title')</h4>
            <p>
              @lang('public.text-adress')<br>
              B.P. 2411 CONAKRY, @lang('public.countries')<br>
              <strong>@lang('public.tel')</strong><br>(00224) 629-93-47-47<br>(00224) 629-93-48-48<br>
              <strong>E-mail:</strong><br> impactafrica@hotmail.com<br>impactafrica09@gmail.com
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>@lang('public.about-impact')</h3>
            <p>@lang('public.text-impact')</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; @lang('public.auteur') <strong><span>Impact Africa</span></strong>. @lang('public.reserve')
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/ -->
        @lang('public.design') <a href="#">XCoders</a>
      </div>
    </div>
  </footer><!-- End Footer -->
