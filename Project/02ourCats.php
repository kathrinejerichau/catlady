<!DOCTYPE html>
<!--
FILE NAME: 02ourCats.php
WRITTEN BY: Lars G. Thyholdt & Fredrik I. Forså
WHEN: November 2016
PURPOSE: Slideshow with cats available for adoption.
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
			<h2>Our Cats</h2>
		</div>
	
		<div class="catPictures">
			<p id="catNumber"></p>
			<img id="catImg" src="img/ourCats/cat00.png" alt="Adorable Anton">
			<p id="catText"></p>
		</div>	
	</div>
	
	<!-- ***** FOOTER CONTENT BELOW ***** -->
		<?php include 'footer.php';?>
</div>

<script src="js/02ourCats.js"></script>
</body>
</html>