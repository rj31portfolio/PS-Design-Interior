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

    <!-- Hero Section Start -->
   <?php  include "hero-home.php"?>
    <!-- Hero Section End -->
    
    <!-- About Us Section Start -->
    <?php  include "about-home.php"?>
    <!-- About Us Section End -->

    <!-- Why Choose Us Section Start -->
    <?php  include "whychoose-home.php"?>
    <!-- Why Choose Us Section End -->

    <!-- Our Services Section Start -->
    <?php  include "service-home.php"?>
    <!-- Our Services Section End -->

    <!-- Intro Video Section Start -->
    <?php  include "intro-video.php"?>
    <!-- Intro Video Section End -->

    <!-- Our Project Start -->
    <div class="our-project">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-5">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">latest project</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Creative projects that define<span> our style</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-7">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Our portfolio showcases a diverse range of projects, from beautifully crafted residential spaces functional and stylish commercial interiors</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Project Nav start -->
                    <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.4s">
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
                            <div class="project-item wow fadeInUp">
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
                            <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
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
                            <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
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
                            <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
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
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
     </div>
    <!-- Our Project End -->

    <!-- How We Work Start -->
    <div class="how-we-work">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">how we work</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">From concept to completion in<span> our work</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content dark-section">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Our comprehensive approach guides you through each phase of the design process, from initial brainstorming and conceptualization.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- How We Work List Start -->
                    <div class="how-we-work-list">
                        <!-- How We Item Start -->
                        <div class="how-we-work-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-1.svg" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>01. initial consultation</h3>
                                <p>We start with a one-on meeting to understand your vision preferences and requirement.</p>
                            </div>
                        </div>
                        <!-- How We Item End -->

                        <!-- How We Item Start -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-2.svg" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>02. design planning</h3>
                                <p>This involves selecting materials, and layouts, furnishings, as well as creating 3D renderings.</p>
                            </div>
                        </div>
                        <!-- How We Item End -->

                        <!-- How We Item Start -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-3.svg" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>03. project execution</h3>
                                <p>With the design plans in this place, we manage and coordinate all aspects of the projects.</p>
                            </div>
                        </div>
                        <!-- How We Item End -->

                        <!-- How We Item Start -->
                        <div class="how-we-work-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <img src="images/icon-how-we-work-4.svg" alt="">
                            </div>
                            <div class="how-we-work-content">
                                <h3>04. final review</h3>
                                <p>After completing project we conduct a thorough walkthrough with you to review the space.</p>
                            </div>
                        </div>
                        <!-- How We Item End -->
                    </div>
                    <!-- How We Work List End -->

                    <!-- How Work Company Slider Start -->
                    <div class="how-work-company-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-1.svg" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->

                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-2.svg" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->

                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-3.svg" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->
                                
                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-4.svg" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->
                                
                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-5.svg" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->
                                
                                <!-- Company Support Logo Start -->
                                <div class="swiper-slide">
                                    <div class="company-logo">
                                        <img src="images/company-logo-1.svg" alt="">
                                    </div>
                                </div>
                                <!-- Company Support Logo End -->
                            </div>
                        </div>
                    </div>
                    <!-- How Work Company Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- How We Work End -->

    <!-- Our Skill Start -->
    <div class="our-skill">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Our Skill Content Start -->
                    <div class="our-skill-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our skills</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Skills that shape your<span> dream home</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Our dedicated team of designers works closely with you to understand your vision and bring it to life with thoughtful attention to detail.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About SkillBar Start -->
                        <div class="our-skillbar">
                            <!-- Skills Progress Bar Start -->
                            <div class="skills-progress-bar">
                                <!-- Skill Item Start -->
                                <div class="skillbar" data-percent="95%">
                                    <div class="skill-data">
                                        <div class="skill-title">space planning and layout</div>
                                        <div class="skill-no">95%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                                <!-- Skill Item End -->
                            </div>
                            <!-- Skills Progress Bar End -->
                        
                            <!-- Skills Progress Bar Start -->
                            <div class="skills-progress-bar">
                                <!-- Skill Item Start -->
                                <div class="skillbar" data-percent="85%">
                                    <div class="skill-data">
                                        <div class="skill-title">project challenges and solutions</div>
                                        <div class="skill-no">85%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                                <!-- Skill Item End -->
                            </div>
                            <!-- Skills Progress Bar End -->
                            
                            <!-- Skills Progress Bar Start -->
                            <div class="skills-progress-bar">
                                <!-- Skill Item Start -->
                                <div class="skillbar" data-percent="75%">
                                    <div class="skill-data">
                                        <div class="skill-title">sustainability and eco-friendly features</div>
                                        <div class="skill-no">75%</div>
                                    </div>
                                    <div class="skill-progress">
                                        <div class="count-bar"></div>
                                    </div>
                                </div>
                                <!-- Skill Item End -->
                            </div>
                            <!-- Skills Progress Bar End -->
                        </div>
                        <!-- About SkillBar End -->
                    </div>
                    <!-- Our Skill Content End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Skill Image Start -->
                    <div class="our-skill-image">
                        <div class="our-skill-img-1">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-img-1.jpg" alt="">
                            </figure>
                        </div>

                        <div class="our-skill-img-2">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-img-2.jpg" alt="">
                            </figure>
                        </div>

                        <div class="our-skill-img-3">
                            <figure class="image-anime reveal">
                                <img src="images/our-skill-img-3.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- Our Skill Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Skill End -->

    <!-- Our Testimonial Start -->
    <div class="our-testimonials">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <!-- Our Testimonial Image Start -->
                    <div class="our-testimonials-image">
                        <figure class="image-anime">
                            <img src="images/testimonial-img.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Our Testimonial Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Testimonial Content Start -->
                    <div class="our-testimonial-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">client testimonials</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Trusted by thousand of <span>people & companies.</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Testimonial Slider Start -->
                        <div class="testimonial-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper" data-cursor-text="Drag">
                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">	
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>                                        
                                            <div class="testimonial-body">
                                                <div class="testimonial-content">
                                                    <p>I couldn't be happier with the transformation of my home! From our very first consultation, the team at took the time to understand my vision and preferences.</p>
                                                </div>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/author-1.jpg" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>arlene mcCoy</h3>
                                                    <p>co. founder</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->

                                    <!-- Testimonial Slide Start -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">	
                                            <div class="testimonial-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>                                        
                                            <div class="testimonial-content">
                                                <p>I couldn't be happier with the transformation of my home! From our very first consultation, the team at took the time to understand my vision and preferences.</p>
                                            </div>
                                            <div class="testimonial-body">
                                                <div class="author-image">
                                                    <figure class="image-anime">
                                                        <img src="images/author-1.jpg" alt="">
                                                    </figure>
                                                </div>            
                                                <div class="author-content">
                                                    <h3>arlene mcCoy</h3>
                                                    <p>co founder</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Testimonial Slide End -->
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Slider End -->

                        <!-- Testimonial Rating Counter Start -->
                        <div class="testimonial-rating-counter">
                            <div class="rating-counter">
                                <h2><span class="counter">4.82</span></h2>
                            </div>
                            <div class="testimonial-rating-content">
                                <div class="testimonial-client-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>2,488 reviews</p>
                            </div>
                        </div>
                        <!-- Testimonial Rating Counter End -->
                    </div>
                    <!-- Our Testimonial Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial End -->

    <!-- Our Blog Section Start -->
    <div class="our-blog">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">latest news</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Your guide to</span> inspired interiors</h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content">
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Your journey to inspired interiors begins here. Our blog offers a wealth of resources, including design tips, trend analyses.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog-single.html" class="image-anime" data-cursor-text="View">
                                    <img src="images/post-1.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="blog-single.html">How Does One Go About a Buying Furniture?</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="post-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog-single.html" class="image-anime" data-cursor-text="View">
                                    <img src="images/post-2.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="blog-single.html">Innovative Décor Ideas Shaping Homes Today</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="post-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <figure>
                                <a href="blog-single.html" class="image-anime" data-cursor-text="View">
                                    <img src="images/post-3.jpg" alt="">
                                </a>
                            </figure>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h3><a href="blog-single.html">Design Industry Updates You Should Know About</a></h3>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Blog Item Button Start -->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="post-btn">read more</a>
                            </div>
                            <!-- Blog Item Button End -->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- Our Blog Footer Start -->
                    <div class="our-blog-footer wow fadeInUp" data-wow-delay="0.6s">
                        <a href="blog.html" class="btn-default">See All Blogs</a>
                    </div>
                    <!-- Our Blog Footer End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Blog Section End -->

    <!-- Footer Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Footer Header Start -->
                    <div class="footer-header">
                        <div class="row align-items-center">  
                            <div class="col-md-6">
                                <!-- Footer Logo Start -->
                                <div class="footer-logo">
                                    <img src="images/footer-logo.svg" alt="">
                                </div>
                                <!-- Footer Logo End -->
                            </div>

                            <div class="col-md-6">
                                <!-- Footer Social Link Start -->
                                <div class="footer-social-links">
                                    <div class="footer-social-link-title">
                                        <h3>follow our socials</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Footer Social Link End -->
                            </div>
                        </div>
                    </div>
                    <!-- Footer Header End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Footer Links Start -->
                     <div class="footer-links">
                        <h3>information</h3>
                        <ul>
                            <li><a href="about.html">about our company</a></li>
                            <li><a href="services.html">view our service</a></li>
                            <li><a href="#">careers at company</a></li>
                            <li><a href="blog.html">read our blog</a></li>
                            <li><a href="projects.html">our latest projects</a></li>
                        </ul>
                     </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Footer Links Start -->
                     <div class="footer-links">
                        <h3>portfolio</h3>
                        <ul>
                            <li><a href="project-single.html">luxury home design</a></li>
                            <li><a href="project-single.html">residential interior design</a></li>
                            <li><a href="project-single.html">commercial space design</a></li>
                            <li><a href="project-single.html">residential interior design</a></li>
                            <li><a href="project-single.html">renovation and restoration design</a></li>
                        </ul>
                     </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Footer Contact Box Start -->
                    <div class="footer-contact-box footer-links">
                        <h3>contact us</h3>
                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="footer-contact-content">
                                <p>+1 (213) 465 789</p>
                            </div>
                        </div>
                        <!-- Footer Contact Item End -->

                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="footer-contact-content">
                                <p>info@domain.com</p>
                            </div>
                        </div>
                        <!-- Footer Contact Item End -->

                        <!-- Footer Contact Item Start -->
                        <div class="footer-contact-item">
                            <div class="icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="footer-contact-content">
                                <p>Generała Ziętka Jerzego 54, Mysłowice 41-412</p>
                            </div>
                        </div>
                        <!-- Footer Contact Item End -->
                    </div>
                    <!-- Footer Contact Box End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Footer Newsletter Form Start -->
                    <div class="footer-latest-news footer-links">
                        <h3>get the latest trending news</h3>
                        
                        <div class="footer-newsletter-form">
                            <p>Your Dream Space Starts Here Get Exclusive Design Straight Your Inbox!</p>

                            <form id="newslettersForm" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"  id="mail" placeholder="Enter your email" required>
                                    <button type="submit"><i class="fa-solid fa-arrow-right-long"></i> </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Footer Newsletter Form End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright © 2024 All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
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
    <script src="js/function.js"></script>
</body>


</html>