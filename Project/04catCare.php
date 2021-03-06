<!DOCTYPE html>
<!-- 
FILE NAME: 04catCare.php
WRITTEN BY: Sofia Ø. Jacobsson & Kathrine J. Nissen
WHEN: November 2016
PURPOSE: gives information about cat care
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
			<h2>Cat care</h2>
		</div>
		<div id="bodyLeft">
		<img src="img/pages/04catCare/cat_care.jpg" alt="cat care" id="catCare1">
		<img src="img/pages/04catCare/cat_care_fatCat.jpg" alt="cat care" id="catCare2">
		<img src="img/pages/04catCare/cat_care_cute.jpg" alt="cat care" id="catCare3">
			
		</div>
		<div id="bodyRight">
			<!-- Canvas to make the rotating cat tips in JavaScript -->
			<div id="catCareTips">
				Cat Care Tip:<br><br>
				<canvas id="catCareRight" width="300" height="300"></canvas>
			</div>
			
			<!-- Text about cats -->
			<p>
				Cats require lots of love from their owner in order to be happy. 
				Here you can read all about how to take care of your cat.
			</p>
			<p>
				Although cats enjoy your company, they also need some privacy. 
				Place the litter box in a quiet spot where the cat can relief itself 
				without interruptions. Avoid heavily scented litters for the litter box. 
			</p>
			<p>
				Also, cats like to eat without interruptions. 
				Give your cat time to eat, and cuddle with it afterwards. 
				Don’t overfeed your cat. Obesity if one of the 
				biggest health issues facing cats today.
			</p>
			<p>
				The average lifespan of an indoor cat is 13-17 years. Purebred cats are more likely 
				to have genetic medical problems than non-pedigreed cats. Occasionally, a cat with
				a medical condition might need an adjusted diet. 
				Consult your veterinarian for recommendations. 
				Schedule yearly vet visits to make sure your cat is healthy.
			</p>
			<p>
				Keep an eye on your cat. Your cat can’t speak english - so you have to be observant 
				of behavioral changes to make sure your cat is healthy.
			</p>
			<p>
				Provide your cat with a scratching post. This will keep it from scratching furniture, wood etc.
			</p>
		</div>
	</div>
	
	
	<!-- ***** FOOTER CONTENT BELOW ***** -->
		<?php include 'include/footer.php';?>
</div>

<script src="js/04catCare.js"></script>

</body>
</html>