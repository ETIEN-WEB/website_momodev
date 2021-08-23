<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ $titre }}</title>
  <link href="{{asset('frontend/images/Logo_ico-ConvertImage.jpg')}}" rel="icon">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('frontend/css/style-starter.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/main.css')}}">
  <!-- web fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
  <!-- /web fonts -->
  
</head>

<body class="corps">
<!-- top-header-strip -->

@include('include.header')

    @yield('content')

@include('include.footer')

  <!-- Footer -->
  
  <!-- jQuery  -->
  <script src="{{asset('frontend/home/jquery.min.js')}}"></script>
  {{-- <script src="{{asset('frontend/js/jquery-3.4.1.slim.min.js')}}"></script> --}}
  
  <!-- Template JavaScript -->
  <script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
  
  <!-- FANCY -->

        <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="{{asset('frontend/fancy/lib/jquery.mousewheel.pack.js?v=3.1.3')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/fancy/lib/jquery.mousewheel.pack.js?v=3.1.3')}}"></script>
    
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="{{asset('frontend/fancy/source/jquery.fancybox.pack.js?v=2.1.5')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/fancy/source/jquery.fancybox.css?v=2.1.5')}}" media="screen" />
    
        <!-- Add Button helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/fancy/source/helpers/jquery.fancybox-buttons.css?v=1.0.5')}}" />
        <script type="text/javascript" src="{{asset('frontend/fancy/source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>
    
        <!-- Add Thumbnail helper (this is optional) -->
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/fancy/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7')}}" />
        <script type="text/javascript" src="{{asset('frontend/fancy/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7')}}"></script>
    
        <!-- Add Media helper (this is optional) -->
        <script type="text/javascript" src="{{asset('frontend/fancy/source/helpers/jquery.fancybox-media.js?v=1.0.6')}}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                /*
                 *  Simple image gallery. Uses default settings
                 */
    
                $('.fancybox').fancybox();
    
                /*
                 *  Different effects
                 */
    
                // Change title type, overlay closing speed
                $(".fancybox-effects-a").fancybox({
                    helpers: {
                        title : {
                            type : 'outside'
                        },
                        overlay : {
                            speedOut : 0
                        }
                    }
                });
    
                // Disable opening and closing animations, change title type
                $(".fancybox-effects-b").fancybox({
                    openEffect  : 'none',
                    closeEffect	: 'none',
    
                    helpers : {
                        title : {
                            type : 'over'
                        }
                    }
                });
    
                // Set custom style, close if clicked, change title type and overlay color
                $(".fancybox-effects-c").fancybox({
                    wrapCSS    : 'fancybox-custom',
                    closeClick : true,
    
                    openEffect : 'none',
    
                    helpers : {
                        title : {
                            type : 'inside'
                        },
                        overlay : {
                            css : {
                                'background' : 'rgba(238,238,238,0.85)'
                            }
                        }
                    }
                });
    
                // Remove padding, set opening and closing animations, close if clicked and disable overlay
                $(".fancybox-effects-d").fancybox({
                    padding: 0,
    
                    openEffect : 'elastic',
                    openSpeed  : 150,
    
                    closeEffect : 'elastic',
                    closeSpeed  : 150,
    
                    closeClick : true,
    
                    helpers : {
                        overlay : null
                    }
                });

            });
	</script>
    <style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

		/*body {
			max-width: 700px;
			margin: 0 auto;
		}*/
	</style>
  <!-- FANCY -->

  <!-- script for banner slider -->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- //script banner slider  -->
  
  <!-- script for testimonials -->
  <script>
    $(document).ready(function () {
      $('.owl-two').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //testimonials owlcarousel -->
  
  <!-- for blog carousel slider -->
  <script>
    $(document).ready(function () {
      $('.owl-three').owlCarousel({
        loop: true,
        stagePadding: 30,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        nav: false,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      })
    })
  </script>
  <!-- //for blog carousel slider -->
  
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->
  
  <!-- stats number counter-->
  
  <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.countup.js')}}"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  
  <!-- Bootstrap JS -->
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/home/main.js')}}"> </script> 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @yield('scripts')
  </body>
  
  </html>