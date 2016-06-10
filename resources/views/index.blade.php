<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->
<html class="no-js" lang=""> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Connecting Professionals</title>
  <meta name="description" content="Polmo - One Page HTML5 Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png')}}">
  <!-- Include Bootstrap Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" type="text/css" >
  
  <!-- Include Bootstrap Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.min.css')}}" type="text/css" >
  <!-- Include Animate Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}" type="text/css" >
  <!-- Include Fontawesome Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}" type="text/css" >
  <!-- Include Magnific PopUp Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}" type="text/css" >
  <!-- bxSlider CSS file -->
  <link href="{{ asset('assets/css/jquery.bxslider.css')}}" rel="stylesheet" type="text/css" />
  <!-- Include Style Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css" >
  <!-- Include Responsive Css -->
  <link rel="stylesheet" href="{{ asset('css/responsive.min.css')}}" type="text/css" >
  <!-- Include Modernizer Js -->
  <script src="{{URL::asset('assets/js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>

  
</head>
<body>

<header id="masthead" class="masthead navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="http://localhost/Project/public/index.php/index"<h1 style="color:red;">Connecting Professionals</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <nav id="main-menu" class="collapse navbar-collapse pull-right">

        <ul class="nav navbar-nav">
          <li class="active">
            <form action="{{url('/info')}}" class="search-form">
                  <input type="text" id="search" name="search" class="search" placeholder="Search for people.." required="">
                  <button type="submit" id="search-submit" class="search-submit"><i class="fa fa-search"></i></button>
                </form>
          </li>
          <li class="active"><a href="http://localhost/Project/public/index.php/index">Home</a></li>
          <li><a href="http://localhost/Project/public/index.php/services">Services</a></li>

            <!--
          <li><a href="about.html">About Us</a></li>
          <li><a href="protfolio.html">Portfolio</a></li>
          <li><a href="contact.html">Contact us</a></li>
          

          -->
          
           @if(session()->has('name'))

          <li><a href="http://localhost/Project/public/index.php/profile/Ishita">Profile</a></li>
          <li><a href="http://localhost/Project/public/index.php/network">Network</a></li>
          
          <li><a href="http://localhost/Project/public/index.php/logout">Logout</a></li>
           @else
          <li><a href="http://localhost/Project/public/index.php/ashollogin">Login</a></li>
        
         
          
          
