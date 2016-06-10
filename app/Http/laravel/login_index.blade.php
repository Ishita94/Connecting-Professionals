<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Multi Step Form with Progress Bar using jQuery and CSS3</title>
    
    
  

        <link rel="stylesheet" href="{{ asset('assets/css/login_style.css')}}">
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Polmo - One Page HTML5 Template By Jewel Theme</title>
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
  <link href="{{ asset('assets/css/jquery.bxslider.css')}}" rel="stylesheet">
  <!-- Include Style Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <!-- Include Responsive Css -->
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.min.css')}}">
  <!-- Include Modernizer Js -->
  <script async="" src="//www.google-analytics.com/analytics.js"></script><script src="{{URL::asset('assets/js/modernizr-2.8.3-respond-1.4.2.min.js')}}" style=""></script>

  
<script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/24/10/common.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/24/10/util.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/24/10/stats.js"></script></head>




<style >
a:link {
    text-decoration: none;
}
html,body{
   background-color: rgba(0, 0, 0, 0.55);
}
        </style>
    
    
  </head>

  <body>

<header id="masthead" class="masthead navbar navbar-default navbar-fixed-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu">
          <i class="fa fa-bars"></i>
        </button>
     <a class="navbar-brand" href="index"<h1 style="color:red;">Connecting Professionals</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <nav id="main-menu" class="collapse navbar-collapse pull-right">
        <ul class="nav navbar-nav">
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

          <li><a href="blog">Blog</a></li>
        </ul>
      </nav><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </header>


    <!-- multistep form -->

    

                    

                
                    
                    
  <!-- progressbar -->
  <form role="form" class="form-inline" action="{{ url('/').'/submitinfo'}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 

      <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
     <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
        </form>

                      
                     
                   
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

        <script src="{{URL::asset('assets/js/login_index.js')}}"></script>

    
    
    
  </body>
</html>
