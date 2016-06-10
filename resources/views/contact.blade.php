<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->
<html class="no-js" lang=""> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contact us</title>
  <meta name="description" content="Polmo - One Page HTML5 Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png')}}">
  <!-- Include Bootstrap Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
  <!-- Include Bootstrap Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.min.css')}}">
  <!-- Include Animate Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
  <!-- Include Fontawesome Min Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
  <!-- Include Magnific PopUp Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
  <!-- bxSlider CSS file -->
  <link href="{{ asset('assets/css/jquery.bxslider.css')}}" rel="stylesheet" />
  <!-- Include Style Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <!-- Include Responsive Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.min.css')}}">
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
        <a class="navbar-brand" href="index" <h1="" style="color:red;">Connecting Professionals</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <nav id="main-menu" class="collapse navbar-collapse pull-right">

        <ul class="nav navbar-nav">
          <li class="active">
            <form action="#" class="search-form">
                  <input type="text" id="search" class="search" placeholder="Search for.." required="">
                  <button type="submit" id="search-submit" class="search-submit"><i class="fa fa-search"></i></button>
                </form>
          </li>
          <li class="active"><a href="index">Home</a></li>
          <li><a href="services">Services</a></li>

            <!--
          <li><a href="about.html">About Us</a></li>
          <li><a href="protfolio.html">Portfolio</a></li>
          <li><a href="contact.html">Contact us</a></li>
          

          -->
          <li><a href="profile">Profile</a></li>
          <li><a href="network">Network</a></li>
          <li><a href="jobs">Jobs</a></li>

          <li><a href="contact">Contact Us</a></li>
      
        </ul>
      </nav><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </header>

  <!-- Contact Section -->

  <section id="contact" class="contact">
    <div class="contact-inner">
      <div id="google-map" class="google-map">
        <div id="googleMaps" class="google-map-container"></div>
      </div><!-- /#google-map -->

      <div class="form-area text-center wow animated fadeInRight" data-wow-delay=".75s">
        <h2 class="section-title"><span>Contact</span> With Us</h2><!-- /.section-title -->
        <form action="email.php" method="post" id="contactform" class="contactform">
          <input id="name" class="form-control" name="name" type="text" placeholder="Name" value="" required>
          <input id="email" class="form-control pull-right" name="email" type="email" placeholder="Email" value="" required>
          <textarea id="message" class="form-control" name="message" placeholder="Your Message" rows="5" required></textarea>
          <button name="submit" class="btn submit-btn" type="submit" id="submit">Send Message</button>
        </form><!-- /#contactform -->
      </div><!-- /.form-area -->
    </div><!-- /.contact-inner -->
  </section>

  <!-- Contact Section -->

</body>
</html>