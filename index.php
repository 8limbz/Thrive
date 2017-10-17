<!doctype html>
<html>
<head>
<title>Thrive Proactive Health</title>
<!--Metas & Links-->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/includes/head.php'); ?>
</head>

<body class="home">
<!--Site's Header-->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/includes/header.php'); ?>

<!--
<div class="jumbotron">
  <div class="overlay"></div>
  <div class="container">
    <img src="/assets/images/thrive-hrz.svg" class="always-center video-logo" alt="Thrive Proactive Health">
  </div>
</div> -->

<!--Thrive Logo Over Video-->
<div class="container">
	<div class="row">
		<div class="col-xs-12 flex-center">
			<img src="/assets/images/svg/thrive-hrz.svg" class="video-logo" alt="Thrive Proactive Health">
		</div>
	</div>
</div>

<!--Intro Video-->
<div class="video-container">
  <iframe class="video" src="https://player.vimeo.com/video/225605363?loop=1&background=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  <div class="overlay"></div>
</div>

<!--Homepage About Us-->
<ul class="flex-container">
  <li class="flex-item hp-1 text-center">
	<h2 class="text-uppercase special">Do more<br> than live&mdash;<strong>thrive</strong>.</h2>
	<div class="col-sm-offset-2 col-sm-8 lead">
		<p class="home-p">We are the region’s premier health and wellness clinic, and we want you to know that you are designed to <i>feel good</i>.</p>
	</div>
  </li>
  
  <li class="flex-item hp-2"></li><!-- About Image -->
  
  <li class="flex-item hp-3"></li>
  
  <li class="flex-item hp-4 text-center">
  	<h2 class="text-uppercase special">A life designed<br>for more.</h2>
  	<div class="col-sm-offset-2 col-sm-8">
  		<p class="home-p">We look at the mind body connection methodically to evaluate the systems that are interconnected within the human body. We tap into the multiple dimensions of neurophysiology to achieve faster outcomes. Our services work together to provide lifelong, holistic results.</p>
  	</div>
  </li>
  
  <li class="flex-item hp-5 text-center">
	<!--  	Homepage Service Lines-->
  	<div class="col-md-12">
  	  <h2 class="text-uppercase special wht">Our Specialized Services Lines</h2>
  	  <div class="clearfix"></div>
  	  <div class="col-sm-offset-3 col-sm-6 hp-copy">
  	  	<p>We offer natural and innovative solutions to restore, revive, and optimize the mind and body.</p>
  	  </div>
  	</div>
  	<div class="clearfix"></div>
  	
  	<div class="col-md-4 service-line">
  		<img src="/assets/images/thrive_icon_restore.png" alt="Thrive Restore Icon" class="thrive-icon">
  		<h3 class="text-uppercase">Restore</h3>
  		<p>Recover from injuries, repair mobility, and eliminate pain with therapeutic, rehab-based services.</p>
  	</div>
  	<div class="col-md-4 service-line">
  		<img src="/assets/images/thrive_icon_revive.png" alt="Thrive Revive Icon" class="thrive-icon">
  		<h3 class="text-uppercase">Revive</h3>
  		<p>Rebalance your body, refocus and awaken your mind with routine ‘maintenance’ to stay wellness-based.</p>
  	</div>
  	<div class="col-md-4 service-line">
  		<img src="/assets/images/thrive_icon_optimize.png" alt="Thrive Optimize Icon" class="thrive-icon">
  		<h3 class="text-uppercase">Optimize</h3>
  		<p>Intensify your drive and enhance your ability to perform for goal completion and future success.</p>
  	</div>
  </li>
  
<!--  Homepage Booking-->
  <li class="flex-item hp-6 text-center">
  	<h2 class="text-uppercase">Book Your Appointment Today</h2>
  	<a href="https://clients.mindbodyonline.com/ASP/adm/adm_appt_search.asp?reSchedule" target="_blank">
  		<div class="btn btn-primary">Book Now</div>
  	</a>
  </li>
</ul>


<!--Site's Footer-->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/includes/footer.php'); ?>
</body>
</html>
