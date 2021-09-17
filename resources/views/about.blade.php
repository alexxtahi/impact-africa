@extends('layouts.app')
@section('content')

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <img class="about-logo" src="{{ asset('assets/img/logo/logo-impact-afrique.png') }}" alt="Logo d'Impact Africa">
            <h2>IMPACT AFRICA</h2>
            <p class="about-infos">
                IMPACT AFRICA SARL est une entreprise générale évoluant dans les domaines de la construction
                et des travaux publics. Elle est enregistrée et basée en République de Guinée.
                La société s’est forgée une solide réputation aussi bien au niveau des particuliers Guinéens,
                qu'au niveau du secteur privé et du gouvernement ; En mettant l’accent sur la qualité du travail,
                le respect des délais et des spécifications des clients ainsi que la rentabilité des coûts.
                <br><br>
                <strong>Historique</strong>
                <br>
                L’idée et la motivation derrière la création de l’entreprise ayant été de participer positivement
                au développement de l’Afrique en général et de la Guinée en particulier. D’où son nom.
                Elle a été créée en 2009 en tant qu'entreprise individuelle
                et sous le numéro d'enregistrement <strong>RCCM/GC-KAL/025.747A/2009</strong>.
                Elle est devenue une société à responsabilité limitée
                en 2011 avec trois actionnaires et sous le numéro
                d'enregistrement <strong>RCCM/GC-KAL-M2/036.896/2011</strong>.
                Elle est enregistrée auprès de l'autorité fiscale sous le numéro
                <strong>570428623</strong> avec le numéro de TVA <strong>7G</strong>
                et auprès de l'autorité de sécurité sociale sous le numéro <strong>12-31-06668</strong>.
                <br><br>
                <strong>Emplacement</strong>
                <br>
                L'entreprise opère principalement depuis son site de Siguiri,
                même si elle est à la recherche d'autres opportunités dans
                toutes les régions du pays. Il est vrai que Siguiri est un
                endroit éloigné de la capitale Conakry. Mais il est au cœur
                de l'industrie minière aurifère et non loin du district
                diamantifère de Guinée (Banankoro). La priorité est de
                consolider sa position à Siguiri, après quoi, elle cherchera
                à s'étendre à d'autres régions du pays.
            </p>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Pourquoi nous choisir ?</h3>
            <p>
                Nous faisons preuve d'expertise dans le secteur du batiment et des
                travaux publics depuis plus de 7 ans et ne cessons de gagner en expérience
                avec les projets que nous confie nos partenaires de confiance.
            </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>direction</h2>
          <p>Les actionnaires et la répartition des actions sont les suivants</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('Anyar/assets/img/avatar.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>FOFANA Fode Amadou</h4>
                <span>Manager</span>
                <!--<p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>-->
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('Anyar/assets/img/avatar.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>FOFANA Thierno Madiou</h4>
                <span>Actionnaire</span>
                <!--<p>Aut maiores voluptates amet et quis praesentium qui senda para</p>-->
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset('Anyar/assets/img/avatar.png') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>FOFANA Nagnalen</h4>
                <span>Actionnaire</span>
                <!--<p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>-->
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nous contacter</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Adresse:</h4>
                <p>Tanéné marché, Commune de Matoto B.P. 2411</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>E-mail:</h4>
                <p>impactafrica@hotmail.com</p>
                <p>impactafrica09@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p>(+224) 622-22-22-72</p>
                <p>(+224) 628-24-59-59</p>
                <p>(+224) 631-13-06-00</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre méssage a bien été envoyé. Merci !</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

@endsection
