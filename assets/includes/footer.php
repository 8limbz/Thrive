<!-- Footer -->
<footer>
  <section id="footer">  
    <div class="footer navbar-default">
      <div class="container">
      
      <div class="row">
        <div class="col-sm-12">
          <ul class="text-center list-unstyled list-inline social-icons">
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
      		<p>2830 Virginia Beach Blvd.
      		<br>Virginia Beach, VA 23452</p>
      		<a href="https://www.google.com/maps/dir/Current+Location/2830+Virginia+Beach+Blvd+Virginia+Beach+VA+23452" target="_blank"><p>Directions</p></a>
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
      		
			<!-- Footer -->
      		<form id="form12" name="form12" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://s1mon.wufoo.com/forms/z106zgp6079yqha/#public">
  
			<div class="row">
				<div id="foli1" class="notranslate       form-group col-sm-6">
					<label class="desc" id="title1" for="Field1">
					Name<span id="req_1" class="req">*</span>
					</label>

					<div>
						<input id="Field1" name="Field1" type="text" class="field text small form-control" value="" maxlength="255" tabindex="1" onkeyup=""       required placeholder="Enter Name" />
					</div>
				</div>
				<div id="foli2" class="notranslate       form-group col-sm-6">
					<label class="desc" id="title2" for="Field2">
					Email<span id="req_2" class="req">*</span>
					</label>

					<div>
						<input id="Field2" name="Field2" type="email" spellcheck="false" class="field text small form-control" value="" maxlength="255" tabindex="2"       placeholder="Enter Email" required />
					</div>
				</div>
			</div>
				<div id="foli3" class="notranslate       form-group">
					<label class="desc" id="title3" for="Field3">
					Message<span id="req_3" class="req">*</span>
					</label>

					<div>
						<textarea id="Field3" name="Field3" class="field textarea small form-control" spellcheck="true" rows="3" cols="50" tabindex="3" onkeyup="" placeholder="Leave a Message" required  ></textarea>
					</div>
				</div>
				<div class="buttons ">
					<div>
						<input id="saveForm" name="saveForm" class="btTxt submit btn btn-default" type="submit" value="Submit"
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
      
      <div class="row">
        <div class="col-sm-12">
          <ul class="text-center list-unstyled list-inline small">
            <li class="pull-left"><?php auto_copyright();?> Thrive Proactive Health</li>
            <li class="pull-right"><a href="#">Privacy Policy</a></li>
            <li class="pull-right"><a href="#">Terms &amp; Conditions</a></li>
          </ul>
        </div>
      </div>
      
    </div>
    </div>
  </section>
</footer>

<!--<script src="/assets/js/main.js"></script>-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/wufoo.js"></script>

<!-- Typekit Fonts -->
<script src="https://use.typekit.net/rxa6uum.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

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

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-xxxxx-xx', 'auto');
  ga('require', 'displayfeatures');
  ga('require', 'linkid');
  ga('send', 'pageview');
</script>