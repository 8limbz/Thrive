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
	<h2 class="text-uppercase special">Will You<br>Choose to Thrive?</h2>
	<p class="col-sm-offset-2 col-sm-8">We are the region’s premier health and wellness clinic. We offer natural and innovative solutions to restore, revive, and optimize the mind &amp; body. We are a team of trained professionals and innovators, and we choose to be a different kind of healthcare facility.</p>
  </li>
  
  <li class="flex-item hp-2"></li><!-- About Image -->
  
  <li class="flex-item hp-3 text-center">
<!--  	<h2 class="text-uppercase">Our Specialized<br>Services Lines</h2>-->
<!--  	<p class="col-sm-offset-2 col-sm-8">These service lines work together to provide you with the ultimate thriving lifestyle.</p>-->
  	
<!--  	Homepage Service Lines-->
  	<div class="col-md-12">
  	  <img src="/assets/images/svg/services-icon.svg" alt="Thrive Specialized Services" class="center-block services-icon">
  	  <h2 class="text-uppercase special wht">Our Specialized Services Lines</h2>
  	</div>
  	
  	<div class="col-md-4 service-line first-service">
  		<h3 class="text-uppercase">Restore</h3>
  		<p>Recover from injuries, repair mobility, and eliminate pain with therapeutic, rehab-based services.</p>
  	</div>
  	<div class="col-md-4 service-line">
  		<h3 class="text-uppercase">Revive</h3>
  		<p>Rebalance your body, refocus and awaken your mind with routine ‘maintenance’ to stay wellness-based.</p>
  	</div>
  	<div class="col-md-4 service-line">
  		<h3 class="text-uppercase">Optimize</h3>
  		<p>Intensify your drive and enhance your ability to perform for goal completion and future success.</p>
  	</div>
  </li>
  
<!--  Homepage Booking-->
  <li class="flex-item hp-4 text-center">
  	<h2 class="text-uppercase">Book Your Appointment Today</h2>
  	<a href="/appointments">
  		<div class="btn btn-primary">Book Now</div>
  	</a>
  </li>
</ul>


<!--Site's Footer-->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/includes/footer.php'); ?>
</body>
</html>
