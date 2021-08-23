@extends('layouts.app')

@section('content')
    
<link rel="stylesheet" href="{{asset('frontend/application.css')}}">

  <!--  services section -->
  <section class="w3l-index1 container" id="services">
    <div class="features-with-17_sur services_acceuil">
      <div class="py-lg-3">
        <div class="header-section text-center">
          <h3> <span> MoMoDev développe des  solutions pour vous apporter </span>  des valeurs ajoutées </h3>
            <p class="mt-3 mb-5">


              Nous développons <span>sur mesure</span> des applications web et mobiles, des Sites Web, liés aux activités de votre entreprise. 

              Nous utilisons <span>la technologie moderne et des outils créatif</span> s qui donnent à votre entreprise <span> une apparence professionnelle </span>, et vous permettent de vous démarquer de vos concurrents.

              Nous nous occupons de l'architecture, de la création graphique, de l'ergonomie, du déploiement, du référencement.
              MoMoDev gère votre communication social média.
              Nous déployons votre markting digitale afin de <span>générer du trafic et d'atteindre vos objectifs</span> .
              <br>
              <span>Notre but</span> : réaliser des solutions optimales répondant à vos besoins afin de vous différendier de vos concurrents.
            </p>
        </div>

        <div class="features-with-17-top_sur">
          <div class="row">
            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  {{-- <img src="{{asset('frontend/images/home-services.png')}}" alt="" /> --}}
                  <img alt="home-icon-1" nitro-lazy-src="" class="wp-image-22752 lazyloaded" nitro-lazy-empty="" id="MzI0OjE4OA==-1" src="{{asset('frontend/images/home-icon-2.svg')}}" width="222" height="200">
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="services.html">Développement</a></h6>
                  {{-- <h3>Desktop - Web - Mobile</h3> --}}
                  <p>
                    Nous créons des applications Web, mobile, des sites vitrines, e-learning ou Ecommerces sur mesure.Nous déployons une expertise répondant aux exigences 
                    </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  {{-- <img src="{{asset('frontend/images/inphographie_1.jpg')}}" alt="" /> --}}

                  <img alt="Evolution ur diagramme" data-src="" class="ls-is-cached lazyloaded" src="{{asset('frontend/images/chart.svg')}}"><noscript><img src="{{asset('frontend/images/chart.svg')}}" width="222" height="200" alt="Evolution "></noscript>

                </div>
                
                <div class="features-with-17-left2">
                  <h6><a href="services.html"> Markting Digitale</a></h6>
                  {{-- <h3>Identité Visuelle</h3> --}}
                  <p> Nous offrons nos services à des entreprises dans le monde entier sans distinction. Nous offrons une gamme de services très diversifiée de marketing sur Internet permettant de toucher votre cible.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <img src="{{asset('frontend/images/referenceent.png')}}" class="referenceent" alt=""/>
                </div>
                <div class="features-with-17-left2">
                  <h6><a href="services.html"> Référencement </a> </h6>
                 
                  <p>

                    Une agence de référencement pour optimiser votre référencement afin de
                    
                    booster vos ventes et de gagner plus de traffic qualifié pour être visible.
                    <br>      
                    Vous souhaitez rendre votre site web plus visible ? Recevoir plus de demandes de contact! <span>Vous au bon lieu.</span> 
                    .</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //services section -->
  
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
  <!-- //subscribe form -->
  <section class="container w3l-logos">
    <div class="partenaires">
      <div class="header-section text-center">
        {{-- <h3>Nous avons participé à leur
          transformation digitale</h3>
        <p class="mt-3 mb-5">Nous avons déjà travaillé sur les projets d’une entreprise comme la votre, alors pourquoi pas avec vous ?</p> --}}
      </div>
      <div class="mt-lg-4 mt-0 languages">
        <div class="row">
          <div class="col-md-2"></div>
          

          <div class="col-md-2 col-6 logo_langue logo_langue"><img src="{{asset('frontend/images/languages/Zabbix-logo.png')}}" alt=" zabbix" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/cakephp.jpg')}}" alt=" cakephp" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/ansible.jpg')}}" alt=" ansible" width="140"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/prometheus.png')}}" alt=" Prometheus" width="60"></div>
          <div class="col-md-2 col-6 logo_langue"></div>
        </div>
        <div class="row">
           
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/docker-images.png')}}" alt=" docker" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/elastic-banner.png')}}" alt=" elastic" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/java.jpg')}}" alt=" java" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/node-js.png')}}" alt=" nodeJs" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/laravel.jpg')}}" alt=" laravel" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/prestashop.jpg')}}" alt=" prestashop" width="120"></div>
        </div>
        <div class="row">
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/symfony.jpg')}}" alt=" symphony" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/drupal-banner.png')}}" alt=" drupal" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/joomla.png')}}" alt=" joomla" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/odoo.png')}}" alt=" odoo" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/wordpresst.png')}}" alt=" wordpress" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/spring-boot.png')}}" alt=" spring-boot" width="120"></div>
        </div>
        <div class="row">
          {{-- <img src="{{asset('frontend/images/languages/magento-logo.png')}}"> --}}
          <div class="col-md-2 logo_langue"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/lua.png')}}" alt=" lua" width="80"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/Alfresco-logo.png')}}" alt=" Alfresco" width="120"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/python.png')}}" alt=" python" width="60"></div>
          <div class="col-md-2 col-6 logo_langue"><img src="{{asset('frontend/images/languages/magento-logo.png')}}" alt=" magento" width="80"></div>
          <div class="col-md-2 col-6 logo_langue"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- footer -->
@endsection
