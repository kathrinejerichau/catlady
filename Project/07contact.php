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
		<div id="bodyLeft"></div>
		<div id="bodyRight">
			<form id="contactForm" onsubmit="event.preventDefault();" autocomplete="off" action="http:folk.ntnu.no/michaedm/norwegian-tax-administration/receive.php" method="post">
			<input type="text" name="contactName" id="contactName" placeholder="You name: ">
			<input type="email" name="contactEmail" id="contactEmail" placeholder="Your email">
			<textarea rows="4" cols="50" form_id="contactForm" name="contactTextBox" id="contactTextBox" placeholder="Your message here:"></textarea><br>
			<input type="submit" id="sendButton" value="Send" height="75" width="100">
			<input type="button" onclick="rsForm();" id="resetForm" value="Reset" height="75" width="100">
			</form>

		</div>
	</div>
	
	
	<!-- ***** FOOTER CONTENT BELOW ***** -->
	<div class="footer">
		<?php include 'footer.php';?>
	</div>
</div>
<script src="js/07contact.js"></script>
</body>
</html>