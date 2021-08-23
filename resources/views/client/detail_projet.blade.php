@extends('layouts.app')

@section('content')
    
<link rel="stylesheet" href="{{asset('frontend/detail_projet.css')}}">

  <!--  services section -->
  <section class="w3l-index1 container" id="services">
    <div class="features-with-17_sur services_acceuil">
      <div class="py-lg-3">
        <div class="header-section text-center Solutions">
          <h3>{{$projet->titre}}</h3>
        </div>
        <div class="header-section head_section text-center">
        </div>
            <div class="etudecas section-entreprise">
                <img src="{{asset('frontend/images/'.$projet->logo[1])}}" class=" " alt="ok"/>
                <div class="col-lg-6 description-wrapper">
                    <div class="">
                        <h2 class="description-titre">Pressecotedivoire</h2>
                        <p class="description-text">
                            Pressecotedivoire est le portail d'informations du groupement des éditeurs de presse de Côte d'Ivoire regroupant trente-cinq (35) organes de presse en son sein, financé par le fonds de soutien de la presse (FSDP) .<br><br>
                            Ainsi avec une telle notoriété et un nombre important d'organes membre, Pressecotedivoire démontre qu'elle est la plateforme d'information incontournable en Côte d'Ivoire et la voix de l'information fiable.
                        </p>
                    </div>
                </div>
            </div>
       
            
            <div class="container">
              
              
              <!-- Nav pills -->
              {{-- <div class="contour_nav"> 
                <ul class="nav nav-pills" role="tablist">
                  <li class="nav-item">
                    <a href="{{route('all_project')}}" class="nav-link all_projet {{$current=="all"?'active':''}}" data-url="{{route('all_project')}}">Home</a>
                  </li>
                  @foreach ($categories as $categorie)
                  <li class="nav-item">
                      <a href="{{route('categorie', $categorie)}}" class="nav-link categorie {{$current==$categorie->id?'active':''}}" data-url="{{route('categorie', $categorie)}}">{{ $categorie->libelle }}</a>
                  </li>
                  @endforeach
                </ul>
              </div> --}}
            </div>
            
        <div class="features-with-17-top_sur">
          <div class="row ligne_projets">
            {{-- @foreach ($anonce->fileUpload as $photos)
            <a class="fancybox" href="{{asset('public/upload/'.$photos)}}" data-fancybox-group="gallery" title=""><img src="{{asset('public/upload/'.$photos)}}" alt="" /></a>
            @endforeach --}}
            @foreach ($projet->images as $photos)
            {{-- <img src="{{asset('frontend/images/'.$projet->images[0])}}" class="a-img adi_logo" alt="ok" /> --}}

            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1 realisations_momo">
                    <a class="fancybox" href="{{asset('frontend/images/'.$photos)}}" data-fancybox-group="gallery" title="">
                    <img src="{{asset('frontend/images/'.$photos)}}" class="a-img adi_logo" alt="ok" />
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div> {{-- end features-with-17-top_sur --}}
        <div class="deu_fond_departement fond2"> 
            <div class="row ligne_img">
                <div class="col-lg-7 col-md-7 col-12">
                    <div class="text_departement">
                    <div class="departement"> Un dispositif  </div>
                    <p class="listcordone">
                        Avant toute installation de vidéosurveillance intérieure ou extérieure, nos équipes veillent à bien identifier la configuration de votre espace ainsi que les installations électriques et numériques existantes. Selon la configuration de votre espace à sécuriser et de votre problématique de sécurité, les experts de videosurveillances.net vous assurent la pose de caméras de surveillance professionnelles qui protègent et informent en temps réel les intrusions dans vos locaux. <br>
                        <br>
                        <br>
                        Visitez 
                        <a href="{{$projet->lien_site}}" target="_Blank"></a>
                        <br>
                    </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-12">
                    <div class="img_departement">
                        <img src="{{asset('frontend/images/'.$projet->logo[0])}}" alt="">
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!--  //services section -->
@endsection
@section('scripts')
<script>
  /* $(document).ready(function(){
      $(document).on('click','.categorie', function(e){
          e.preventDefault();
         var url = $(this).attr('data-url');
          $.ajax({
              type:'get',
              url:url,
              success:function(data)
              {
                  $('#services').html('');
                  $('#services').html(data.dataHtml);
              }
          });
      });
    });


    $(document).ready(function(){
      $(document).on('click','.all_projet', function(e){
          e.preventDefault();
         var url = $(this).attr('data-url');
          $.ajax({
              type:'get',
              url:url,
              success:function(data)
              {
                  $('#services').html('');
                  $('#services').html(data.dataHtml);
              }
          });
      });

    });*/

  
</script>
    
@endsection
