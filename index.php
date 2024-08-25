<?php 
session_start();
require 'db.php';
//logo part----------------------------------------------------
$select_logo="SELECT * FROM logo_images";
$select_logo_res=mysqli_query($db_connection,$select_logo);
$select_logo_assoc=mysqli_fetch_assoc($select_logo_res);
//about_section-------------------------------------------------
$select_about="SELECT * FROM about_section";
$select_about_res=mysqli_query($db_connection,$select_about);
$select_about_assoc=mysqli_fetch_assoc($select_about_res);
//skills part----------------------------------------------
$select_skill="SELECT * FROM skills WHERE status=1";
$select_skill_res=mysqli_query($db_connection,$select_skill);
//Services Section------------------------------------------
$select_services="SELECT * FROM services_section WHERE status=1";
$select_services_res=mysqli_query($db_connection,$select_services);
//Portfolio_part-------------------------------------------------
$select_portfoli="SELECT * FROM portfolio WHERE status=1";
$select_portfolio_res=mysqli_query($db_connection,$select_portfoli);
//Testimonial Part------------------------------------------------
$select="SELECT * FROM testimonial ";
$select_res=mysqli_query($db_connection,$select);

?>


<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="portfolio,creative,business,company,agency,multipurpose,modern,bootstrap4">
  
  <meta name="author" content="themeturn.com">

  <title>Ratsaan| Creative portfolio template</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Themeify Icon Css -->
  <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- owl carousel -->
  <link rel="stylesheet" href="plugins/owl/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="plugins/owl/assets/owl.theme.default.min.css" >
  <!-- Slick slider CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body class="portfolio" id="top">


<!-- Navigation start -->
<!-- Header Start --> 

<nav class="navbar navbar-expand-lg bg-transprent py-4 fixed-top navigation" id="navbar">
	<div class="container">
	  <a class="navbar-brand">
	  <img src="uploads/logos/<?=$select_logo_assoc['header_logo']?>" alt="Sohag" width="120" style="border-radius:50%">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
		<span class="ti-view-list"></span>
	  </button>
  
	  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav ml-auto">
			   <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#skillbar">Expertise</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#service">Services</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#portfolio">Portfolio</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#testimonial">Testimonial</a></li>
			   <li class="nav-item"><a class="nav-link smoth-scroll" href="#contact">Contact</a></li>
			</ul>
	  </div>
	</div>
</nav>


<!-- Navigation End -->

<!-- Banner start -->

<!-- Slider Start -->
<section class="slider py-7 ">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 col-sm-12 col-12 col-md-5">
				<div class="slider-img position-relative">
					<img src="uploads/about_photo/<?=$select_about_assoc['photo']?>" alt="" class="img-fluid w-100" >
				</div>
			</div>

			<div class="col-lg-6 col-12 col-md-7">
				<?php 
				 $after_explode=explode(' ', $select_about_assoc['name']);
				 $last_name=end($after_explode);
				
				?>
				<div class="ml-5 position-relative mt-5 mt-lg-0">
					<span class="head-trans"><?=$last_name?></span>
					<h1 class="font-weight-normal text-color text-md"><i class="ti-minus mr-2"></i><?=$select_about_assoc['title']?></h1>
					<h2 class="mt-3 text-lg mb-3 text-capitalize"><?=$select_about_assoc['name']?></h2>
					<p class="animated fadeInUp lead mt-4 mb-5 text-white-50 lh-35"><?=$select_about_assoc['description']?></p>
					<a href="#about" class="btn btn-solid-border">About Me</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner End -->

