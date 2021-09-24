<!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-building"></i></div>
              <h4 class="title"><a href="">@lang('public.Partenaire-title')</a></h4>
                <p class="description">

                    @lang('public.Partenaire')

                </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user"></i></div>
              <h4 class="title"><a href="">@lang('public.clients-stitle')</a></h4>
              <p class="description">

                @lang('public.clients-s')

              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-box"></i></div>
              <h4 class="title"><a href="">@lang('public.projet-mtitle')</a></h4>
              <p class="description">

                @lang('public.projet-m')

              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4 class="title"><a href="">@lang('public.projet-ctitle')</a></h4>
              <p class="description">

                @lang('public.projet-c')

                </p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>@lang('public.propos-title')</h2>
            <p>

                @lang('public.propos')

            </p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <a href="{{ route('about') }}" class="btn-learn-more pos">@lang('public.button')</a>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>

                @lang('public.text2')

            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->



    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch position-relative video-box why-us-img" style='background-image: url("{{ asset('Anyar/assets/img/c6.jpg') }}");' data-aos="fade-right">
            <!--<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>-->
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3>@lang('public.page3-title1') <strong>@lang('public.page3-title2')</strong></h3>
              <p>

                @lang('public.page3-stitle3')

              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>@lang('public.section01-title')<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>

                        @lang('public.section01')

                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>@lang('public.section02-title')<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>

                        @lang('public.section02')

                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>@lang('public.section03-title') <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>

                        @lang('public.section03')

                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <i class="bi bi-layers"></i>
              <h4 style="color:#05579e ;">@lang('public.activite1')</h4>
              <p>

                @lang('public.sujet1')

                </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <i class="bi bi-briefcase"></i>
              <h4 style="color:#05579e ;">@lang('public.activite2')</h4>
              <p>

                @lang('public.sujet2')

              </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-box-seam"></i>
              <h4 style="color:#05579e ;">@lang('public.activite3')</h4>
              <p>

                @lang('public.sujet3')

            </p>
              </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-map"></i>
              <h4 style="color:#05579e ;">@lang('public.activite4')</h4>
              <p>

                @lang('public.sujet4')

            </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-bricks"></i>
              <h4 style="color:#05579e ;">@lang('public.activite5')</h4>
              <p>

                @lang('public.sujet5')

            </p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="bi bi-capslock"></i>
              <h4 style="color:#05579e ;">@lang('public.activite6')</h4>
              <p>

                @lang('public.sujet6')

                </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

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

    <!-- ======= Portfoio Section ======= -->
    <section id="portfolio" class="portfoio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>@lang('public.page6-title')</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">@lang('public.img1-title1')</li>
              <li data-filter=".filter-web">@lang('public.img2-title1')</li>
              <li data-filter=".filter-card">@lang('public.img3-title1')</li>
              <li data-filter=".filter-app">@lang('public.img4-title1')</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('assets/img/engins/engin1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>@lang('public.img4-title1')</h4>
              <p>Bulldozer</p>
              <a href="{{ asset('assets/img/engins/engin1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Caterpilar"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('assets/img/chantiers/chantier1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>@lang('public.img2-title1')</h4>
              <a href="{{ asset('assets/img/chantiers/chantier1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Construction de pont"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{ asset('assets/img/finitions/plan1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>@lang('public.img3-title1')</h4>
              <a href="{{ asset('assets/img/finitions/plan1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Plan"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{ asset('assets/img/finitions/travailleur1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>@lang('public.img3-title1')</h4>
              <a href="{{ asset('assets/img/finitions/travailleur1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Travailleur"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('assets/img/chantiers/chantier2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>@lang('public.img2-title1')</h4>
              <a href="{{ asset('assets/img/chantiers/chantier2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Structure immobilière"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('assets/img/engins/engin2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>@lang('public.img4-title1')</h4>
              <a href="{{ asset('assets/img/engins/engin2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Pelleteuse"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('assets/img/chantiers/chantier3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>@lang('public.img2-title1')</h4>
              <a href="{{ asset('assets/img/chantiers/chantier3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Terrain plat"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('assets/img/chantiers/chantier4.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>@lang('public.img2-title1')</h4>
              <a href="{{ asset('assets/img/chantiers/chantier4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Cité"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ asset('assets/img/engins/engin3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>@lang('public.img4-title1')</h4>
              <a href="{{ asset('assets/img/engins/engin3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Camion de chargement"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfoio Section -->

    <!-- ======= Team Section ======= -->





    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>@lang('public.page7-title')</h2>
          <p>
            @lang('public.page7-stitle')
          </p>
        </div>

        <div class="row most-demand-div">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <!--<span class="advanced">Plus demandé</span>-->
              <h3>@lang('public.demand1-title')</h3>
              <h4>55 <sup>%</sup></h4>
              <ul>
                <li>@lang('public.demand1') </li>
                <!--<li>Camions (Trucks)</li>
                <li>Véhicules de chantiers 4X4</li>
                <li>Bétonnières</li>-->
              </ul>
              <div class="btn-wrap">
                <a href="#contact" class="btn-buy">@lang('public.demand-button')</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>@lang('public.demand2-title')</h3>
              <h4>45 <sup>%</sup></h4>
              <ul>
                <li>@lang('public.demand2')</li>
              </ul>
              <div class="btn-wrap">
                <a href="#contact" class="btn-buy">@lang('public.demand-button')</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"> @lang('public.question1') <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                    @lang('public.reponse1')
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">@lang('public.question2')<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                    @lang('public.reponse2')
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">@lang('public.question3') <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                    @lang('public.reponse3')
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

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
