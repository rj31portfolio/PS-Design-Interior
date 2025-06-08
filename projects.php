
<?php
define("BASE_URL", "http://localhost/Interior/"); // Change to your actual path
?>
<!DOCTYPE html>
<html lang="zxx">


<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
    <title>Inspaire - Architecture and Interior Design HTML Template</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="css/all.min.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="css/mousecursor.css">
	<!-- Main Custom Css -->
	<link href="css/custom.css" rel="stylesheet" media="screen">
</head>
<body>

    <!-- Preloader Start -->
	<?php require_once "preloader.php" ?>
	<!-- Preloader End -->

    <!-- Header Start -->
	<?php require_once "header.php" ?>
	<!-- Header End -->

    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Our projects</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">home</a></li>
								<li class="breadcrumb-item active" aria-current="page">our projects</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Our Project Start -->
    <div class="page-project">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Project Nav start -->
                    <div class="our-Project-nav wow fadeInUp">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">all</a></li>
                            <li><a href="#" data-filter=".architecture">architecture</a></li>
                            <li><a href="#" data-filter=".interior">interior</a></li>
                            <li><a href="#" data-filter=".bedroom">bedroom</a></li>
                            <li><a href="#" data-filter=".furniture">furniture</a></li>
                            <li><a href="#" data-filter=".kitchen">kitchen</a></li>
                        </ul>
                    </div>
                    <!-- Our Project Nav End -->
                </div>
    
                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row project-item-boxes align-items-center">
                        <div class="col-md-6 project-item-box architecture bedroom">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/project-1.jpg" alt="">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="project-single.html"><img src="images/arrow-white.svg" alt=""></a>
                                    </div>
                                </div>     
    
                                <div class="project-content">
                                    <h3>residential spaces</h3>
                                    <h2><a href="project-single.html">urban retreat: modern design meets comfort</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
    
                        <div class="col-md-6 project-item-box interior kitchen">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/project-2.jpg" alt="">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="project-single.html"><img src="images/arrow-white.svg" alt=""></a>
                                    </div>
                                </div>     
    
                                <div class="project-content">
                                    <h3>luxury homes</h3>
                                    <h2><a href="project-single.html">luxurious loft: industrial chic for living</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
    
                        <div class="col-md-6 project-item-box furniture architecture">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/project-3.jpg" alt="">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="project-single.html"><img src="images/arrow-white.svg" alt=""></a>
                                    </div>
                                </div>     
    
                                <div class="project-content">
                                    <h3>outdoor living spaces</h3>
                                    <h2><a href="project-single.html">coastal vibes: serenity by the sea</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
    
                        <div class="col-md-6 project-item-box kitchen bedroom">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="0.8s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/project-4.jpg" alt="">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="project-single.html"><img src="images/arrow-white.svg" alt=""></a>
                                    </div>
                                </div>     
    
                                <div class="project-content">
                                    <h3>modern designs</h3>
                                    <h2><a href="project-single.html">minimalist haven: simple, clean, inviting spaces</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box interior">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="1s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/project-5.jpg" alt="">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="project-single.html"><img src="images/arrow-white.svg" alt=""></a>
                                    </div>
                                </div>     
    
                                <div class="project-content">
                                    <h3>Rustic Charm Revived</h3>
                                    <h2><a href="project-single.html">Nature's Embrace: Timeless Tranquility</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>

                        <div class="col-md-6 project-item-box furniture">
                            <!-- Project Item Start -->
                            <div class="project-item wow fadeInUp" data-wow-delay="1.2s">
                                <div class="project-image">
                                    <div class="project-featured-image">
                                        <figure class="image-anime">
                                            <img src="images/project-6.jpg" alt="">
                                        </figure>
                                    </div>
                                
                                    <div class="project-btn">
                                        <a href="project-single.html"><img src="images/arrow-white.svg" alt=""></a>
                                    </div>
                                </div>     
    
                                <div class="project-content">
                                    <h3>Nature-Inspired Harmony</h3>
                                    <h2><a href="project-single.html">Bold Accents: Statement Living Design</a></h2>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        </div>
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Project End -->

   <!-- Footer Start -->
    <?php  require_once "footer.php"?>
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Isotop js file -->
	<script src="js/isotope.min.js"></script>
    <!-- Magnific js file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Wow js file -->
    <script src="js/wow.min.js"></script>
    <!-- Main Custom js file -->
    <script src="<?php echo BASE_URL; ?>/js/script.js"></script>
</body>


</html>