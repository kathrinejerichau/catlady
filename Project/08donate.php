<!DOCTYPE html>
<!--
FILE NAME: 08donate.php
WRITTEN BY: Lars G. Thyholdt & Martin Kvalheim
WHEN: November 2016
PURPOSE: Donate information and form.
-->
<html>
	<!-- ***** HEADER CONTENT BELOW ***** -->
	<?php include 'header.php';?>

<body>
<div id="wrapper">

	<!-- ***** BANNER CONTENT BELOW ***** -->
		<?php include 'banner.php';?>
	
	<!-- ***** NAVBAR CONTENT BELOW ***** -->
		<?php include 'menu.php';?>

	<!-- ***** BODY CONTENT STARTS HERE ***** -->
	<div id="divBody">
	
		<div id="nameOfPage">
			<h2>Donate</h2>
		</div>
		
	
	<div id="bodyLeft">
		<p> 
			Want to support us? We are a non-profit organization that needs 
			funds to help as many cats as possible. All donations go to the well-
			being of homeless cats.
		</p>
		<p>
			If you want to remain anonymous you can leave the fields blank. 
		</p>
		<br><output id="output"></output>
	</div>
	
	<div id="bodyRight">

	<form target="_blank" id="donationForm" onsubmit="donationCounter();" autocomplete="off" 
	action="phpForm/donationForm.php" method="post">
	<input type="text" name="donName" id="donatorName" placeholder="Your name: ">
	<input type="text" name="donAddress" id="donatorAddress" placeholder="Address: ">
	<input type="email" name="donEmail" id="donatorEmail" placeholder="Email: ">
	<input type="text" name="donPhone" id="donatorPhone" placeholder="Phone number: ">
	<input type="number" name="donAmount" id="NewDonation" placeholder="Donation amount:" min="1" >
	
	<input type="image" src="img/purr.png" id="donationButton" height="100" width="200" alt="Donate button image">
	<input type="button" onclick="rsForm();" id="resetForm" value="Reset Form" height="75" width="100">

	</form>
	</div>
	</div>
	
	
	<!-- ***** FOOTER CONTENT BELOW ***** -->
		<?php include 'footer.php';?>
</div>


<script src="js/08donate.js"> </script>
</body>
</html>