<!-- Skills start -->
<section class="section bg-gray" id="skillbar" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus mr-2"></i>Skills Set</span>
					<h2 class="title">Expertise</h2>
				</div>
			</div>
		</div>
		<div class="row">
		<?php foreach($select_skill_res as $skill){?>
			<div class="col-lg-6 col-md-6">
				 
				<div class="skill-bar mb-4 mb-lg-0">
					<div class="mb-4 text-right"><h4 class="font-weight-normal"><?=$skill['skill_name']?></h4></div>
					<div class="progress">
						<div class="progress-bar" data-percent="<?=$skill['percentage']?>">
							<span class="percent-text "><span class="count"><?=$skill['percentage']?></span>%</span>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</section>	

<!-- Skills End -->

<!-- Service start -->
<section class="section bg-gray" id="service" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus mr-2"></i>What i do</span>
					<h2 class="title">Services</h2>
				</div>
			</div>
		</div>

		<div class="row no-gutters">
	     <?php foreach($select_services_res as $services){?>
			<div class="col-lg-4 col-md-6">
				<div class="card p-5 rounded-0">
					<h3 class="my-4 text-capitalize"><?=$services['title']?></h3>
					<p><?=$services['description']?></p>
				</div>
			</div>
		 <?php }?>
		</div>

		<div class="row align-items-center mt-5" data-aos="fade-up">
			<div class="col-lg-6 mt-5">
				<h2 class="mb-5 text-lg-2 text-white-50">Let's <span class="text-white">work together</span> on your next project </h2>
			</div>
			<div class="col-lg-4 ml-auto text-right">
				<a href="#contact" class="btn btn-main text-white smoth-scroll">Hire Me</a>
			</div>
		</div>
	</div>
</section>
<!-- Service End -->

<!-- Portfolio start -->
<section class="section" id="portfolio" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"><i class="ti-minus"></i>works</span>
					<h2 class="title">Portfolio</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="post_gallery owl-carousel owl-theme">
				<?php foreach ($select_portfolio_res as $portfolio) { ?>
				<div class="item">
					<div class="portfolio-item position-relative">
						<img src="uploads/portfolio_image/<?=$portfolio['image']?>" alt="" class="img-fluid">
						<div class="portoflio-item-overlay">
							<a href="portfolio-single.html"><i class="ti-plus"></i></a>
						</div>
					</div>
					<div class="text mt-3">
						<h4 class="mb-1 text-capitalize"><?=$portfolio['title']?></h4>
						<p class="text-uppercase letter-spacing text-sm"><?=$portfolio['category']?></p>
					</div>
				</div>
				 <?php }?>
				<div class="item">
					<div class="portfolio-item position-relative">
						<img src="images/portfolio/2.jpg" alt="" class="img-fluid">

						<div class="portoflio-item-overlay">
							<a href="portfolio-single.html"><i class="ti-plus"></i></a>
						</div>
					</div>
					<div class="text mt-3">
						<h4 class="mb-1 text-capitalize">Web development</h4>
						<p class="text-uppercase letter-spacing text-sm">wordpress</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Portfolio End -->

<!-- Tetsimonial start -->
<section id="testimonial" class="section testomionial" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="section-title">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i>testimonial</span>
					<h1 class="title">What People Say About me</h1>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="testimonial-slider">
					<?php foreach($select_res as $testimonial){?>
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-white-50"></i>
						<div class="testimonial-content">
							<p class="text-md mt-3"><?=$testimonial['message']?></p>

							<div class="media mt-5 align-items-center">
								<?php if($testimonial['image']==null){?>
									<div class="text-danger fs-30" style="text-align:center; background-color:gray; width:100px; height:100px;line-height:100px; border-radius:50%"><?=substr($testimonial['name'],0,2)?></div>
								<?php }else{?>
									<img src="uploads/testimonial/<?=$testimonial['image']?>" alt="" class="img-fluid    rounded-circle align-self-center mr-4">
								<?php }?>
								<div class="media-body">
									<h3 class="mb-0"><?=$testimonial['name']?></h3>
									<n class="text-muted"><?=$testimonial['description']?></n>
								</div>
							</div>
						</div>
					</div>
					<?php }?>
					<!-- <div class="testimonial-item position-relative">
						<i class="ti-quote-left text-white-50"></i>
						<div class="testimonial-content">
							<p class="text-md mt-3">They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.</p>

							<div class="media mt-5 align-items-center">
								<img src="images/about/3.jpg" alt="" class="img-fluid  rounded-circle align-self-center mr-4">
								<div class="media-body">
									<h3 class="mb-0">Smith Austin</h3>
									<span class="text-muted">Developer</span>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonial-item position-relative">
						<i class="ti-quote-left text-white-50"></i>
						<div class="testimonial-content">
							<p class="text-md mt-3">They do this through collaboration between our strategists, designers and technologists.They craft beautiful and unique digital experiences.Unlimited power and customization possibilities.Pixel perfect design & clear code delivered to you.</p>

							<div class="media mt-5 align-items-center">
								<img src="images/about/3.jpg" alt="" class="img-fluid  rounded-circle align-self-center mr-4">
								<div class="media-body">
									<h3 class="mb-0">Mike jack</h3>
									<span class="text-muted">Marketer</span>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</div>	
		</div>
	</div>
</section>
<!-- Tetsimonial End -->

<!--Feedback Start -->
<section class="section" id="feedback" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i>-Feedback</span>
					<h1 class="title">Give Your Feedback</h1>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8">
				<?php if(isset($_SESSION['insert'])){?>
				   <div class="alert alert-success"><?=$_SESSION['insert']?></div>
				<?php }unset($_SESSION['insert'])?>
				<?php if(isset($_SESSION['upload'])){?>
				   <div class="alert alert-success"><?=$_SESSION['upload']?></div>
				<?php }unset($_SESSION['upload'])?>
					<form class="contact__form form-row contact-form" method="POST" action="testimonial/feedback_post.php" enctype="multipart/form-data">
					<div class="form-group col-lg-6 mb-5">
						<input type="text" name="name" class="form-control bg-transparent" placeholder="Your Name">
					</div>
					<div class="form-group col-lg-6 mb-5">
						<input type="text" name="description" class="form-control bg-transparent" placeholder="Your Description">
					</div>
					<div class="form-group col-lg-12 mb-5">
						<input type="file" name="image" class="form-control bg-transparent">
						<?php if(isset($_SESSION['err'])){?>
                            <strong class="text-danger"><?=$_SESSION['err']?></strong>
						<?php }unset($_SESSION['err'])?>
					</div>
					<div class="form-group col-lg-12 mb-5">
						<textarea id="message" name="message" cols="30" rows="6" class="form-control bg-transparent" placeholder="Your Message"></textarea>
						<div class="text-center">
							 <input class="btn btn-main text-white mt-5" id="submit" name="submit" type="submit" class="btn btn-hero" value="Send Feedback">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!--Feedback End -->

<!-- Contact start -->
<section class="section" id="contact" data-aos="fade-up">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="section-title text-center">
					<span class="text-color mb-0 text-uppercase letter-spacing text-sm"> <i class="ti-minus mr-2"></i>Contact</span>
					<h1 class="title">Get in Touch</h1>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8">
				<?php if(isset($_SESSION['sert'])){?>
                    <div class="alert alert-success"><?=$_SESSION['sert']?></div>
				<?php }unset($_SESSION['sert'])?>
					<form class="contact__form form-row contact-form" method="post" action="contact/contact_post.php">
					 
					<div class="form-group col-lg-6 mb-5">
						<input type="text" id="name" name="name" class="form-control bg-transparent" placeholder="Your Name">
					</div>
					<div class="form-group col-lg-6 mb-5">
						<input type="text" name="email" id="email" class="form-control bg-transparent" placeholder="Your Email">
					</div>
					<div class="form-group col-lg-12 mb-5">
						<input type="text" name="subject" id="subject" class="form-control bg-transparent" placeholder="Your Subject">
					</div>
					
					<div class="form-group col-lg-12 mb-5">
						<textarea id="message" name="message" cols="30" rows="6" class="form-control bg-transparent" placeholder="Your Message"></textarea>
						
						<div class="text-center">
							 <input class="btn btn-main text-white mt-5" id="submit" name="submit" type="submit" class="btn btn-hero" value="Send Message">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Contact End -->

<!-- Footer start -->
<footer class="footer border-top-1">
	<div class="container">
		<div class="row align-items-center text-center text-lg-left">
			<div class="col-lg-2">
				 <img src="uploads/logos/<?=$select_logo_assoc['footer_logo']?>" alt="Sohag" width="120" style="border-radius:50%">
			</div>
			<div class="col-lg-10">
				<div class="text-right">
					<p class="lead"><span class="text-color">Dreambuzz</span> © 2019 All Right Reserved Ratsaan.</p>
					<a href="#top" class="backtop smoth-scroll"><i class="ti-angle-up"></i></a>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer End -->


    <!-- 
    Essential Scripts
    =====================================-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/nav/jquery.easing.1.3.html"></script>
    
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/owl/owl.carousel.min.js"></script>
  
    <!-- Skill COunt -->
    <script src="plugins/counto/apear.js"></script>
    <script src="plugins/counto/counTo.js"></script>
    <!-- AOS Animation -->
    <script src="plugins/aos/aos.js"></script>
    
    <script src="js/script.js"></script>
    <script src="js/ajax-contact.html"></script>

  </body>
</html>
   