@endif
          
      
        </ul>
      </nav><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </header>



  <!-- Main Slider -->

  <section id="main-slider" class="main-slider text-center">
    <div class="head-overlay">
      <ul class="bxslider">
        <li>
          <div class="head-overlay">
            <img src="{{ asset('image/slider/1.jpg')}}"/>
          </div><!-- /.head-overlay -->
          <div class="slider-text">
            <div class="slide-inner">
              <h2 class="slider-title" data-animation="wow animated bounceInDown">Welcome to <span>Connecting Professionals</span></h2>
              <p class="slide-description">connect professional people in the business market</p>
              <div class="slide-btn-container">
                <a class="btn" href="http://localhost/Project/public/index.php/login_index">Sign Up now</a>
              </div><!-- /.slide-btn-container -->
            </div><!-- /.slide-inner -->
          </div><!-- /.slider-text -->
        </li>
        <li>
          <div class="head-overlay">
            <img src="{{ asset('image/slider/3.jpg')}}"/>
          </div><!-- /.head-overlay -->
          <div class="slider-text">
            <div class="slide-inner">
              <h2 class="slider-title">Improve your knowledge</h2>
              <p class="slide-description">get information about other academic and business organizations</p>
              <div class="slide-btn-container">
                 <a class="btn" href="http://localhost/Project/public/index.php/login_index">Sign Up now</a>
              </div><!-- /.slide-btn-container -->
            </div><!-- /.slide-inner -->
          </div><!-- /.slider-text -->
        </li>

        <li>
          <div class="head-overlay">
            <img src="{{ asset('image/slider/2.jpg')}}"/>
          </div><!-- /.head-overlay -->
          <div class="slider-text">
            <div class="slide-inner">
              <h2 class="slider-title">Connect yourself with others</h2>
              <p class="slide-description">connect yourself with other business people worldwide</p>
              <div class="slide-btn-container">
                 <a class="btn" href="http://localhost/Project/public/index.php/login_index">Sign Up now</a>
              </div><!-- /.slide-btn-container -->
            </div><!-- /.slide-inner -->
          </div><!-- /.slider-text -->
        </li>


        <li>
          <div class="head-overlay">
            <img src="{{ asset('image/slider/4.jpg')}}"/>k2
          </div><!-- /.head-overlay -->
          <div class="slider-text">
            <div class="slide-inner">
              <h2 class="slider-title">Be professional</h2>
              <p class="slide-description">lots of jobs are available and get new jobs from here</p>
              <div class="slide-btn-container">
                <a class="btn" href="http://localhost/Project/public/index.php/login_index">Sign Up now</a>
              </div><!-- /.slide-btn-container -->
            </div><!-- /.slide-inner -->
          </div><!-- /.slider-text -->
        </li>

        <li>
          <div class="head-overlay">
            <img src="{{ asset('image/slider/5.jpg')}}"/>
          </div><!-- /.head-overlay -->
          <div class="slider-text">
            <div class="slide-inner">
              <h2 class="slider-title">Share your experience</h2>
              <p class="slide-description">let other people know about your experience and work field</p>
              <div class="slide-btn-container">
                <a class="btn" href="http://localhost/Project/public/index.php/login_index">Sign Up now</a>
                              </div><!-- /.slide-btn-container -->
            </div><!-- /.slide-inner -->
          </div><!-- /.slider-text -->
        </li>

        <li>
          <div class="head-overlay">
            <img src="{{ asset('image/slider/6.jpg')}}"/>
          </div><!-- /.head-overlay -->
          <div class="slider-text">
            <div class="slide-inner">
              <h2 class="slider-title">Create your own company</h2>
              <p class="slide-description">start a business by creating your own company and create new job opportunities</p>
              <div class="slide-btn-container">
               <a class="btn" href="http://localhost/Project/public/index.php/login_index">Sign Up now</a>
              </div><!-- /.slide-btn-container -->
            </div><!-- /.slide-inner -->
          </div><!-- /.slider-text -->
        </li>






      </ul>
    </div><!-- /.head-overlay -->
  </section><!-- /#main-slider --> 

  <!-- Main Slider -->




 

  <div class="clearfix"></div><!-- /.clearfix -->



  <!-- Subscribe Section -->



  <!-- Subscribe Section -->




  


  


  

  <!-- Latest Blog Post -->




  <!-- Testimonials Section -->

  <section id="testimonial" class="testimonial text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
    <div class="pattern-overlay">
      <div class="section-padding">
        <div class="container">
          <div class="section-top wow animated fadeInUp" data-wow-delay=".5s">
            <h2 class="section-title">Our Testimonials</h2><!-- /.section-title -->
          </div><!-- /.section-top -->
          <div class="section-details wow animated fadeInUp" data-wow-delay=".5s">
            <div id="testimonial-slider" class="testimonial-slider carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#testimonial-slider" data-slide-to="0" class="active"></li>
                <li data-target="#testimonial-slider" data-slide-to="1"></li>
                <li data-target="#testimonial-slider" data-slide-to="2"></li>
                <li data-target="#testimonial-slider" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <blockquote class="client-quote">
                    Connecting professional is one of the biggest professional platform. The main aim of this website is to increase communication among professional people.
                  </blockquote><!-- /.client-quote -->
                </div><!-- /.item -->
                <div class="item">
                  <blockquote class="client-quote">
                    We promise you to find the best job.
                  </blockquote><!-- /.client-quote -->
                </div><!-- /.item -->
                <div class="item">
                  <blockquote class="client-quote">
                    We promise to raise your lifestyle.
                  </blockquote><!-- /.client-quote -->
                </div><!-- /.item -->
                <div class="item">
                  <blockquote class="client-quote">
                   We promise you to be a professional.
                  </blockquote><!-- /.client-quote -->
                </div><!-- /.item -->
              </div>
            </div><!-- /#testimonial-slider -->
          </div><!-- /.section-details -->
        </div><!-- /.container -->
      </div><!-- /.section-padding -->
    </div><!-- /.pattern-overlay -->
  </section><!-- /#testimonial -->

  <!-- Testimonials Section -->








  <!-- Footer Section -->

  <footer id="colophon" class="footer site-footer" role="contentinfo">

    <div class="footer-social text-center">
      <div class="social-contact">
        <div class="col-xs-4">
          <div class="social-item wow animated fadeInRight" data-wow-delay=".75s">
            <div class="section-padding">
              <div class="social-icon">
                <i class="fa fa-facebook"></i>
              </div><!-- /.social-icon -->
              <div class="countdown">
                <span class="count-number counter">1,203</span>
              </div><!-- /.coundown -->
              <span class="about-item">likes</span>
            </div><!-- /.section-padding -->
          </div><!-- /.social-item -->
        </div>

        <div class="col-xs-4">
          <div class="social-item wow animated fadeInRight" data-wow-delay=".55s">
            <div class="section-padding">
              <div class="social-icon">
                <i class="fa fa-twitter"></i>
              </div><!-- /.social-icon -->
              <div class="countdown">
                <span class="count-number counter">2,305</span>
              </div><!-- /.coundown -->
              <span class="about-item">followers</span>
            </div><!-- /.section-padding -->
          </div><!-- /.social-item -->
        </div>

        <div class="col-xs-4">
          <div class="social-item wow animated fadeInRight" data-wow-delay=".35s">
            <div class="section-padding">
              <div class="social-icon">
                <i class="fa fa-dribbble"></i>
              </div><!-- /.social-icon -->
              <div class="countdown">
                <span class="count-number counter">1,101</span>
              </div><!-- /.coundown -->
              <span class="about-item">fans</span>
            </div><!-- /.section-padding -->
          </div><!-- /.social-item -->
        </div>
      </div><!-- /.social-contact -->
    </div><!-- /.footer-social -->



    <div class="footer-bottom">
      <div class="container">
        <div class="footer-menu pull-left">
          <div class="widget widget_menu">
            <nav class="widget-menu">
              
            </nav>
          </div><!-- /.widget -->
        </div><!-- /.footer-menu -->

     <!--   <div class="copy-right pull-right"></div> -->

      </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
  </footer><!-- /#colophon -->

  <!-- Footer Section -->



  <div id="scroll-to-top" class="scroll-to-top">
    <span>
      <i class="fa fa-chevron-up"></i>    
    </span>
  </div><!-- /#scroll-to-top -->




  <!-- Include jQuery Js -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Include jQuery Js -->
  <script>window.jQuery || document.write('<script src="{{URL::asset('assets/js/jquery-1.11.2.min.js')}}"><\/script>')</script>
  <!-- Include WOW Min Js -->
  <script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
  <!-- Google Maps Script -->
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <!-- Gmap3.js For Static Maps -->
  <script src="{{URL::asset('assets/js/gmap3.js')}}"></script>
  <!-- Include Waypoint Js -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <!-- Include Ajax MailChimp Js -->
  <script src="{{URL::asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <!-- Include Custom Js </-->
  <script src="{{URL::asset('assets/js/custom.min.js')}}"></script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63948535-1', 'auto');
  ga('send', 'pageview');

