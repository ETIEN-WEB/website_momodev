@extends('layouts.app')

@section('content')
    
<link rel="stylesheet" href="{{asset('frontend/application.css')}}">

  <!--  services section -->
  <section class="w3l-index1 container" id="services">
    <div class="features-with-17_sur services_acceuil">
      <div class="py-lg-3">
        <div class="header-section text-center">
          <h3> <span> Services de </span>  conception graphique </h3>
            <p class="mt-3 mb-5">

            MoMoDev a une équipe de designers expérimentés pour fournir une meilleure qualité selon les tendances et les exigences, le plus important dans le temps. MoMoDev fournit des <span> Services complets de conception graphique.</span>
            <br> 
            Nous sommes équipées pour gérer tous les services de conception graphique qui nous sont lancés. Nous travaillons avec vos idées et trouvons un design fait sur mesure pour vous.
            <br>
            
            <strong>Nos services de conception graphique ci-dessous:</strong><br>
            Création de logo &nbsp; - &nbsp; Cartes de visite &nbsp; - &nbsp; Flyers et affiches &nbsp; - &nbsp; Bannières publicitaires &nbsp; - &nbsp; T-shirts.

            </p>
        </div>

        <div class="header-section text-center Solutions">
          <h3>Nos services de<span> design graphique </span>: </h3>
            
        </div>

        
        <div class="features-with-17-top_sur">
          <div class="row">
            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <img src="{{asset('frontend/images/languages/logo-adih.png')}}" class="adi_logo" alt="" />
                  
                </div>
                <div class="features-with-17-left2">
                  
                  {{-- <h3>Desktop - Web - Mobile</h3> --}}
                  <h6><a href="services.html"> Logo </a> </h6>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <img src="{{asset('frontend/images/languages/flyers.png')}}" class="adi_logo" alt="" />
                </div>
                <div class="features-with-17-left2">
                  <h6>Flyers et affiche publicitaire</h6>
                  {{-- <h3>Flyers </h3> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <img src="{{asset('frontend/images/languages/cartes_visite.jpg')}}" class="adi_logo" alt="" />
                </div>
                <div class="features-with-17-left2">
                  <h6>Carte de viste</h6>
                  {{-- <h3>Flyers </h3> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1">
                  <img src="{{asset('frontend/images/languages/marriage.jpg')}}" class="adi_logo" alt="" />
                </div>
                <div class="features-with-17-left2">
                  <h6>Carte d'invitation</h6>
                  {{-- <h3>Flyers </h3> --}}
                </div>
              </div>
            </div>

            
            
            <div class="col-lg-4 col-md-6 m-top">
                <div class="features-with-17-right-tp_sur">
                  <div class="features-with-17-left1">
                    <img src="{{asset('frontend/images/languages/tee-short.png')}}" class="referenceent" alt=""/>
                  </div>
                  <div class="features-with-17-left2">
                    <h6> Conception de chapeaux et de t-shirts personnalisés </h6>
                  </div>
                </div>
              </div>
            <div class="col-lg-4 col-md-6 m-top">
                <div class="features-with-17-right-tp_sur">
                  <div class="features-with-17-left1">
                    <img src="{{asset('frontend/images/languages/illustration.png')}}" class="referenceent" alt=""/>
                  </div>
                  <div class="features-with-17-left2">
                    <h6><a href="services.html"> Illustration </a> </h6>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //services section -->
@endsection
