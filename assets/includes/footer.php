<!-- Footer -->
<footer>
  <section id="footer">  
    <div class="footer navbar-default">
      <div class="container">
      
      <div class="row">
        <div class="col-sm-12">
          <ul class="list-unstyled list-inline social-icons">
            <li><a href="https://www.facebook.com/thrivevb/" target="_blank"><img class="img-responsive" src="/assets/images/social-icons/fb-circle.svg" alt="Thrive Proactive Health Facebook"></a></li>
            <li><a href="https://www.instagram.com/thrivevb/" target="_blank"><img class="img-responsive" src="/assets/images/social-icons/insta-circle.svg" alt="Thrive Proactive Health Instagram"></a></li>
            <li><a href="https://twitter.com/thrive757" target="_blank"><img class="img-responsive" src="/assets/images/social-icons/twitter-circle.svg" alt="Thrive Proactive Health Twitter"></a></li>
            <li><a href="https://www.linkedin.com/company/thrive-proactive-health" target="_blank"><img class="img-responsive" src="/assets/images/social-icons/linkin-circle.svg" alt="Thrive Proactive Health LinkedIn"></a></li>
          </ul>
        </div>
      </div>
      
      <div class="row">
      	<div class="col-sm-6 col-md-4">
      		<h3>Location</h3>
      		<p>2830 Virginia Beach Blvd. <br>
      		Virginia Beach, VA 23452 <br>
      		<a href="https://www.google.com/maps/dir/Current+Location/2830+Virginia+Beach+Blvd+Virginia+Beach+VA+23452" target="_blank">Directions</a></p>
      		
      		<p><a href="tel:757-416-6700">Tel: 757-416-6700</a> <br>
      		<a href="mailto:info@thrivevb.com?Subject=New%20Message%20from%20thrivevb.com">Email Us</a><br>
     		<a href="fax:1*757-416-6700">Send Fax</a></p>
      	</div>
      	<div class="col-sm-6 col-md-4">
      		<h3>Hours</h3>
      		<p>M - 9am to 7pm
      		<br>Tu - 7:30am to 7pm
      		<br>W - 7:30am to 7pm
      		<br>Th - 9am to 7pm
      		<br>F - 7:30am to 6pm
      		<br>Sat - 9am to 2pm
      		<br>Sun - closed</p>
      	</div>
      	<div class="col-md-4">
      		<h3>Contact Us</h3>
      		
			<!-- Footer Form -->
      		<form i="form12" name="form12" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://s1mon.wufoo.com/forms/z106zgp6079yqha/#public">
  
			<div class="row">
				<div id="foli1" class="notranslate       form-group col-sm-6">
					<label class="desc" id="title1" for="Field1">
					Name<span id="req_1" class="req">*</span>
					</label>

					<div>
						<input id="Field1" name="Field1" type="text" class="field text small form-control" value="" maxlength="255" tabindex="1" onkeyup=""       required placeholder="" />
					</div>
				</div>
				<div id="foli2" class="notranslate       form-group col-sm-6">
					<label class="desc" id="title2" for="Field2">
					Email<span id="req_2" class="req">*</span>
					</label>

					<div>
						<input id="Field2" name="Field2" type="email" spellcheck="false" class="field text small form-control" value="" maxlength="255" tabindex="2"       placeholder="" required />
					</div>
				</div>
			</div>
				<div id="foli3" class="notranslate       form-group">
					<label class="desc" id="title3" for="Field3">
					Message<span id="req_3" class="req">*</span>
					</label>

					<div>
						<textarea id="Field3" name="Field3" class="field textarea small form-control" spellcheck="true" rows="3" cols="50" tabindex="3" onkeyup="" placeholder="" required  ></textarea>
					</div>
				</div>
				<div class="buttons ">
					<div>
						<input id="saveForm" name="saveForm" class="btTxt submit btn btn-default col-xs-12" type="submit" value="Submit"
					 />
					</div>
				</div>

				<div class="hide">
				<label for="comment">Do Not Fill This Out</label>
				<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
				<input type="hidden" id="idstamp" name="idstamp" value="O05QiPtVjv/EvjW23enGRvplRZlXs016glWHInU7uQY=" />
				</div>
		</form>
      	</div>
      </div>
    </div>
    </div>
  </section>
</footer>
<div class="copyright">
	<div class="container">
	  <div class="row">
		<div class="col-sm-12">
		  <ul class="text-center list-unstyled list-inline small">
			<li class="pull-left"><?php auto_copyright();?> Thrive Proactive Health</li>
			  <li class="pull-right"><a href="/privacy_policy">Privacy Policy</a></li>
			  <li class="pull-right"><a href="/terms_conditions">Terms &amp; Conditions</a></li>
		  </ul>
		</div>
    </div>
  </div>
</div>

<!--Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<!-- Typekit Fonts -->
<script src="https://use.typekit.net/rxa6uum.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!--Google Custom Map-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBupIZpg0jaQTL7tGdtTzHFWiDGb0mc1ng&sensor=false"></script>
<script type="application/x-javascript" src="/assets/js/gmaps.js"></script>
<script>
	$(function(){

    'use strict';
    
    	var mapLocation = new google.maps.LatLng(36.8445305, -76.0711696);

		var $mapis = $('#map');
		var $mapZoom;
		if($(window).width()<992){
			$mapZoom = 15;
		}else{
			$mapZoom = 14;
		}

		if ($mapis.length > 0) {
			var map;
			map = new GMaps({
				streetViewControl : true,
				overviewMapControl: true,
				mapTypeControl: true,
				zoomControl : true,
				panControl : true,
				scrollwheel: false,
				center: mapLocation,
				el: '#map',
				zoom: $mapZoom,
				styles: [
            {elementType: 'geometry', stylers: [{color: '#00b0b3'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#111111'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#9D9D9D'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f1f1f1'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#D0D0D0'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#00DADE'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#444'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#008082'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#00787A'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#BEBEBE'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#003233'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#22222'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f7f7f7'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#007E80'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#dddddd'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#005658'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6D6D6D'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#111111'}]
            }
          ]
			});
			
			var icon = {
				url: "/assets/images/map-marker.png", // url
				scaledSize: new google.maps.Size(50, 50), // scaled size
				origin: new google.maps.Point(0,0), // origin
				anchor: new google.maps.Point(0, 50) // anchor
			};

			map.addMarker({
				position: mapLocation,
				icon: icon,
				title: 'Thrive Proactive Health',
				infoWindow: {
					content: '<h4>Thrive Proactive Health</h4><p>2830 Virginia Beach Blvd,<br/>Virginia Beach, VA, 23452<br/><a href="https://www.google.com/maps/dir/Current+Location/2830+Virginia+Beach+Blvd+Virginia+Beach+VA+23452" target="_blank">Directions</a></p>'
				}
			});
		}
});
</script>

<?php 
// No argument required for current year.
// Otherwise, pass start year as a 4-digit value.
function auto_copyright($startYear = null) {
	$thisYear = date('Y');  // get this year as 4-digit value
    if (!is_numeric($startYear)) {
		$year = $thisYear; // use this year as default
	} else {
		$year = intval($startYear);
	}
	if ($year == $thisYear || $year > $thisYear) { // $year cannot be greater than this year - if it is then echo only current year
		echo "&copy;$thisYear"; // display single year
	} else {
		echo "&copy; $year&ndash;$thisYear"; // display range of years
	}   
 } 
?>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-77337091-13', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid');
  ga('send', 'pageview');
</script> -->