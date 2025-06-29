<?php
require_once "config.php"; // Include the configuration file for BASE_URL
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
    <title>Preeti Sethi Designs || Contact US</title>
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
						<h1 class="text-anime-style-2" data-cursor="-opaque">Conatct us</h1>
						<nav class="wow fadeInUp">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">home</a></li>
								
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Contact Us Image Start -->
                    <div class="contact-us-image">
                        <figure class="image-anime reveal">
                            <img src="images/bedroom-4.webp" alt="">
                        </figure>
                    </div>
                    <!-- Contact Us Image End -->
                </div>
                
                <div class="col-lg-6">
                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact form</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">We would love to hear <span>from you</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <!-- Contact Form Start -->
                           <form id="contactForm" action="contact_process.php" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">

                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="Email Address*" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">submit</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form End -->
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Section Start -->
    <div class="google-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Our contact</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Get in touch with us</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us an email or fill out the contact form and we'll get back to you.</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe">
                        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=23,%20Pocket%2019%20,%20Sector%2024%20,%20Rohini%20-%20110085+(Preeti%20Sethi%20Designs)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.mapsdirections.info/calcular-la-población-en-un-mapa"></a></iframe></div>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <!-- Conatct Info Item Start -->
                        <div class="contact-info-item wow fadeInUp">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>phone number</h3>
                                <p>+91 9971891303</p>
                               <!-- <p>(+07) 358 - 879 - 3257</p>       -->                         
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Conatct Info Item End -->

                        <!-- Conatct Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>e-mail support</h3>
                                <p>info@preetisethidesigns.com</p>
                               
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Conatct Info Item End -->

                        <!-- Conatct Info Item Start -->
                        <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                            <!-- Icon Box Start -->
                            <div class="icon-box">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <!-- Icon Box End -->

                            <!-- Contact Info Content Start -->
                            <div class="contact-info-content">
                                <h3>Office</h3>
                                <p>23, Pocket 19 , Sector 24 , Rohini -
110085</p>
                            </div>
                            <!-- Contact Info Content End -->
                        </div>
                        <!-- Conatct Info Item End -->
                    </div>
                    <!-- Contact Info Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Section End -->

  <!-- Footer Start -->
    <?php  require_once "footer.php"?>
    <!-- Footer End -->

   