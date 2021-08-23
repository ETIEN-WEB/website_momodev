<footer class="container w3l-footer-29-main" id="footer">
    <div class="footer-29">
      <div class="pb-lg-3">
        <div class="row footer-top-29">
          <div class="col-lg-2 col-md-6 footer-list-29 footer-1 centre_logo">
            <h1 class="footer-logo"><a class="footer-logo mb-md-3 mb-2" href="#url"><img src="{{asset('frontend/images/Logo sans fond.jpg')}}" alt="" /></a></h1>
            
          </div>
          <div class="col-lg-3 col-md-6 footer-list-29 footer-2 mt-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste mollitia deserunt repudiandae, ut minus assumenda architecto illum eaque
              odio temporibus.</p>
            {{-- <h6 class="footer-title-29">Explore More</h6>
            <ul>
              <li><a href="#gallery.html">Gallery</a></li>
              <li><a href="#blog.html">Blog</a></li>
              <li><a href="#landing-single.html">Landing Page</a></li>
              <li><a href="#url">Privacy Policy</a></li>
              <li><a href="#url">Terms and conditions</a></li>
            </ul> --}}
          </div>
          <div class="col-lg-3 col-md-6 footer-list-29 footer-3 mt-5">
            <div class="properties contact">
              <h6 class="footer-title-29">Contacter nous</h6>
              
              <form action="{{route('contact.client')}}" method="POST" id="form">
                @csrf
                <input type="hidden" name="" value="">
                <div class="form-group">
                  <input type="text" name="nom" placeholder="Nom" class="form-control" style="margin : 8px;">
                  <span class="text-danger error-text nom_error"></span>
                </div>
                <div class="form-group">
                  <input type="text" name="contact" placeholder="Téléphone" class="form-control" style="margin : 8px;">
                  <span class="text-danger error-text contact_error"></span>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Entrer votre méssage " style="margin : 8px;"></textarea>
                  <span class="text-danger error-text message_error"></span>
                </div>
                <input type="submit" value="Envoyer" class="footsubmit">
              </form>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 footer-list-29 footer-4 mt-5">
            <h6 class="footer-title-29">Nos coordonnées</h6>
            <p>
              
               Abidjan Yopougon Zone industrielle près de SOCIAM<br>
               <span class="heurefoot">Lundi – Vendredi : 8h00 – 18h00</span><br><br>
               +(225) 07 87 60 21 32 / 05 74 69 14 20<br>
               <span class="heurefoot">services@momodev.net</span>
            </p>
            <div class="social">
              <a href="https://web.facebook.com/MOMO-DEV-105848491797772/?ref=pages_you_manage" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
              {{-- <a href="#google" class="google"><span class="fa fa-google-plus" aria-hidden="true"></span></a> --}}
              <a href="https://www.linkedin.com/company/momodev/" class="google"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
              <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
              <a href="#instagram" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
              {{-- <a href="#youtube" class="youtube"><span class="fa fa-youtube" aria-hidden="true"></span></a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="footers14-block" class="py-3">
      <div class="container">
        <div class="footers14-bottom text-center">
          {{-- <div class="social">
            <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
            <a href="#google" class="google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
            <a href="#twitter" class="twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
            <a href="#instagram" class="instagram"><span class="fa fa-instagram" aria-hidden="true"></span></a>
            <a href="#youtube" class="youtube"><span class="fa fa-youtube" aria-hidden="true"></span></a>
          </div> --}}
          <div class="copyright mt-1">
            <p> Copyright  &copy; 2021 MoMODev | Design by <a href="momodev.net">MoMoDev</a></p>
          </div>
        </div>
      </div>
    </div>
  
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up" aria-hidden="true"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };
  
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }
  
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  
  </footer>