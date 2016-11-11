<!DOCTYPE html>
<!--
FILE NAME: 07contact.php
WRITTEN BY: Fredrik I. Forså
WHEN: November 2016
PURPOSE: Basic contact info plus form to fill out.
-->
<html>
	<!-- ***** HEADER CONTENT BELOW ***** -->
	<?php include 'include/header.php';?>
<body>
<div id="wrapper">
	<!-- ***** BANNER CONTENT BELOW ***** -->
		<?php include 'include/banner.php';?>
	
	<!-- ***** NAVBAR CONTENT BELOW ***** -->
		<?php include 'include/menu.php';?>

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
			<p>
				Dog Lane 9, 1337 00 Zootopia.<br>
				Phone number: 123 456 78 90<br>
				Email: cattius@catcastle.com<br>
				Opening hours: 10-18<br>
				Opening hours (phone): 10-20<br>
			</p>

		</div>
		<div id="bodyRight">
			<form target="_blank" id="contactForm" autocomplete="off" action="phpForm/contactForm.php" method="post">
			<input type="text" name="contactName" id="contactName" placeholder="You name: " required>
			<input type="email" name="contactEmail" id="contactEmail" placeholder="Your email" required>
			<select id="about" name="about" size="1" required>
				<option value="">Choose an option</option>
				<option value="adopt">I want to adopt a cat</option>
				<option value="deliver">I want to deliver a cat</option>
				<option value="feedback">I wish to give feedback</option>
				<option value="donation">I want to donate</option>
				<option value="other">Other</option>
			</select>
			<textarea rows="4" cols="31" name="contactTextBox" id="contactTextBox" placeholder="Your message here:" required></textarea><br>
			<input type="submit" id="sendButton" onclick="validateForm();" value="Send">
			<input type="button" onclick="rsForm();" id="resetForm" value="Reset">
			</form>
		</div>
	</div>
	
	
	<!-- ***** FOOTER CONTENT BELOW ***** -->
		<?php include 'include/footer.php';?>
</div>
<script src="js/07contact.js"></script>
</body>
</html>