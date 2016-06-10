<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <!--<![endif]-->
<html class="no-js" lang=""> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Polmo - One Page HTML5 Template By Jewel Theme</title>
  <meta name="description" content="Polmo - One Page HTML5 Template By Jewel Theme">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
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
        <a class="navbar-brand" href="./"><img src="{{ asset('images/logo.png')}}" alt="Site Logo"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <nav id="main-menu" class="collapse navbar-collapse pull-right">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#main-slider">Home</a></li>
          <li><a href="services">Services</a></li>
          <li><a href="about">About Us</a></li>
          <li><a href="protfolio">Portfolio</a></li>
          <li><a href="blog">Blog</a></li>
          <li><a href="contact">Contact us</a></li>
        </ul>
      </nav><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </header>

<!-- Latest Blog Post -->

  <section id="blog" class="blog text-center">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="section-top wow animated fadeInUp" data-wow-delay=".5s">
            <h2 class="section-title"><span>Our</span> Latest Blog Post</h2><!-- /.section-title -->
          </div><!-- /.section-top -->

          <div class="section-details">
            <div class="post-area">
              <div class="col-md-4">
                <article class="type-post post wow animated fadeInUp" data-wow-delay=".35s">
                  <div class="post-thumbnail">
                    <img src="{{ asset('images/blog/1.jpg')}}" alt="post image">
                  </div><!-- /.post-thumbnail -->

                  <div class="post-content">
                    <h4 class="entry-title"><a href="/single-post">TopClass WordPress Theme</a></h4><!-- /.entry-title -->
                    <p class="entry-content">
                      If the ether be the boundless substance described, it is clear it can have no form as a whole, and if it be continuous it can have no minute structure. If not constituted of atoms or molecules there is nothing descriptive that can be said about it.
                    </p><!-- /.entry-content -->
                  </div><!-- /.post-content -->
                </article><!-- /.type-post -->
              </div>

              <div class="col-md-4">
                <article class="type-post post wow animated fadeInUp" data-wow-delay=".55s">
                  <div class="post-thumbnail">
                    <img src="{{ asset('images/blog/2.jpg')}}" alt="post image">
                  </div><!-- /.post-thumbnail -->

                  <div class="post-content">
                    <h4 class="entry-title"><a href="single-post">Foody HTML5 Template</a></h4><!-- /.entry-title -->
                    <p class="entry-content">
                      A molecule or a particular mass of matter could be identified by its form, and is thus in marked contrast with any portion of ether, for the latter could not be identified in a similar way. One may therefore say that the ether is formless.
                    </p><!-- /.entry-content -->
                  </div><!-- /.post-content -->
                </article><!-- /.type-post -->
              </div>

              <div class="col-md-4">
                <article class="type-post post wow animated fadeInUp" data-wow-delay=".75s">
                  <div class="post-thumbnail">
                    <img src="{{ asset('images/blog/3.jpg')}}" alt="post image">
                  </div><!-- /.post-thumbnail -->

                  <div class="post-content">
                    <h4 class="entry-title"><a href="single-post">Memorials HTML5 Template</a></h4><!-- /.entry-title -->
                    <p class="entry-content">
                      One might infer already that if the ether were structureless, physical laws operative upon such material substances as atoms could not be applicable to it, and so indeed all the evidence we have shows that gravitation is not one of its properties.
                    </p><!-- /.entry-content -->
                  </div><!-- /.post-content -->
                </article><!-- /.type-post -->
              </div>

            </div><!-- /.post-area -->

            <div class="btn-container text-center">
              <a class="btn more" href="blog">View Blog</a>
            </div><!-- /.btn-container -->
          </div><!-- /.section-details -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /#blog -->

</body>
</html>