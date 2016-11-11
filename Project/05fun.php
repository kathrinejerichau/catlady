<!DOCTYPE html>
<!--
FILE NAME: 05fun.php
WRITTEN BY: Lars G. Thyholdt, Martin Kvalheim, Fredrik I. Forså
WHEN: November 2016
PURPOSE: Image gallery with onclick modal.
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
			<h2>Entertainment </h2>
		</div>
		
		<div class="imgContainer">		
  
		<!-- Upper row of pictures -->
			<div id="upperRow">		
				<img class="thumbnail" onclick="onClick(this)" id="myImg1" src="img/pages/05fun/funCat1.png" alt="funny cat">
				<img class="thumbnail" onclick="onClick(this)" id="myImg2" src="img/pages/05fun/funCat2.png" alt="funny cat">
				<img class="thumbnail" onclick="onClick(this)" id="myImg3" src="img/pages/05fun/funCat3.png" alt="funny cat">
				<img class="thumbnail" onclick="onClick(this)" id="myImg4" src="img/pages/05fun/funCat4.png" alt="funny cat">
				<img class="thumbnail" onclick="onClick(this)" id="myImg5" src="img/pages/05fun/funCat5.png" alt="funny cat">
			</div>
		
		<!-- Lower row of pictures -->
			<div id="lowerRow">
				<img class="thumbnail"  onclick="onClick(this)" id="myImg6" src="img/pages/05fun/funCat6.png" alt="funny cat">  
				<img class="thumbnail"  onclick="onClick(this)" id="myImg7" src="img/pages/05fun/funCat7.png" alt="funny cat">
				<img class="thumbnail"  onclick="onClick(this)" id="myImg8" src="img/pages/05fun/funCat8.png" alt="funny cat">
				<img class="thumbnail"  onclick="onClick(this)" id="myImg9" src="img/pages/05fun/funCat9.png" alt="funny cat">
				<img class="thumbnail"  onclick="onClick(this)" id="myImg10" src="img/pages/05fun/funCat10.png" alt="funny cat">
			</div>
		</div>
		<!-- Modal -->
		<div id="funModal" class="modal" onclick="this.style.display='none'">
			<!-- Close button -->
			<span class="close" onclick="document.getElementById('funModal').style.display='none'">&times;</span>
			<!-- Modal Content (The Image) -->
			<img class="modal-content" id="modImg" alt="placeholder" src="img/pages/05fun/funCat1.png">
		</div>
	</div>
	<!-- ***** FOOTER CONTENT BELOW ***** -->
		<?php include 'include/footer.php';?>
</div>
<script src="js/05fun.js"> </script>
</body>
</html>