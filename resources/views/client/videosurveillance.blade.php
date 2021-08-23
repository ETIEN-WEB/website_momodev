@extends('layouts.app')

@section('content')
    

<link rel="stylesheet" href="{{asset('frontend/videosurveillance.css')}}">

<!-- //header -->
<section class="container w3l-main-slider">
    <!-- main-slider -->
    <div class="companies20-content">
      <div class="companies-wrapper">
        
          <div class="camera">
            
          </div>
        
      </div>
    </div>
    <!-- /main-slider -->
  </section>
  <!--  services section -->
  <section class="w3l-index1 container" id="services">
    <div class="features-with-17_sur services_acceuil">
      <div class="py-lg-3">
        {{-- <div class="header-section text-center">
          <h3>Installation caméra de surveillance : location / achat</h3>
            <p class="mt-3 mb-5">Nous offrons des services professionnels tel que la Conception et le Développement des Sites Web, la conception des applications Mobiles et Web, l’hébergement Web et l’enregistrement des noms de domaine, la sécurité Web, et toutes sortes d'outils Web à des prix défiant toute concurrence.</p>
        </div> --}}

        <div class="header-section text-center Solutions">
          <h3>Installation caméra de surveillance : <span> location / achat  </span> </h3>
            
        </div>

      </div>
    </div>
  </section>
  <!--  //services section -->


  <div class="container">
    <div class="deu_fond_departement"> 
      <div class="row ligne_img">
        <div class="col-lg-6 col-md-6 col-12">
            <div class="img_departement">
                <img src="{{asset('frontend/images/hikvision-about-home_720x.webp')}}" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="text_departement">
            <div class="departement"> Des caméras de surveillance installées par des professionnels expérimentés </div>
            <p class="listcordone">
              Besoin d’une caméra IP, d’une caméra panoramique ou d’un dôme motorisé chez vous ou dans votre entreprise ? Pour toute installation de caméras de surveillance, notre équipe de spécialistes se déplace rapidement pour évaluer votre besoin en sécurité numérique. <br>
              Nos techniciens expérimentés interviennent à Paris, en région Ile-de-France et dans une très large zone autour de celle-ci. Quelles que soient les exigences de votre activité, nous déployons une solution adaptée à vos convenances ainsi qu’aux possibilités de votre réseau informatique.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="deu_fond_departement fond2"> 
      <div class="row ligne_img">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="text_departement">
            <div class="departement"> Un dispositif de vidéosurveillance intelligent pour toute activité </div>
            <p class="listcordone">
              Avant toute installation de vidéosurveillance intérieure ou extérieure, nos équipes veillent à bien identifier la configuration de votre espace ainsi que les installations électriques et numériques existantes. Selon la configuration de votre espace à sécuriser et de votre problématique de sécurité, les experts de videosurveillances.net vous assurent la pose de caméras de surveillance professionnelles qui protègent et informent en temps réel les intrusions dans vos locaux. <br>
              Nos caméras intelligentes disposent des toutes dernières avancées technologiques pour non seulement dissuader et alerter efficacement, mais également pour collecter et exploiter des données cruciales pour le développement de votre activité.
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="img_departement">
              <img src="{{asset('frontend/images/camera-alarme - Copie.png')}}" alt="">
          </div>
      </div>
      </div>
    </div>
    <div class="deu_fond_departement"> 
      <div class="row ligne_img">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="img_departementes">
              <img src="{{asset('frontend/images/slider-video-survillances-gs.webp')}}" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="text_departement">
            <div class="departement"> Optez pour la location de caméras de surveillance ou l’achat direct </div>
            <p class="listcordone">
              Pour bénéficier d’un système de vidéosurveillance optimisé, vous avez la possibilité de louer tout le matériel nécessaire et de racheter, si vous le souhaitez, tout le dispositif à la fin de la location en payant seulement sa valeur résiduelle – option leasing ou LOA (Location avec Option d’Achat).
               <br>
               Autre option qui s’offre à vous : l’achat direct. Vous pouvez choisir d’acquérir votre matériel de vidéosurveillance à un tarif plus économique en achetant directement les caméras et les enregistreurs.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="deu_fond_departement fond2"> 
      <div class="row ligne_img">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="text_departement">
            <div class="departement"> Avec l’installation de vos caméras de surveillance, profitez de l’application dédiée </div>
            <p class="listcordone">
              Que ce soit sur téléphone portable, tablette ou PC, vous avez la possibilité de piloter vos caméras à distance via une application gratuite. Une fois vos caméras de surveillance installées, bénéficiez de l’application dédiée disponible sur App Store et Google Play et visionnez les images vidéo à distance, en live ou en différé. Même en cas d’absence à votre domicile ou de vos locaux professionnels, vous savez ce qu’il se passe. <br>
              Grâce à cette application, vous pouvez observer en direct toutes les zones que vous avez décidé de surveiller. Vous avez aussi l’opportunité de configurer les enregistrements en continu ou définir des plages horaires, mais aussi de zoomer, d’interagir directement avec le microphone intégré ou bien encore de choisir d’être alerté par notification push avec la fonction de détection de mouvements.
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="img_departement">
              <img src="{{asset('frontend/images/camera6.png')}}" alt="">
          </div>
      </div>
      </div>
    </div>
