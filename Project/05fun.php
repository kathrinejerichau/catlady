<!DOCTYPE html>
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
			<h2>Entertainment </h2>
		</div>
		
<div class="imgContainer">		
  
	<!-- Upper row of pictures -->
	
		<div id="upperRow">		
				<img class="thumbnail" onclick="onClick(this)" id="myImg1" src="img/fun/funCat1.png" alt="funny cat" >
				<img class="thumbnail" onclick="onClick(this)" id="myImg2" src="img/fun/funCat2.png" alt="funny cat">
				<img class="thumbnail" onclick="onClick(this)" id="myImg3" src="img/fun/funCat3.png" alt="funny cat">
				<img class="thumbnail" onclick="onClick(this)" id="myImg4" src="img/fun/funCat4.png" alt="funny cat">
				<img class="thumbnail" onclick="onClick(this)" id="myImg5" src="img/fun/funCat5.png" alt="funny cat">
		</div>
	<!-- Lower row of pictures -->
		<div id="lowerRow">
				<img class="thumbnail"  onclick="onClick(this)" id="myImg6"  src="img/fun/funCat6.png" alt="funny cat">  
				<img class="thumbnail"  onclick="onClick(this)" id="myImg7"  src="img/fun/funCat7.png" alt="funny cat">
				<img class="thumbnail"  onclick="onClick(this)" id="myImg8"  src="img/fun/funCat8.png" alt="funny cat">
				<img class="thumbnail"  onclick="onClick(this)" id="myImg9"  src="img/fun/funCat9.png" alt="funny cat">
				<img class="thumbnail"  onclick="onClick(this)" id="myImg10"  src="img/fun/funCat10.png" alt="funny cat">
		</div>
    </div>
		<!-- Modal -->
		<div id="funModal" class="modal" onclick="this.style.display='none'">
		<!-- Close button -->
		<span class="close" onclick="document.getElementById('funModal').style.display='none'">&times;</span>
		 <!-- Modal Content (The Image) -->
		<img class="modal-content" id="modImg">
		</div>
  </div>
	<!-- ***** FOOTER CONTENT BELOW ***** -->
		<?php include 'footer.php';?>
</div>
<script src="js/05fun.js"> </script>
</body>
</html>