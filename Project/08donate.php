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
	
		<div id="nameOfPage">
			<h2>Donations</h2>
		</div>
		
	
	<div id="bodyLeft">
			<p> Want to support us? We are a non-profit organization that needs 
	funds to help as many cats as possible. All donations go to the well-
	being of homeless cats. 
	
	If you want to remain anonymous you can leave the fields blank. 
			</p>
		<br><output id="output"></output>
	</div>
	
	<div id="bodyRight">

	<form id="donationForm" onsubmit="event.preventDefault(); donationCounter();" autocomplete="off" 
	action="http://folk.ntnu.no/michaedm/norwegian-tax-administration/receive.php" method="post">
	<input type="text" name="donName" id="donatorName" placeholder="Your name: ">
	<input type="text" name="donAddress" id="donatorAddress" placeholder="Address: ">
	<input type="email" name="donEmail" id="donatorEmail" placeholder="Email: ">
	<input type="text" name="donPhone" id="donatorPhone" placeholder="Phone number: ">
	<input type="number" name="donAmount" id="NewDonation" placeholder="Donation amount....." min="1" >
	
	<input type="image" src="img/purr.png" id="donationButton" height="100" width="200" alt="Donate button image">
	
	<! -- ** <canvas id="myCanvas" width="200" height="100" style="border:2px solid  #FFCC00;">
	
		
	<script>
	/* 
	var c = document.getElementById("myCanvas");
	var ctx = c.getContext("2d");
	var h = c.getContext("2d");
	var img = document.getElementById("pay");
	var grd=ctx.createLinearGradient(0,200,0,0);
	grd.addColorStop(0,"orange");
	grd.addColorStop(1,"white");
	
	ctx.fillStyle = grd;
	ctx.fillRect(0,0,200,100);
	
	// text
	h.font= "italic 10px Arial";
	ctx.font = "italic 30px Arial";
	h.fillStyle= "#20B2AA";
	h.fillText("Donate with",15,40,100,200);
	ctx.fillText("PurrPurrPal",15,70,200,100);
	ctx.drawImage(img, 15,80,100,20);
	
 */
	
	</script> 

	</form>


	</div>
	</div>
	
	
	<!-- ***** FOOTER CONTENT BELOW ***** -->
	<div class="footer">
		<?php include 'footer.php';?>
	</div>
</div>


<script src="js/08donate.js"> </script>
</body>
</html>