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
			<h2>Cat care</h2>
		</div>
		<div id="bodyLeft">
		<p>Cats require lots of love from their owner in order to be happy.

		Here you can read all about how to take care of your cat.</p>
			
		</div>
		<div id="bodyRight">			
			<canvas id="catCareRight" width="300" height="300"></canvas><br>
			<img src="img/cat_care.jpg" alt="cat care" width="100%">
		</div>
	</div>
	
	
	<!-- ***** FOOTER CONTENT BELOW ***** -->
	<div class="footer">
		<?php include 'footer.php';?>
	</div>
</div>

<script src="js/04catCare.js"></script>

</body>
</html>