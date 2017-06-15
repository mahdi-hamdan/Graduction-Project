<?php
include('../conn.php');
?>
<!DOCTYPE html>
<!--
++++++++++++++++++++++++++++++++++++++++++++++++++++++
AUTHOR : Vijayan PP
PROJECT :A-MD
VERSION : 1.1
++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>:: Books ::</title>
	
	<!-- [ FONT-AWESOME ICON ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

	<!-- [ PLUGIN STYLESHEET ]
        =========================================================================================================================-->
	<link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <link rel ="stylesheet" type="text/css" href="library/vegas/vegas.min.css">
	<!-- [ Boot STYLESHEET ]
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="library/bootstrap/css/bootstrap.css">
        
        <!-- [ DEFAULT STYLESHEET ] 
        =========================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/color/green.css">
        
</head>
<body >
<!-- [ LOADERs ]
================================================================================================================================-->	
    <div class="preloader">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- [ /PRELOADER ]
=============================================================================================================================-->
<!-- [WRAPPER ]
=============================================================================================================================-->
<div class="wrapper">
    
 <!-- [NAV]
 ============================================================================================================================-->    
   <!-- Navigation
    ==========================================-->
    <nav  class="amd-menu navbar navbar-default navbar-fixed-top theme_background_color fadeInDown">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="index1.php"><img src="../images/logo.png" style="position: absolute; top: 17px; width: 6%;" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#home" class="page-scroll">Home</a></li>
			<li><a href="#aboutus" class="page-scroll">About Us</a></li>
            <li><a href="#howwork" class="page-scroll">How it work's</a></li>
								     <li><a href="#appscreen" class="page-scroll">General Books </a></li>
            <li><a href="#whylove" class="page-scroll">Login</a></li>
            <li><a href="#contact" class="page-scroll" id="contacts">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


   <!-- [/NAV]
 ============================================================================================================================-->    
    
    
    
    
    
  <!-- [MAIN GALLERY ]
=============================================================================================================================-->
  <section class="main-gallery" id="home">
    <div class="overlay">
      <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                 </div>    
          </div>
      </div>
    </div>
      
  </section>
  
  
  <!-- [/MAIN GALLERY]
=============================================================================================================================-->
  
 <!-- [CURRENT aboutus]
=============================================================================================================================-->
 <section class="our-stats" id="aboutus">
 <div class="container">
             <div class="row text-center">
                <div class="how-it-works-heading">
                    <h2 class="sectionTitle">ABOUT US</h2>
                </div>
            </div>
			<br/>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p style="text-align:justify"> 
					The idea of academic books and services exchange between students; is to deliver a solution for students in different faculties and from several backgrounds, which aims to ease the exchange of academic books between students. This solution can help students to order a certain book. On the opposite side another student may be offering the same book from the same faculty or even from another one. Similar book requests and offers will be matched together, which helps students accomplishing the exchange successfully. 
					 </p>                    
                </div>
                <div class="col-md-6 col-sm-6">
                    <p style="text-align:justify">Other features can be added or uploaded to this application, such as, contacting information details for the student, location and book edition.</p>
                </div>
            </div>
        </div>
 </section>
 
 <!-- [CURRENT aboutus]
=============================================================================================================================-->
 
 <!-- [HOW WORKS]
=============================================================================================================================-->
 
 <section class="how-works" id="howwork">
     <div class="overlay">
  <div class="container">
            <div class="row text-center">
                <div class="how-it-works-heading">
                    <h2 class="sectionTitle">How It Work's</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 app-board">
                    <div class="app-board-inner">
                        <ul class="nav nav-tabs liner" id="myTab" role=tablist>
                            <li class="active">
                                <a href="#userexperience" aria-controls="userexperience" role="tab" data-toggle="tab" title="User Experience">
                                    <span class="round-tabs one">
                                        <i class="fa fa-male"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" title="Sketch">
                                    <span class="round-tabs two">
                                        <i class="fa fa-pencil-square"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#prototyping" aria-controls="prototyping" role="tab" data-toggle="tab" title="Prototyping">
                                    <span class="round-tabs three">
                                        <i class="fa fa-language"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#uidesign" aria-controls="uidesign" role="tab" data-toggle="tab" title="UI Design">
                                    <span class="round-tabs four">
                                        <i class="fa fa-adjust"></i>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#doner" aria-controls="doner" role="tab" data-toggle="tab" title="Development">
                                    <span class="round-tabs five">
                                        <i class="fa fa-bar-chart"></i>
                                    </span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="userexperience">

                            <h3 class="head text-center">User Experience</h3>

                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis
                                tincidunt ut, utinam saperet facilisi an vim.
                            </p>

                            <p class="text-center">
                                <a href="#" class="btn btn-success btn-outline-rounded theme_background_color"> Get Quote <span
                                        class="fa fa-send-o"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <h3 class="head text-center">Sketch</h3>

                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis
                                tincidunt ut, utinam saperet facilisi an vim.
                            </p>

                            <p class="text-center">
                                <a href="#" class="btn btn-success btn-outline-rounded theme_background_color"> Get Quote <span
                                        class="fa fa-send-o"></span></a>
                            </p>

                        </div>
                        <div class="tab-pane fade" id="prototyping">
                            <h3 class="head text-center">Prototyping</h3>

                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis
                                tincidunt ut, utinam saperet facilisi an vim.
                            </p>

                            <p class="text-center">
                                <a href="#" class="btn btn-success btn-outline-rounded theme_background_color"> Get Quote <span
                                        class="fa fa-send-o"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="uidesign">
                            <h3 class="head text-center">UI Design</h3>

                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis
                                tincidunt ut, utinam saperet facilisi an vim.
                            </p>

                            <p class="text-center">
                                <a href="#" class="btn btn-success btn-outline-rounded theme_background_color"> Get Quote <span
                                        class="fa fa-send-o"></span></a>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="doner">
                            <div class="text-center">
                                <i class="img-intro icon-checkmark-circle"></i>
                            </div>
                            <h3 class="head text-center">Development</h3>

                            <p class="narrow text-center">
                                Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis
                                tincidunt ut, utinam saperet facilisi an vim.
                            </p>

                            <p class="text-center">
                                <a href="#" class="btn btn-success btn-outline-rounded theme_background_color"> Get Quote <span
                                        class="fa fa-send-o"></span></a>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
        </div>   
     </div>
 </section>
 
 <!-- [/HOW WORKS]
=============================================================================================================================-->
 

 <!-- [SCREEN SHOT]
=============================================================================================================================-->
 <section class="screeshots" id="appscreen">
     <div class="container">
            <div class="row text-center">
                <div class="screenshots-heading">
                    <h2 class="section-title">App Screenshots</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="screenshot-carousel">
                        <div id="myCarousel" class="carousel slide">

                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Carousel items -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-1.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-2.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-3.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-4.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/item-->

                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-5.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-6.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-7.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-8.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/item-->

                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-9.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-10.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-11.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="#x">
                                                <img class="carousel-img" src="images/screenshot-12.jpg" alt="Image"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <!--/item-->

                            </div>
                            <!--/carousel-inner-->

                        </div>
                        <!--/myCarousel-->

                    </div>
                    <!--/well-->
                </div>
            </div>
        </div>
 </section>
 
 
 <!-- [/SCREEH SHOT]
=============================================================================================================================-->
 

 <!-- [SUBSCRIBE]
=============================================================================================================================-->
 <section class="contactus" id="contact">
     <div class="container">
         <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="testimonial-area-heading">
                        <h2 class="grey">CONTACT US</h2>
                    </div>
                </div>
            </div>
         <div class="gap"></div>
     <div class="row">
                    <!-- /contact info -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <!-- contact form -->
                      <?php include('contactus.php'); ?>
                      <!-- /contact form -->
                    </div>
                  </div>
     </div>
				  
 </section>
 <!--  [CONTACT INFO ENDS ]-->
 <!-- [/SUBSCRIBE]
=============================================================================================================================-->
 
 <!-- [FOOTER]
=============================================================================================================================-->
 <footer class="footer">
  
					<div class="container">
						<div class="footer-info col-md-12 text-center">
							<ul>
								<li><a href="#">Manchester,ny 14608</a></li>
								<li><a href="#">+580-698-5024</a></li>
								<li><a href="#">yourplugins@gmail.com</a></li>
							</ul>
						</div>
						<div class="footer-social-icons col-md-12 text-center">
							<ul>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
					</div>
				  
     
     
 </footer>
 
 <section class="sub-footer">
					<div class="container">
						<div class="copyright-text col-md-6 col-sm-6 col-xs-12">
							<p>© 2014 AM-D. All rights reserved.</p>
						</div>
						<div class="designed-by col-md-6 col-sm-6 col-xs-12">
							<p>Designed by: <a href="#">YOUR PLUGIN</a></p>
						</div>
					</div>
				</section>
 
 <!-- [/FOOTER]
=============================================================================================================================-->
 
 
 
 
 
 
 
 
 
</div>
 

<!-- [ /WRAPPER ]
=============================================================================================================================-->

	<!-- [ DEFAULT SCRIPT ] -->
	<script src="library/modernizr.custom.97074.js"></script>
	<script src="library/jquery-1.11.3.min.js"></script>
        <script src="library/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script src="library/vegas/vegas.min.js"></script>
	<!-- [ PLUGIN SCRIPT ] -->
        
	<script src="js/plugins.js"></script>
        <script src="js/fappear.js"></script>
       <script src="js/jquery.countTo.js"></script>
	<script src="js/scrollreveal.js"></script>
       	 <!-- [ COMMON SCRIPT ] -->
	<script src="js/common.js"></script>
  
</body>
<script type="text/javascript">
    $(document).ready(function()
    {
        fullscreenslider();
    }
     );
    
 </script>


</html>