</script>


  <script>

    $(".bxslider").bxSlider({auto:!0,preloadImages:"all",mode:"horizontal",captions:!1,controls:!0,pause:4000,speed:1200,onSliderLoad:function(){$(".bxslider>li .slide-inner").eq(1).addClass("active-slide"),$(".slide-inner.active-slide .slider-title").addClass("wow animated bounceInDown"),$(".slide-inner.active-slide .slide-description").addClass("wow animated bounceInRight"),$(".slide-inner.active-slide .btn").addClass("wow animated zoomInUp")},onSlideAfter:function(e,i,n){console.log(n),$(".active-slide").removeClass("active-slide"),$(".bxslider>li .slide-inner").eq(n+1).addClass("active-slide"),$(".slide-inner.active-slide").addClass("wow animated bounceInRight")},onSlideBefore:function(){$(".slide-inner.active-slide").removeClass("wow animated bounceInRight"),$(".one.slide-inner.active-slide").removeAttr("style")}}),$(document).ready(function(){function e(){return"ontouchstart"in document.documentElement}function i(){if("undefined"!=typeof google){var i={center:[-37.817331,144.955652],zoom:15,mapTypeControl:!0,mapTypeControlOptions:{style:google.maps.MapTypeControlStyle.DROPDOWN_MENU},navigationControl:!0,scrollwheel:!1,streetViewControl:!0};e()&&(i.draggable=!1),$("#googleMaps").gmap3({map:{options:i},marker:{latLng:[23.709921,90.407143],options:{icon:"images/mapicon.png"}}})}}$("#masthead #main-menu").onePageNav(),i()}),$("#contactform").on("submit",function(e){e.preventDefault(),$this=$(this),$.ajax({type:"POST",url:$this.attr("action"),data:$this.serialize(),success:function(){alert("Message Sent Successfully")}})});

  </script>
</body>
</html>
