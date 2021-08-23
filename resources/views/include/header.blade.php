<header class="container w3l-top-header-strip">
	<div class="hero-header-11">
		<div class="hero-header-11-content">
			<div class="main-header">
				<div class="container-fluid">
					<div class="d-grid grid-columns-auto">
						<div class="right-grid align-left d-grid">
							<div class="quick-links">
								<ul>
									<li>
										<span class="fa fa-phone" aria-hidden="true"></span>
										<a href="tel:+123-456-789">+225 07 87 60 21 32 </a>
									</li>
									<li>
										<span class="">
											<i class="fa fa-envelope" style="font-size:15px; color:#fff;" aria-hidden="true">
											</i>
											 {{-- &nbsp;<a href="mailto:services@tinitz.com">services@tinitz.com</a> --}}
            
										</span>
										<a href="mailto:example@mail.com">hello@momodev.net</a></li>
									<li class="mobile-none">
										{{-- <span class="fa fa-clock-o" aria-hidden="true"></span>
										<p>Mon - Fri: 9:00 - 19:00 / Closed on Weekends</p> --}}
									</li>
								</ul>
							</div>
							<div class="button align-right mk-header-social">
								{{-- <a href="contact.html" class="btn btn-primary theme-button">Get a Quote</a> --}}
								<ul>
									<li>
										{{-- <a class="spacecustomer" href="/login">
											<i class="fa fa-user" style="font-size:18px; color:#fff;" aria-hidden="true"></i>
											&nbsp;Espace client
										</a>
										</li>&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; --}}
									<li>
										<a class="facebook-hover " target="_blank" href="https://web.facebook.com/MOMO-DEV-105848491797772/?ref=pages_you_manage">
											<i class="fa fa-facebook" aria-hidden="true">
											</i>
										</a>
									</li>
									&nbsp;
									<li>
										<a class="googleplus-hover " target="_blank" href="#">
											<i class="fa fa-twitter" aria-hidden="true">
											</i>
										</a>
									</li>&nbsp;
									<li>
										<a class="facebook-hover " target="_blank" href="#">
											<i class="fa fa-instagram" aria-hidden="true">
											</i>
										</a>
									</li>&nbsp;
									<li>
										<a class="googleplus-hover " target="_blank" href="https://www.linkedin.com/company/momodev/">
											<i class="fa fa-linkedin" aria-hidden="true">
											</i>
										</a>
									</li>&nbsp;
									{{-- <li>
										<a class="youtube-hover " target="_blank" href="https://www.youtube.com/channel/UCN25qzrJmC_WWcUcrwFQLzw">
											<i class="fa fa-youtube" aria-hidden="true">
											</i>
										</a>
									</li> --}}
								</ul>
								<div class="clearboth"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- //top-header-strip -->

<!-- header -->
<header class="container w3l-header">
	<div class="hero-header-11">
		<div class="hero-header-11-content">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg navbar-light py-0 px-0">
					<a class="navbar-brand" href="{{URL::to('/')}}"><img src="{{asset('frontend/images/Logo_sans_rond.jpg')}}" alt="" /></a>
					<!-- if logo is image enable this   
				<a class="navbar-brand" href="#index.html">
						<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
				</a> -->
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
						<span class="navbar-toggler-icon fa icon-close fa-times"></span>
					</button>

					<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item {{$actuel=="acceuil"?'active':''}}">
								<a class="nav-link" href="{{URL::to('/')}}">Acceuil <span class="sr-only"></span></a>
							</li>
							
							<li class="nav-item @@services {{$actuel=="application"?'active':''}}">
								<a class="nav-link services" href="#">Services <i class="fa fa-angle-down"></i> </a>
								<ul class="nos_services">
									<li><a href="{{URL::to('/application')}}"> Application Web et Mobile </a></li>
									<li><a href="{{URL::to('/design')}}"> Identité Visuelle </a></li>
									<li><a href="{{URL::to('/videosurveillance')}}"> Sécurité Numérique </a></li>
								</ul>
							</li>
							<li class="nav-item @@about {{$actuel=="realisation"?'active':''}}">
								<a class="nav-link" href="{{URL::to('/nos_realisation')}}">Nos Realisations</a>
							</li>
							<li class="nav-item @@contact {{$actuel=="contact"?'active':''}}">
								<a class="nav-link" href="{{URL::to('/contact')}}">Contact</a>
							</li>
						</ul>
						{{-- <div class="form-inline ml-lg-3">
							<form action="#search-results" class="form-inline position-relative my-2 my-lg-0">
								<input class="form-control search" type="search" placeholder="Search here..." aria-label="Search" required>
								<button class="btn btn-search position-absolute" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
							</form>
						</div> --}}
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
