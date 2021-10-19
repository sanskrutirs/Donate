<?php
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savelife</title>
    <link rel="icon" href="img/money.png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="Donate.css">
    <script src="https://kit.fontawesome.com/f262bb2a7c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700%7CPermanent+Marker:400" media="all" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light fixed-top "  id="ftco-navbar" data-aos="fade-down">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img src="img/money.png" width="40" height="50" class="d-inline-block align-top" alt=""><span>S</span>avelife</a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="navbar-collapse collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                        <li class="nav-item" ><a href="#elementor" class="nav-link">URGENT CAUSES</a></li>
                        <li class="nav-item"><a href="#news" class="nav-link">News</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                        <li class="nav-item cta"><a href="https://rzp.io/l/TeCG2EaX" target="_blank" class="nav-link">Donate Now!</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active dark-overlay">
                <img class="d-block w-100 resize" src="img/promo.jpg" alt="First slide">
                <img class="d-block w-100 Secresize" src="img/promo_2.jpg" alt="First slide">
                <div class="carousel-caption left-caption text-left">
                    <h1 data-aos="fade-right" data-delay="200" data-aos-duration="1000"><span> Raise your </span><br> hand for poor families</h1>
                    <p data-aos="fade-right" data-delay="300" data-aos-duration="1000">Service to others is the rent you pay for your room here on earth.</p>
                    <a href="#about"><span class="arrow">Learn More</span></a>
                </div>
              </div>
              <div class="carousel-item blue-overlay">
                <img class="d-block w-100" src="img/promo_3.jpg" alt="Second slide">
                <div class="carousel-caption left-caption text-left">
                    <h1 data-aos="fade-right" data-delay="200" data-aos-duration="1000"><span> Raise your </span><br> hand for poor families</h1>
                    <p data-aos="fade-right" data-delay="300" data-aos-duration="1000">Service to others is the rent you pay for your room here on earth.</p>
                    <a href="#about"><span class="arrow">Learn More</span></a>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/promo_4.jpg" alt="Third slide">
                <div class="carousel-caption left-caption text-left">
                    <h1 data-aos="fade-right" data-delay="200" data-aos-duration="1000"><span> Raise your </span><br> hand for poor families</h1>
                    <p data-aos="fade-right" data-delay="300" data-aos-duration="1000">Service to others is the rent you pay for your room here on earth.</p>
                    <a href="#about"><span class="arrow">Learn More</span></a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <div class="left">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
                </div>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <div class="right">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </div>
            </a>
          </div>
    </header>
    <!-- Hero section -->
    <section id="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row autoplay">
                                <div class="col-md-4 inner-box">
                                    <div class="single-box">
                                        <a href="#" class="overlay-link"></a>
                                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                        <div class="title">Education For</div>
                                        <h4>Beautiful Peoples</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 inner-box">
                                    <div class="single-box">
                                        <a href="#" class="overlay-link"></a>
                                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                        <div class="title">Pay invoice</div>
                                        <h4>Online/Bank</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 inner-box">
                                    <div class="single-box">
                                        <a href="#" class="overlay-link"></a>
                                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                        <div class="title">Feed</div>
                                        <h4>Hungry Peoples</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 inner-box">
                                    <div class="single-box">
                                        <a href="#" class="overlay-link"></a>
                                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                        <div class="title">Stand For</div>
                                        <h4>Poor Peoples</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 inner-box">
                                    <div class="single-box">
                                        <a href="#" class="overlay-link"></a>
                                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                        <div class="title">Meet With</div>
                                        <h4>Our Experts</h4>
                                    </div>
                                </div>
                                <div class="col-md-4 inner-box">
                                    <div class="single-box">
                                        <a href="#" class="overlay-link"></a>
                                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                        <div class="title">Book an</div>
                                        <h4>Appointment</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="owl-nav">
                <a href="#carouselExample" role="button" data-slide="prev">
                    <div class="owl-prev">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                </a>
                <a href="#carouselExample" role="button" data-slide="next">
                    <div class="owl-next">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Hero section ends -->

    <!-- About Us -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer" style="background-image:url(img/pattern.png)"></div>
                        <div class="image" data-aos="fade-right" data-aos-duration="1000"  style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <img src="img/about.jpg" alt="Awesome Image">
                        </div>
                        <div class="image-two" data-aos="fade-left" data-aos-duration="1000" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInRight;">
                            <img src="img/about-1.jpg" alt="Awesome Image">
                        </div>
                    </div>
                </div>
                    
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="title">ABOUT US</div>
                                <h2>Welcome To Our Donation</h2>
                            </div>
                            <div class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</div>
                            <div class="row">
                                <div class="col col-lg-6 col-md-6 col-sm-12">
                                    <!-- About Author Box -->
                                    <div class="about-author-box">
                                        <div class="box-inner">
                                            <div class="upper-box">
                                                <div class="color-layer"></div>
                                                <div class="author-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-style-one">
                                            <li>Food Donation</li>
                                            <li>Money Donation</li>
                                            <li>Dress Donation</li>
                                            <li>Water Supplay</li>
                                            <li>Education Donation</li>
                                            <li>Toys Donation</li>
                                        </ul>
                                </div>
                            </div>   
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- About us end -->

    <!-- Elementor -->
    <section id="elementor">
        <div class="container" data-aos="zoom-out-up" data-aos-delay="100" data-aos-duration="1000">
            <div class="row" style="margin-left: 15px;">
                <div class="col-lg-6 col-md-6 col-sm-12 ele">
                    <div class="image-column" style="background-image: url(img/promo_5.jpg);">
                        <div class="hidden-image"><img src="promo_5.jpg" alt="Awesome Image"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 ele">
                    <div class="content-column" style="background-image:url(img/image-1.jpg);">
                        <div class="content">
                            <div class="title">URGENT CAUSES</div>
                            <h2>Insure <span class="theme_color">Education</span> &amp; <br> Save the Futures World</h2>
                            <div class="text">consectetur adipiscing elit. Nulla convallis egestas rhoncus. Doacil sis fermentum sem, ac vivera ante luctus vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas</div>
                            <a href="https://rzp.io/l/TeCG2EaX" target="_blank" class="theme-btn btn-style-one"><span class="txt">Donate Now</span></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Elementor ends -->

    <!-- Donate option -->
    <section id="donate">
        <div class="container-fluid" data-aos="zoom-in">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6 col-md-6  pull-left">
                        <h2>Your Small Help Make World Better!</h2>
                        <div class="text">Help us support their work – make a donation Teenage Cancer</div>
                    </div>
                    <div class="col-lg-6 col-md-6  pull-right" style="margin-top: 25px;">
                        <div class="donate">
                        <a href="https://rzp.io/l/TeCG2EaX" target="_blank" class="theme-btn btn-style-five"><span class="btn-title">Donate Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- donate ends -->

    <!-- news -->
    <section id="news">
        <div class="container">
            <div class="sec-title centered">
                <div class="title">Our News</div>
                <h2>Latest From News</h2>
            </div>
            <div class="row ">
                    
                <div class="blog-news col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1200">
                    <div class="inner-content-box">
                    <figure class="img-holder">
                        <a href="#">
                            <img width="350" height="230" src="img/news-3.jpg" class="attachment-savelife_770x450 size-savelife_770x450 wp-post-image" alt="" loading="lazy" srcset="http://wp.efforttech.net/newwp/savelife/wp-content/uploads/2020/10/news-3.jpg 350w, http://wp.efforttech.net/newwp/savelife/wp-content/uploads/2020/10/news-3-300x197.jpg 300w" sizes="(max-width: 350px) 100vw, 350px">                            </a>
                        <div class="inner-box"></div>
                    </figure>
    
                    <div class="overlay">
                        <div class="bottom-box">
                            <div class="category">
                                Awarness
                            </div>
                            <div class="content">
                                <div class="post-meta">
                                    October 10, 2020  |  0 Comments 
                                </div>
                                <a href="https://milaap.org/fundraisers/support-1590-vulnerable-families">
                                <h4>India Earthquake: Clean Water Initiative</h4></a>
    
                                <div class="text">
                                    <p>These days are all share them with me oh baby said inspet Californy till the one day when…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="category">
                            Awarness
                        </div>
                        <div class="content">
                            <div class="post-meta">
                                October 10, 2020  |  0 Comments 
                            </div>
                            <a href="https://milaap.org/fundraisers/support-1590-vulnerable-families">
                            <h4>India Earthquake: Clean Water Initiative</h4></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="blog-news col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="450" data-aos-duration="1200">
                    <div class="inner-content-box">
                    <figure class="img-holder">
                        <a href="">
                            <img width="350" height="230" src="img/news-4.jpg" class="attachment-savelife_770x450 size-savelife_770x450 wp-post-image" alt="" loading="lazy" srcset="http://wp.efforttech.net/newwp/savelife/wp-content/uploads/2020/10/news-4.jpg 350w, http://wp.efforttech.net/newwp/savelife/wp-content/uploads/2020/10/news-4-300x197.jpg 300w" sizes="(max-width: 350px) 100vw, 350px">                            </a>
                        <div class="inner-box"></div>
                    </figure>
    
                    <div class="overlay">
                        <div class="bottom-box">
                            <div class="category">
                                Awarness
                            </div>
                            <div class="content">
                                <div class="post-meta">
                                    October 12, 2020  |  0 Comments 
                                </div>
                                <a href="https://milaap.org/fundraisers/support-1590-vulnerable-families">
                                <h4>Make the most of all our children. donation</h4></a>
    
                                <div class="text">
                                    <p>Steer companies away from risky outcomes and will give you a completed all account of the systems sed…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="category">
                            Awarness
                        </div>
                        <div class="content">
                            <div class="post-meta">
                                October 12, 2020  |  0 Comments 
                            </div>
                            <a href="https://milaap.org/fundraisers/support-1590-vulnerable-families">
                            <h4>Make the most of all our children. donation</h4></a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="blog-news col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="550" data-aos-duration="1200">
                    <div class="inner-content-box">
                    <figure class="img-holder">
                        <a href="">
                            <img width="350" height="230" src="img/news-5.jpg" class="attachment-savelife_770x450 size-savelife_770x450 wp-post-image" alt="" loading="lazy" srcset="http://wp.efforttech.net/newwp/savelife/wp-content/uploads/2020/10/news-5.jpg 350w, http://wp.efforttech.net/newwp/savelife/wp-content/uploads/2020/10/news-5-300x197.jpg 300w" sizes="(max-width: 350px) 100vw, 350px">                            </a>
                        <div class="inner-box"></div>
                    </figure>
    
                    <div class="overlay">
                        <div class="bottom-box">
                            <div class="category">
                                Awarness
                            </div>
                            <div class="content">
                                <div class="post-meta">
                                    October 12, 2020  |  0 Comments 
                                </div>
                                <a href="https://milaap.org/fundraisers/support-1590-vulnerable-families">
                                <h4>City town host charity 5km run for poor people</h4></a>
    
                                <div class="text">
                                    <p>Beguiled and demoralized by pleasure of the moment perfectly and will give you a completed all account of…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="category">
                            Awarness
                        </div>
                        <div class="content">
                            <div class="post-meta">
                                October 12, 2020  |  0 Comments 
                            </div>
                            <a href="https://milaap.org/fundraisers/support-1590-vulnerable-families">
                            <h4>City town host charity 5km run for poor people</h4></a>
                        </div>
                    </div>
                    </div>
                </div>
                                    
            </div>
        </div>
    </section>
    <!-- news ends -->

    <!-- footer -->
    <footer class="main-footer" style="background-image: url(img/map-pattern.png);" id="contact">
        <div class="upper-section">
			<div class="row">
								<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="150" data-aos-duration="800">
					<div class="block-inner" style="background-image:url(img/pattern2.png)">
						<div class="content">
							<div class="icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
							<h4><a href="mailto:support@gmail.com">support@gmail.com</a></h4>
							<div class="title">Online support</div>
						</div>
					</div>
				</div>
                                
                				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="250" data-aos-duration="800">
					<div class="block-inner" style="background-image:url(img/pattern2.png)">
						<div class="content">
							<div class="icon ">
                                <i class="fas fa-phone-volume"></i>
                            </div>
							<h4><a href="tel:00666000999">+00 666 000 999</a></h4>
							<div class="title">Hotline Number</div>
						</div>
					</div>
				</div>
                				
                				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="350" data-aos-duration="800">
					<div class="block-inner" style="background-image:url(img/pattern2.png)">
						<div class="content">
							<div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
							<h4>35 Marklord  California</h4>
                            <div class="title">Location</div>
						</div>
					</div>
				</div>
            </div>
		</div>
        <div class="container">
			<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 footer-column">
                        <div id="savelife" class="footer-widget widget_savelife_about_company">      		
                            <div class="logo-widget">
                                <div class="logo">
                                    <a href="http://wp.efforttech.net/newwp/savelife/"><span>S</span>avelife</a>
                                </div>
                                <div class="text">We partner with over 320 amazing projects worldwide, and have given over $150 million in cash.</div>
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/" style="background-color:rgba(0, 0, 0, 0); color: rgb(255, 255, 255)"><span class="fab fa-facebook"></span></a></li>
                                    <li><a href="https://www.linkedin.com/" style="background-color:rgba(0, 0, 0, 0); color: rgb(255, 255, 255)"><span class="fab fa-linkedin"></span></a></li>
                                    <li><a href="https://www.skype.com/" style="background-color:rgba(0, 0, 0, 0); color: rgb(255, 255, 255)"><span class="fab fa-skype"></span></a></li>
                                    <li><a href="https://www.twitter.com/" style="background-color:rgba(0, 0, 0, 0); color: rgb(255, 255, 255)"><span class="fab fa-twitter"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 footer-column footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <?php
                        if(isset($_SESSION['status'])){?>
                        <div class="alert alert-success" role="alert">
                            <?php  echo $_SESSION['status']; ?>
                        </div>
                        <?php 
                            unset($_SESSION['status']);
                        }
                        ?>
                        <form action="function.php" method="POST">
                            <input type="email" name="email">
                            <input type="submit" name="subscribe" value="Subscribe">
                        </form>
		            </div>
                </div>
            </div>
        </div> 
        <footer id="sticky-footer" class="flex-shrink-0 py-4  text-white-50" style="background-color: #efc940;">
            <div class="container text-center">
                <div class="copyright">Copyrights © 2021 All rights reserved.</div>
            </div>
        </footer>
    </footer>

    <a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i></a>
    
    <!-- footer ends -->

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    
</body>
</html>