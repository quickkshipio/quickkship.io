<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <title><?php if($pgTitle){echo $pgTitle;} ?>QuickkShip</title>
	<link rel="canonical" href="https://html.lionode.com" />
  <!-- =====  SEO MATE  ===== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">
  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
  <!-- =====  CSS  ===== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="jobado/layout/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="jobado/layout/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="jobado/layout/css/menu.css">
  <link rel="stylesheet" type="text/css" href="jobado/layout/css/style.css">
  <link rel="stylesheet" type="text/css" href="jobado/layout/css/new-style.css">
  <link rel="stylesheet" type="text/css" href="jobado/layout/css/color/style1.css" id="colors">
  <link rel="stylesheet" type="text/css" href="jobado/layout/css/animation.css">
  <link rel="stylesheet" type="text/css" href="jobado/layout/css/owl.carousel.css">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="jobado/layout/images/favicon.png">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  
</head>
<body id="home, style= background-color: #141416;">
  <div class="wrapper", style="background-color: #141416;">

    

    <script src="jobado/layout/js/jQuery_v3.1.1.min.js"></script>
    <!-- ... (your existing script imports) ... -->
    <script src="assets/js/main.js"></script>

    <!-- =====  HEADER START  ===== -->
    <header id="header" style="background-color: white;">
      <div class="header navbar">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header pull-left"> <a class="navbar-brand" href="index.html">  <img src="jobado/layout/images/png-03.png" alt="QuickkShip Logo" style="height: 60px"></a> </div>
          <!-- Collection of nav links, forms, and other content for toggling -->
          <div id="navbarCollapse" class="navbar-collapse navbar-right">
            <nav id="menu" class="collapse">
              <!-- Navigation Menu -->
              <ul class="nav">
                <li class="active"> <a href="index.html", style="color:black ;">Home</a></li>
                <li> <a href="https://quickkship.com/about.html"  style="color: black;">About</a></li>
                <li> <a href="https://tracking.quickkship.com/"  style="color:  black">Tracking</a></li>
                <li> <a href="https://tracking.quickkship.com/packages"  style="color:  black">Packages</a></li>
                <li> <a href="https://quickkship.com/contact.html"  style="color: black;">Contact</a></li>
                <?php
                if(empty($_SESSION)) {
                ?>
                <li> <a href="https://tracking.quickkship.com/login"  style="color: black;">Login</a></li>
                <li> <a href="https://tracking.quickkship.com/register"  style="color: black;">Register</a></li>
                <?php
                }
                else {
                ?>
                <li> <a href="https://tracking.quickkship.com/dashboard"  style="color: black;">Dashboard</a></li>
                <?php
                }
                ?>
              </ul>
              <!--End Navigation Menu -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- =====  HEADER END  ===== -->