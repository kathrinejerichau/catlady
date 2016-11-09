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
			<h2>Contact</h2>
		</div>
		<div id="bodyLeft">
			<p>
				Use the form to the right to contact us. The form is most often used to 
				contact us either regarding an adoption, or a delivery of a cat. We however
				also appreciate feedback regarding either our entertainment section, or the site 
				in general. 
			</p>
			<p>
				Cattius will typically respond within 1 to 24 hours. 
			</p>
		</div>
		<div id="bodyRight">
			<form id="contactForm" onsubmit="event.preventDefault();" autocomplete="off" action="http:folk.ntnu.no/michaedm/norwegian-tax-administration/receive.php" method="post">
			<input type="text" name="contactName" id="contactName" placeholder="You name: " required>
			<input type="email" name="contactEmail" id="contactEmail" placeholder="Your email" required>
			<select id="about" name="about" size="1" required>
				<option value="adopt">I want to adopt a cat</option>
				<option value="deliver">I want to deliver a cat</option>
				<option value="feedback">I wish to give feedback</option>
				<option value="donation">I'm curious about donating</option>
				<option value="other">Other</option>
			</select>
			<textarea rows="4" cols="31" form_id="contactForm" name="contactTextBox" id="contactTextBox" placeholder="Your message here:" required></textarea><br>
			<input type="submit" id="sendButton" onclick="validateForm();" value="Send" height="75" width="100">
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