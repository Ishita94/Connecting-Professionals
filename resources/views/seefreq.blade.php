<!DOCTYPE html>
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

  
  <style type="text/css">
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

  </style>

  <script type="text/javascript">
    
    $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
  </script>
</head>
<body>


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





  <section style="background-position: 50% 18.3px;" id="testimonial" class="text-center" data-stellar-background-ratio="0.1" data-stellar-vertical-offset="0">
    <div >
      <div class="section-padding">
        <div class="container">
          <div style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;" class="section-top wow  fadeInUp animated" data-wow-delay=".5s">
            
          </div><!-- /.section-top -->
          <div style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;" class="section-details wow  fadeInUp animated" data-wow-delay=".5s">
            <div id="testimonial-slider" class="testimonial-slider carousel slide" data-ride="carousel">
              <!-- Indicators -->

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <blockquote class="client-quote">
           
     
 

<center>
  

@if($data==null) 
<h> No pending friend requests</h>

@else

  <table cellpadding="10" cellspacing="0" border="1" width="250" height="200" >
    <th> Name</th>
    
    <th> Accept</th>
    <th> Reject</th>
   
    
    
    <tbody>
      @foreach($data as $val)
      <tr>
        <td>{{ $val->Sender_name}}</td>
       
        <td>
        <form action="{{ url('/').'/accept/'.$val->Sender_id.'/'.$val->Profile_id.'/'.$val->Sender_name}}">
        
          <button type="submit"  class="btn btn-lg btn-primary btn-block" >
            Accept
          </button>
        </form>
      </td>

      <td>
        <form action="{{ url('/').'/reject/'.$val->Sender_id.'/'.$val->Profile_id}}">
        
          <button type="submit"  class="btn btn-lg btn-primary btn-block" >
            Reject
          </button>
        </form>
      </td>
        
      </tr>
      @endforeach
    </tbody>

  </table>
@endif

</center>



                  </blockquote><!-- /.client-quote -->
                </div><!-- /.item -->
              </div>
            </div><!-- /#testimonial-slider -->
          </div><!-- /.section-details -->
        </div><!-- /.container -->
      </div><!-- /.section-padding -->
    </div><!-- /.pattern-overlay -->
  </section>














  <section id="main-slider" class="main-slider text-center">
    <div class="head-overlay">




    </div><!-- /.head-overlay -->
  </section><!-- /#main-slider --> 






  




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
