<!doctype html>
<html>
<head>
<title>Appointments | Thrive Proactive Health</title>
<!--Metas & Links-->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/includes/head.php'); ?>
</head>

<body>
<!--Site's Header-->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/includes/header.php'); ?>

<!--Page Header-->
<div class="jumbotron appointment">
  <div class="container">
<!--    <h1 class="text-center">About Us</h1>-->
  </div>
  <div class="overlay"></div>
</div>

<!--Intro Message-->
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8  text-center">
			<p class="lead">We do our best to accommodate your schedule and offer same day or next day appointments. Please let us know how to best meet your scheduling needs and preferences, as well as the type of appointment you would like to book. Once we are able, we will contact you to confirm the appointment.</p>
			
			<!--Book Now Message-->
			<p class="lead">Don’t need to ask any questions and want to book right away? Look at our availability and schedule your appointment <a href="#">here</a>!</p>
		</div>
	</div>
</div>

<!--Book Now Message-->
<!--<div class="container">
	<div class="col-md-offset-2 col-md-8">
		<p class="">Don’t need to ask any questions and want to book right away? Look at our availability and schedule your appointment <a href="#">here</a>!</p>
	</div>
</div> -->

<!--Appointment Form-->
<div class="container spacing">
	<div class="row text-center">
		<div class="col-md-offset-2 col-md-8">
			<h2 class="interior-headers centered text-uppercase">Request an Appoinment</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<form id="form12" name="form12" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://s1mon.wufoo.com/forms/z106zgp6079yqha/#public">
  
				<div class="">
					<div id="foli1" class="notranslate       form-group col-sm-6">
						<label class="desc" id="title1" for="Field1">
							Name<span id="req_1" class="req">*</span>
						</label>

						<div>
							<input id="Field1" name="Field1" type="text" class="field text small form-control input-lg" value="" maxlength="255" tabindex="1" onkeyup=""       required placeholder="" />
						</div>
					</div>
					<div id="foli2" class="notranslate       form-group col-sm-6">
						<label class="desc" id="title2" for="Field2">
							Email<span id="req_2" class="req">*</span>
						</label>
						<div>
							<input id="Field2" name="Field2" type="email" spellcheck="false" class="field text small form-control input-lg" value="" maxlength="255" tabindex="2"       placeholder="" required />
						</div>
					</div>
				</div>
				<div class="row">
					<div id="foli5" class="phone notranslate      form-group col-sm-6">
						<div class="col-xs-12">
							<label class="desc" id="title5" for="Field5">
								Telephone
							</label>
						</div>
						<div class="col-xs-4">
							<input id="Field5" name="Field5" type="tel" class="field text form-control input-lg" value="" size="3" maxlength="3" tabindex="3" placeholder=""       />
							<label for="Field5" class="label-help">##</label>
						</div>
						<div class="col-xs-4 margin-remove">
							<input id="Field5-1" name="Field5-1" type="tel" class="field text form-control input-lg" value="" size="3" maxlength="3" tabindex="4" placeholder="" />
							<label for="Field5-1" class="label-help">##</label>
						</div>
						<div class="col-xs-4 margin-remove">
							<input id="Field5-2" name="Field5-2" type="tel" class="field text form-control input-lg" value="" size="4" maxlength="4" tabindex="5" placeholder="" />
							<label for="Field5-2" class="label-help">##</label>
						</div>
					</div>
					<div id="foli6" class="date notranslate       form-group col-sm-6">
						<div class="col-xs-12">
							<label class="desc" id="title6" for="Field6">
								Date
							</label>
						</div>
						<div class="col-xs-4">
							<input id="Field6-1" name="Field6-1" type="text" class="field text form-control input-lg" value="" size="2" maxlength="2" tabindex="6"       />
							<label for="Field6-1" class="label-help">MM</label>
						</div>
						<div class="col-xs-4 margin-remove">
							<input id="Field6-2" name="Field6-2" type="text" class="field text form-control input-lg" value="" size="2" maxlength="2" tabindex="7" />
							<label for="Field6-2" class="label-help">DD</label>
						</div>
						<div class="col-xs-4 margin-remove">
							<input id="Field6" name="Field6" type="text" class="field text form-control input-lg" value="" size="4" maxlength="4" tabindex="8" />
							<label for="Field6" class="label-help">YYYY</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="foli7" class="time notranslate       form-group col-sm-12">
						<div class="col-xs-12">
							<label class="desc" id="title7" for="Field7">
								Time
							</label>
						</div>
						<div class="hours col-xs-3">
							<input id="Field7" name="Field7" type="text" class="field text form-control" value="" size="2" maxlength="2" tabindex="9"       />
							<label for="Field7" class="label-help">HH</label>
						</div>
						<div class="minutes col-xs-3 margin-remove">
							<input id="Field7-1" name="Field7-1" type="text" class="field text form-control" value="" size="2" maxlength="2" tabindex="10" />
							<label for="Field7-1" class="label-help">MM</label>
						</div>
						<div class="seconds col-xs-3 margin-remove">
							<input id="Field7-2" name="Field7-2" type="text" class="field text form-control" value="" size="2" maxlength="2" tabindex="11" />
							<label for="Field7-2" class="label-help">SS</label>
						</div>
						<div class="ampm col-xs-3 margin-remove">
							<select id="Field7-3" name="Field7-3" class="field select form-control" style="width:4em" tabindex="12" >
								<option value="AM" selected="selected">AM</option>
								<option value="PM" >PM</option>
							</select>
							<label for="Field7-3" class="label-help">AM/PM</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="foli3" class="notranslate       form-group col-xs-12">
						<div class="col-xs-12">
							<label class="desc" id="title3" for="Field3">
								Message<span id="req_3" class="req">*</span>
							</label>
						</div>
						<div class="col-xs-12">
							<textarea id="Field3" name="Field3" class="field textarea small form-control input-lg" spellcheck="true" rows="5" cols="50" tabindex="3" onkeyup="" placeholder="" required  ></textarea>
						</div>
					</div>
				</div>
				<div class="buttons">
					<div class="col-xs-12">
						<input id="saveForm" name="saveForm" class="btTxt submit btn btn-primary col-xs-12" type="submit" value="Submit"/>
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

<!--Site's Footer-->
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/assets/includes/footer.php'); ?>
</body>
</html>
