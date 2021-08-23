@extends('layouts.app')

@section('content')
    

<!-- //header -->
<section class="container w3l-main-slider">
    <!-- main-slider -->
    <div class="companies20-content">
      <div class="companies-wrapper">
        <div class="owl-one owl-carousel owl-theme text-center">
          <div class="item">
            <li>
              <div class="slider-info banner-view">
                <div class="banner-info container">
                  <p class="slideone">We are industry factory solutions</p>
                  <h3 class="banner-text mt-lg-5 mt-md-4 mt-3">Extremely intellectual & challenging projects</h3>
                  <a href="about.html" class="btn btn-primary theme-button">About Us</a>
                </div>
              </div>
            </li>
          </div>
          <div class="item">
            <li>
              <div class="slider-info  banner-view banner-top1">
                <div class="banner-info container">
                  <p class="slidetwo">Extremely intellectual & challenging projects</p>
                  <h3 class="banner-text mt-lg-5 mt-md-4 mt-3">Helping industrial organizations & businesses
                    lead the wave </h3>
                  <a href="services.html" class="btn btn-primary theme-button">Our Services</a>
                </div>
              </div>
            </li>
          </div>
          <div class="item">
            <li>
              <div class="slider-info banner-view banner-top2">
                <div class="banner-info container">
                  <h3 class="banner-text mb-0">Advanced Industrial & Manufacturing Business Theme</h3>
                  <p class="slidethree mt-4 mb-md-5 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae atque quae illum quos. Laboriosam at iusto dicta fuga qui neque quos! Quisquam ut quos ratione delectus facere, aliquid architecto autem!</p>
                  <a href="contact.html" class="btn btn-primary theme-button">Contact Us</a>
                </div>
              </div>
            </li>
          </div>
        </div>
      </div>
    </div>
    <!-- /main-slider -->
  </section>
  <!--  services section -->
  <section class="w3l-index1 container" id="services">
    <div class="features-with-17_sur services_acceuil">
      <div class="py-lg-3">
        <div class="header-section text-center">
          <h3>Accélérez la digitalisation de vos métiers avec MoMoDev</h3>
            <p class="mt-3 mb-5">Nous offrons des services professionnels tel que la Conception et le Développement des Sites Web, la conception des applications Mobiles et Web, l’hébergement Web et l’enregistrement des noms de domaine, la sécurité Web, et toutes sortes d'outils Web à des prix défiant toute concurrence.</p>
        </div>

        <div class="header-section text-center Solutions">
          <h3> Des solutions <span> sur mesure adaptées à vos besoins </span> </h3>
            
        </div>

        
        <div class="features-with-17-top_sur">
          <div class="row">
            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <img src="{{asset('frontend/images/home-services.png')}}" alt="" />
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="services.html">Applications</a></h6>
                  <h3>Desktop - Web - Mobile</h3>
                  <p>Une équipe jeune et dynamique, met toute son expertise pour concevoir des solutions technologiques sur mesure. Nous bâtissons des applications robustres et étudiées. Confiez nous vos projets afin de vous rendre des solutions efficaces, économiques et adéquates à 100 % avec vos activités.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <img src="{{asset('frontend/images/inphographie_1.jpg')}}" alt="" />
                </div>
                
                <div class="features-with-17-left2">
                  <h6><a href="services.html">Design</a></h6>
                  <h3>Identité Visuelle</h3>
                  <p> MoMoDev vous aident dans la création de votre Identité Visuelle. Création de Logo, supports de Communication Événementielle et interactive, Création Graphique et Design… Notre équipe créative établit votre Identité Graphique !</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <img src="{{asset('frontend/images/camera-alarme.png')}}" alt=""/>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="services.html"> Sécurité Numérique </a> </h6>
                  <h3>installation - location - dépannage</h3>
                  <p>Les dispositifs de surveillance par caméra sont nombreux. Nos conseillers spécialistes en sécurité sont à votre disposition pour déterminer le système de vidéosurveillance qui convient le mieux à votre entreprise ou à vos besoins personnels.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //services section -->
  {{-- --}}
  <section class="w3l-index5 container">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section">
          <div class="section-width">
            {{-- <h5>Industrial Factory</h5> --}}
            <h2>Demandez-nous l'impossible!!!!!</h2>
          </div>
          <div class="link-list-menu">
              <p class="mb-5">Nous apportons une valeur ajoutée supplémentaire à votre entreprise et vos projets de croissance en ajoutant la juste dose de digital dans votre activité. Grâce au numérique, votre organisation devient plus efficace et votre activité est valorisée.
              </p>
              {{-- <a href="about.html" class="btn btn-primary theme-button">Read More </a> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- blog with slider -->
  {{--  --}}
  <!-- //subscribe form -->
  <section class="container w3l-logos">
    <div class="partenaires">
      <div class="header-section text-center">
        <h3>Nous avons participé à leur
          transformation digitale</h3>
        <p class="mt-3 mb-5">Nous avons déjà travaillé sur les projets d’une entreprise comme la votre, alors pourquoi pas avec vous ?</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-6 logo-view">
          <img src="{{asset('frontend/images/logo1.jpg')}}" alt="company-logo" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-6 logo-view">
          <img src="{{asset('frontend/images/logo2.jpg')}}" alt="company-logo" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-6 logo-view">
          <img src="{{asset('frontend/images/logo3.jpg')}}" alt="company-logo" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-6 logo-view">
          <img src="{{asset('frontend/images/logo4.jpg')}}" alt="company-logo" class="img-fluid" />
        </div>
      </div>
      <div class="row mt-lg-4 mt-0">
        <div class="col-lg-3 col-6 logo-view">
          <img src="{{asset('frontend/images/logo3.jpg')}}" alt="company-logo" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-6 logo-view">
          <img src="{{asset('frontend/images/logo4.jpg')}}" alt="company-logo" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-6 logo-view">
          <img src="{{asset('frontend/images/logo1.jpg')}}" alt="company-logo" class="img-fluid" />
        </div>
        <div class="col-lg-3 col-6 logo-view">
          <img src="{{asset('frontend/images/logo2.jpg')}}" alt="company-logo" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
@endsection