</div>

  <!-- //subscribe form -->
  <section class="container w3l-blog-slider" id="blog">
    <div class="solution">
      <div class="header-section text-center">
        <h1>solution métier</h1>
        {{-- <p class="mt-3 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti sit labore dolores aliquam possimus deleniti cupiditate
          temporibus, repudiandae suscipit asperiores vel.</p> --}}
      </div>
      <div class="inner-sec-w3layouts mt-md-5 mt-4">
        <div class="owl-three owl-carousel owl-theme">
          <div class="item">
            <div class="content-left-sec">
              <a class="blog-link d-block zoom-image" href="#dd"><img src="{{asset('frontend/images/restaurant.jpg')}}" class="img-fluid scale-image" alt=""></a>
              <div class="blog-info">
                <a href="#dd">
                  <h4 class="mb-0">restaurant</h4>
                </a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content-left-sec">
              <a class="blog-link d-block zoom-image" href="#dd"><img src="{{asset('frontend/images/pharmacie.jpg')}}" class="img-fluid scale-image" alt=""></a>
              <div class="blog-info">
                <a href="#dd">
                  <h4 class="mb-0">pharmacie</h4>
                </a>
                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content-left-sec">
              <a class="blog-link d-block zoom-image" href="#dd"><img src="{{asset('frontend/images/habillement.jpg')}}" class="img-fluid scale-image" alt=""></a>
              <div class="blog-info">
                <a href="#dd">
                  <h4 class="mb-0">habillement</h4>
                </a>
                
              </div>
            </div>
          </div>
          <div class="item">
            <div class="content-left-sec">
              <a class="blog-link d-block zoom-image" href="#dd"><img src="{{asset('frontend/images/logistique.jpg')}}" class="img-fluid scale-image" alt=""></a>
              <div class="blog-info">
                <a href="#dd">
                  <h4 class="mb-0">logistique</h4>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!--  services section -->
    <section class="w3l-index1 container" id="services">
      <div class="features-with-17_sur services_acceuil">
        <div class="py-lg-3">
          <div class="header-section text-center">
            <h3>besoin d'une installation ou d'une intervention en urgence ?</h3>
              <p class="">Les équipes de videosurveillances.net vous proposent ses services d'installation et de dépannage.
              </p>
              <p>
                Techniciens spécialistes, ils interviennent rapidement, 7 jours sur 7.
              </p>
              <p>
                Une panne ? Un problème technique ? Besoin d'informations ? Contactez-nous dès maintenant.</p>
          </div>
          
        </div>
      </div>
    </section>
  <!-- footer -->
@endsection
