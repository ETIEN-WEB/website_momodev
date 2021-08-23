@extends('layouts.app')

@section('content')
    
<link rel="stylesheet" href="{{asset('frontend/contact.css')}}">

    
  <!-- contact-form -->
  <section class="w3l-contact container">
    <div class="contact-infubd">
      <div class="container py-lg-3">
        <div class="pt-5 mb" id="contact">
            <div class="header-section text-center">
                <h2>Nous contacter</h2>
                <p class="mt-3 mb-0">Nous étudions avec soin chaque demande entrante et traitons avec réactivité l’expression de votre besoin. N’hésitez pas à nous fournir un maximum d’informations sur votre projet.</p>
            </div>
        </div>
        <div class="contact-grids row">
          <div class="col-lg-6 contact-left">
            <div class="partners">
              <div class="cont-details">
                <h6 class="mb-4"> Pour plus d'informations ou une demande de renseignements sur MoMoDev et les prix, n'hésitez pas à nous contacter.</h6>
              </div>
              <div class="hours">
                <h6 class="mt-4">Abidjan Yopougon</h6>
                <p> Zone industrielle près de SOCIAM</p>
                <h6 class="mt-4">Email:</h6>
                <p>
                    services@momodev.net
                </p>
               
                
                <h6 class="mt-4">Contacts:</h6>
                <p class="margin-top">
                    +(225) 07 87 60 21 32  </p>
                <p class="margin-top">
                    +(225) 05 74 69 14 20</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-5 contact-right">
            <form action="{{route('contact.client')}}" method="POST" class="signin-form" id="form">
                @csrf
              <div class="input-grids">
                <div class="form-group">
                  <input type="text" name="nom" id="w3lName" placeholder="nom*" class="contact-input" />
                  <span class="text-danger error-text nom_error"></span>
                </div>
                {{-- <div class="form-group">
                    <input type="text" name="contact" id="w3lName" placeholder="Téléphone*" class="contact-input" />
                    <span class="text-danger error-text contact_error"></span>
                  </div> --}}
                <div class="form-group mail_contact">
                  <input type="email" name="email" id="w3lSender" placeholder=" Email" class="contact-input" />
                  <input type="text" name="contact" id="w3lName" placeholder="Téléphone*" class="contact-input inp_contact" />
                    <span class="text-danger error-text contact_error erreur_contact"></span>
                </div>
                <div class="form-group">
                  <input type="text" name="objet" id="w3lSubect" placeholder="Objet du méssage" class="contact-input" />
                </div>
              </div>
              <div class="form-group">
                <textarea name="message" id="w3lMessage" placeholder="Votre message *" required=""></textarea>
                <span class="text-danger error-text message_error"></span>
              </div>
              <div class="text-right">
                <button class="btn btn-primary theme-button">Envoyer votre message </button>
              </div>
            </form>
          </div>
  
        </div>
        {{-- <div class="map mt-5 pt-md-5">
          <h5>Our location</h5>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387145.86654334463!2d-74.25818682528057!3d40.70531100753592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1493028309728"
            style="border:0" allowfullscreen=""></iframe>
        </div> --}}
    </div>
</section>

@endsection