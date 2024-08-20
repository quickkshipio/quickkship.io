<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>QuickkShip</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="jobado/layout/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="jobado/layout/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="jobado/layout/css/menu.css">
    <link rel="stylesheet" type="text/css" href="jobado/layout/css/style.css">
    <link rel="stylesheet" type="text/css" href="jobado/layout/css/color/style1.css" id="colors">
    <link rel="stylesheet" type="text/css" href="jobado/layout/css/animation.css">
    <link rel="stylesheet" type="text/css" href="jobado/layout/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="jobado/layout/css/mouse_position.css">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="jobado/layout/images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<body id="home" style="background-color: #141416;">
<div class="wrapper" style="background-color: #141416;">
    <!-- =====  HEADER START  ===== -->
    <?php include('header.php'); ?>
    <!-- =====  HEADER END  ===== -->
    <!-- =====  BANNER STRAT  ===== -->
    <div class="banner2 large-header bg-color" id="large-header">
        <div class="banner-detail ">
            <div class="cd-intro">
                <div class="custom-box">
                    <h2 class="about-heading mb_40 wow fadeInUp" data-wow-delay="0.2s">Welcome to QuickkShip</h2>
                    <div class="text">
                        QuickkShip is revolutionizing the way you ship packages. Our innovative platform offers seamless solutions for individuals and businesses alike. Say goodbye to shipping hassles and hello to convenience with QuickkShip.
                    </div>
                    <a class="custom-btn custom-btns light mtb_30 wow fadeInUp" data-wow-delay="0.2s" href="#about" id="scrollToAbout"><span>Read more</span></a>
                </div>
                <!-- JavaScript code for smooth scrolling -->
                <script>
                    document.getElementById("scrollToAbout").addEventListener("click", function (event) {
                        event.preventDefault(); // Prevent the default behavior of jumping to the section
                        const target = document.querySelector("#about");
                        if (target) {
                            target.scrollIntoView({ behavior: "smooth" }); // Use smooth scroll behavior
                        }
                    });
                </script>
            </div>
        </div>
    </div>
    <!-- =====  BANNER END  ===== -->

    <!-- =====  ABOUT START  ===== -->
    <section id="about" style="background-color: #141416;" class="ptb_100">
        <div class="about">
            <div class="container">
                <div class="about-inner ">
                    <div class="row">
                        <div class="col-md-16">
                            <div class="about-text">
                                <div class="about-heading-wrap">
                                    <h2 class="about-heading mb_40 wow fadeInUp" data-wow-delay="0.2s">Track your shipment</h2>
                                </div>
                                <p>Track your shipment with ease! Enter your unique Tracking ID below and click 'Track Now' for real-time updates on your delivery. Stay informed about the status, location, and estimated delivery time. We're committed to providing accurate and timely tracking details to enhance your experience. Thank you for choosing our services; we're here to keep you informed every step of the way!.</p>
                            </div>
                        </div>
                        <div class="main-banner">
                            <div class="caption header-text">
                                <div class="search-input" style="padding-left: 20px; padding-right: 20px;">
                                    <form id="searchForm" class="searchForm" action="#">
                                        <input type="text" placeholder="Tracking ID" class="searchText" id="searchText" name="searchKeyword" />
                                        <button type="submit" style="background-color: #ffc107;">Track Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====  ABOUT END  ===== -->

    <!-- =====  WORK WITH US STRAT  ===== -->
    <section class="text-center parallax ptb_100" data-source-url="jobado/layout/images/d.jpg">
        <div class="container">
            <div class="col-md-12 col-md-offset-0 col-sm-12 ptb_50">
                <h2 class="about-heading mb_40 wow fadeInUp" data-wow-delay="0.2s">DOWNLOAD OUR QUICKKSHIP APPS</h2>
                <div class="row text-left">
                    <div class="col-md-4 col-md-offset-4 mt_30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-i-left">
                            <div class="icon-right"><svg fill="#ffc107" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 210 210" xml:space="preserve" stroke="#ffc107"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M190.32,90.03L36.784,2.266C34.137,0.754,31.19,0,28.243,0c-0.06,0-0.119,0.008-0.178,0.008 c-0.396,0.004-0.791,0.024-1.185,0.055c-0.178,0.014-0.355,0.033-0.533,0.053c-0.308,0.034-0.615,0.077-0.921,0.128 c-0.111,0.019-0.223,0.025-0.334,0.046l0.006,0.008c-1.913,0.353-3.78,1.027-5.515,2.034c-5.314,3.083-8.585,8.762-8.585,14.905 v175.527c0,6.143,3.271,11.822,8.585,14.905c1.734,1.007,3.601,1.682,5.514,2.035l-0.005,0.007c0.1,0.019,0.201,0.025,0.3,0.041 c0.329,0.056,0.659,0.102,0.99,0.137c0.166,0.018,0.331,0.036,0.497,0.049c0.389,0.031,0.777,0.049,1.167,0.054 c0.066,0.001,0.131,0.009,0.197,0.009c2.947,0,5.894-0.754,8.541-2.266L190.32,119.97c5.368-3.069,8.681-8.777,8.681-14.962 c0,0,0-0.003,0-0.004c0,0,0-0.003,0-0.004c0,0,0-0.003,0-0.004c0,0,0-0.003,0-0.004C199.001,98.808,195.688,93.1,190.32,90.03z M129.602,72.601l-15.266,20.027L75.496,41.672L129.602,72.601z M182.876,106.947l-107.38,61.381l67.234-88.206l40.145,22.947 c0.695,0.397,1.127,1.141,1.127,1.938C184.001,105.807,183.569,106.551,182.876,106.947z"></path></g></svg></div>
                            <h4 class="mb_10 title">Android App</h4>
                            <div class="email"><a href="mailto:contactus@quickkship.com?subject=A vistor from Portfolio website&body=Hi Can you give me more info about,%0D%0A%0D%0A" target="_top">View on play store</a></div>
                        </div>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="col-md-4 col-md-offset-4 mt_30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-i-left">
                            <div class="icon-right"><svg fill="#ffc107" width="40px" height="40px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m12.434 4.693c.132-.225.345-.391.598-.458l.007-.002c.082-.028.176-.044.275-.044.177 0 .341.053.479.143l-.003-.002c.219.139.382.349.458.597l.002.008c.025.078.039.169.039.262 0 .192-.06.369-.162.515l.002-.003-4.21 7.307h3.048.029c.467 0 .87.274 1.057.671l.003.007c.118.192.187.425.187.674 0 .232-.061.45-.167.639l.003-.007h-8.947c-.008 0-.017 0-.027 0-.273 0-.52-.111-.699-.291-.179-.175-.29-.418-.29-.688 0-.005 0-.01 0-.014v.001c0-.004 0-.009 0-.014 0-.27.111-.513.29-.688.178-.18.426-.291.699-.291h.028-.001 2.516l3.193-5.564-.971-1.739c-.1-.143-.16-.321-.16-.512 0-.094.014-.184.041-.269l-.002.006c.078-.256.241-.466.456-.602l.004-.003c.134-.089.299-.141.476-.141.098 0 .193.016.281.046l-.006-.002c.26.069.473.235.602.455l.003.005.435.774zm-5.177 12.967c-.151.216-.368.378-.62.458l-.008.002c-.081.027-.175.043-.272.043-.177 0-.342-.052-.481-.142l.003.002c-.227-.13-.394-.344-.459-.598l-.001-.007c-.02-.078-.032-.168-.032-.261 0-.188.048-.365.131-.519l-.003.006.726-1.21c.169-.061.365-.097.569-.097.556 0 1.05.264 1.363.674l.003.004zm11.661-4.644h.027c.273 0 .52.111.699.291.179.175.29.418.29.688v.014-.001.014c0 .27-.111.513-.29.688-.178.18-.426.291-.699.291-.009 0-.019 0-.028 0h.001-1.403l.968 1.645c.075.137.119.3.119.474 0 .107-.017.211-.048.308l.002-.007c-.078.256-.241.466-.456.602l-.004-.003c-.134.088-.299.141-.475.141-.098 0-.192-.016-.28-.046l.006.002c-.26-.069-.473-.235-.602-.455l-.003-.005-3.629-6.338c-.273-.429-.435-.952-.435-1.512 0-.184.017-.363.051-.538l-.003.018c.091-.523.352-.974.723-1.304l.002-.002 2.903 5.032zm-6.919-13.015h.077c2.185 0 4.229.602 5.976 1.65l-.053-.029c1.824 1.075 3.304 2.555 4.348 4.322l.031.056c1.018 1.694 1.621 3.738 1.621 5.923v.081-.004.077c0 2.185-.602 4.229-1.65 5.976l.029-.053c-1.075 1.824-2.555 3.304-4.322 4.348l-.056.031c-1.694 1.018-3.738 1.621-5.923 1.621-.027 0-.054 0-.081 0h.004c-.023 0-.05 0-.077 0-2.185 0-4.229-.602-5.976-1.65l.053.029c-1.824-1.075-3.304-2.555-4.348-4.323l-.031-.056c-1.018-1.694-1.621-3.738-1.621-5.923 0-.027 0-.054 0-.081v.004c0-.023 0-.05 0-.077 0-2.185.602-4.229 1.65-5.976l-.029-.053c1.075-1.824 2.555-3.304 4.322-4.348l.056-.031c1.694-1.018 3.738-1.621 5.923-1.621h.081-.004zm10.452 11.999c0-.027 0-.058 0-.09 0-1.901-.52-3.681-1.426-5.205l.026.047c-.934-1.588-2.227-2.873-3.772-3.771l-.05-.027c-1.485-.881-3.273-1.402-5.183-1.402-.025 0-.05 0-.075 0h.004c-.022 0-.048 0-.075 0-1.899 0-3.677.521-5.197 1.429l.046-.026c-1.588.934-2.873 2.226-3.771 3.771l-.027.05c-.882 1.485-1.403 3.275-1.403 5.186v.065-.003.075c0 1.899.521 3.677 1.429 5.197l-.026-.046c.934 1.588 2.227 2.873 3.772 3.771l.05.027c1.485.882 3.275 1.403 5.186 1.403h.067-.003.075c1.899 0 3.677-.521 5.197-1.429l-.046.026c1.59-.934 2.876-2.227 3.775-3.773l.027-.05c.882-1.481 1.403-3.267 1.403-5.174 0-.018 0-.037 0-.055v.003z"></path></g></svg></div>
                            <h4 class="mb_10 title">IOS App</h4>
                            <div class="email"><a href="https://apps.apple.com/us/app/quickkship-admin/id6475731450" target="_top">View on app store</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====  FOOTER START  ===== -->
    <?php include('footer.php'); ?>
    <!-- =====  FOOTER END  ===== -->
</div>
<script src="jobado/layout/js/jQuery_v3.1.1.min.js"></script>
<script src="jobado/layout/js/owl.carousel.min.js"></script>
<script src="jobado/layout/js/bootstrap.min.js"></script>
<script src="jobado/layout/js/isotope.pkgd.min.js"></script>
<script src="jobado/layout/js/letters-type.js"></script>
<script src="jobado/layout/js/menu.js"></script>
<script src="jobado/layout/js/custom.js"></script>
<script src="jobado/layout/js/circle-progress.js"></script>
<script src="jobado/layout/js/circle-progress-examples.js"></script>
<script src="jobado/layout/js/map.js"></script>
<script src="jobado/layout/js/parallax.js"></script>
<script src="jobado/layout/js/wow.js"></script>
<script src="jobado/layout/js/mail.js"></script>
<script src="jobado/layout/js/mouse_position.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
