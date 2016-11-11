<!DOCTYPE html>
<!--
FILE NAME: 00home.php
WRITTEN BY: Fredrik I. Forså
WHEN: October 2016
PURPOSE: The homepage of the Cat Castle.
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
			<h2>Welcome to the Cat Castle</h2>
		</div>
		
		<div id="bodyLeft">
			<img src="img/pages/00home/homeCat.png" alt="home cat" id="homCat">
		</div>
		
		<div id="bodyRight">
			<p>
				Welcome to Cattius' Cat Castle. The Castle serves as a homeless
				shelter for cats, where people in the local area can 
				<a href="03handIn.php">deliver</a> cats they find, or 
				<a href="01adopt.php">adopt</a> cats from the shelter.
			</p>
			<p>
				The Castle also has an entertainment section, which provides content
				on a global scale. Feel free to head over to <a href="05fun.php">our
				entertainment page</a>.
			</p>
			<p>
				Since the Cat Castle is a non-profit organisation, it relies on volunteer
				work and gifts for funding. If you like the content and services provided
				by Cattius, please feel free to visit <a href="08donate.php">our donation page</a>.
			</p>
		</div>
	</div>
	
	
	<!-- ***** FOOTER CONTENT BELOW ***** -->
		<?php include 'include/footer.php';?>

</div>

</body>
</html>