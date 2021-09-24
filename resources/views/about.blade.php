@extends('layouts.app')
@section('content')

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <img class="about-logo" src="{{ asset('assets/img/logo/logo-impact-afrique.png') }}" alt="Logo d'Impact Africa">
            <h2>IMPACT AFRICA</h2>
            <p class="about-infos">


               @lang('public.about-page')


                <br><br>
                <strong>Historique</strong>
                <br>

                        @lang('public.about-page')

                <strong>@lang('public.about-page2')</strong>.

                @lang('public.about-page3')

                <strong>@lang('public.about-page4')</strong>.
                @lang('public.about-page5')
                <strong>@lang('public.about-page6')</strong> @lang('public.about-page7') <strong>@lang('public.about-page8')</strong>
                @lang('public.about-page9') <strong>@lang('public.about-page10')</strong>.
                <br><br>
                <strong>@lang('public.about-page11')</strong>
                <br>

                @lang('public.about-page12')


            </p>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>@lang('public.page5-title')</h3>
            <p>

                @lang('public.page5')

            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>@lang('public.page9-title')</h2>
          </div>
          <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
            <div class="col-lg-5">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>@lang('public.adresse')</h4>
                  <p>@lang('public.text-adress')</p>
                </div>
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>E-mail:</h4>
                  <p>impactafrica@hotmail.com</p>
                  <p>impactafrica09@gmail.com</p>
                  <p>impactafricaweb1@outlook.de</p>
                </div>
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>@lang('public.tel')</h4>
                  <p>(00224) 629-93-47-47</p>
                  <p>(00224) 629-93-48-48</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder=@lang('public.page9-nom')  required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder=@lang('public.page9-sujet')  required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder=@lang('public.page9-message') of Matoto required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">@lang('public.chargement')</div>
                  <div class="error-message"></div>
                  <div class="sent-message">@lang('public.message-sent')</div>
                </div>
                <div class="text-center"><button type="submit">@lang('public.send')</button></div>
              </form>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->

@endsection
