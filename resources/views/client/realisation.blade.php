@extends('layouts.app')

@section('content')
    
<link rel="stylesheet" href="{{asset('frontend/application.css')}}">

  <!--  services section -->
  <section class="w3l-index1 container" id="services">
    <div class="features-with-17_sur services_acceuil">
      <div class="py-lg-3">
        <div class="header-section text-center Solutions">
          <h3>Nos services de<span> design graphique </span>: </h3>
        </div>
        <div class="header-section head_section text-center">
          
            <p class="">
              Vous aussi, vous êtes en recherche d’un prestataire pour <strong> créer votre application mobile native</strong> ? Vous souhaitez faire développer <strong> une application web mobile ou une plateforme web</strong> ? Vous avez un projet informatique à nous soumettre ? 
            </p> 
            <p class="pg" >
            De l’expression de vos besoins à la livraison et la maintenance de vos applications, nous vous accompagnons tout au long de votre projet.
            </p>
            <p>
              Découvrez des <strong>exemples d’applications web et mobile sur-mesure</strong> réalisées pour le compte de nos clients.
            </p>
        </div>

            
            <div class="container">
              
              
              <!-- Nav pills -->
              <div class="contour_nav"> 
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
              </div>
            </div>
            
        <div class="features-with-17-top_sur">
          <div class="row ligne_projets">
            @foreach ($projets as $projet)
            <div class="col-lg-4 col-md-6 m-top">
              <div class="features-with-17-right-tp_sur">
                <div class="features-with-17-left1 realisations_momo">
                  <a class="a-img-txt" href="{{route('projet', $projet)}}">
                    <img src="{{asset('frontend/images/'.$projet->images[0])}}" class="a-img adi_logo" alt="ok" />
                    <span class="a-txt c1">{{ $projet->titre }} <span class="sous_titre">{{ $projet->sous_titre }}</span> </span>
                    
                  </a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  //services section -->
@endsection
@section('scripts')
<script>
  $(document).ready(function(){
      //$('#contacts').css('display', 'none');
      $(document).on('click','.categorie', function(e){
          //$('#contacts').css('display', 'block');
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

    });

  
</script>
    
@endsection
