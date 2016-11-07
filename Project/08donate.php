<!DOCTYPE html>
<html>
	<!-- ***** HEADER CONTENT BELOW ***** -->
<div class="header">
	<?php include 'header.php';?>
</div>

<body>
<div id="wrapper">

	<!-- ***** BANNER CONTENT BELOW ***** -->
	<div class="banner">
		<?php include 'banner.php';?>
	</div>
	
	<!-- ***** NAVBAR CONTENT BELOW ***** -->
	<div class="menu">
		<?php include 'menu.php';?>
	</div>

	<!-- ***** BODY CONTENT STARTS HERE ***** -->
	<div id="divBody">
		
		<p> Want to support us? We are a non-profit organization that needs 
	funds to help as many cats as possible. All donations go to the well-
	being of homeless cats. 
	
	If you want to remain anonymous you can leave the fields blank. 
	</p>
		
		
		<div id="donationForm">
	
	<form onsubmit="event.preventDefault(); donationCounter();" autocomplete="off" 
	action="http://folk.ntnu.no/michaedm/norwegian-tax-administration/receive.php" method="post">>
	<input type="text" name="donName" id="donatorName" placeholder="Your name: ">
	<input type="text" name="donAddress" id="donatorAddress" placeholder="Address: ">
	<input type="email" name="donEmail" id="donatorEmail" placeholder="Email: ">
	<input type="text" name="donPhone" id="donatorPhone" placeholder="Phone number: ">
	<input type="number" name="donAmount" id="NewDonation" placeholder="Donation amount....." min="1" >
	
	<input type="image" src="img/donationButton.jpg" id="donationButton" value="DONATE NOW" height="75" width="100">
	
	<br><output id="output"></output>

	
	
	<!-- HVA ER DETTE, FREDRIK? SKILLER FOR SIDENE SOM HAR BILDE PÅ EN HALVDEL OG TEKST PÅ DEN ANDRE?
	</div>
		<div id="bodyLeft"></div>
		<div id="bodyRight"></div>
	</div>
	
-->
	
	
	<!-- ***** FOOTER CONTENT BELOW ***** -->
	<div class="footer">
		<?php include 'footer.php';?>
	</div>
</div>


<script src="js/08donate.js"> </script>
</body>
</html>