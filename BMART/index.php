<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" type="text/css" href="css/css1.css">
		<title>BMART- An Online Shopping store for Beautiful girls....</title>
	</head>
	<body link="Black" bgcolor="#CEEOF1">
	<?php 
	include("header.php"); ?>
		<div class="slideshow-container">
		 <!-- Full-width images with number and caption text -->
  		<div class="mySlides fade">
  		  <div class="numbertext">1 / 3</div>
  		  <img src="img/img1.jpg" style="width:100%">
  		</div>
		 <div class="mySlides fade">
    		<div class="numbertext">2 / 3</div>
    		<img src="img/img2.jpg" style="width:100%">
  		</div>
		 <div class="mySlides fade">
    		<div class="numbertext">3 / 3</div>
    		<img src="img/img3.jpg" style="width:100%">
  		</div>
		<!-- Next and previous buttons -->
  		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>
		<!-- The dots/circles -->
		<div style="text-align:center">
  		<span class="dot" onclick="currentSlide(1)"></span> 
  		<span class="dot" onclick="currentSlide(2)"></span> 
  		<span class="dot" onclick="currentSlide(3)"></span> 
		</div>
		<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		// Next/previous controls
		function plusSlides(n) {
  		showSlides(slideIndex += n);
		}

		// Thumbnail image controls
		function currentSlide(n) {
  		showSlides(slideIndex = n);
		}

		function showSlides(n) {
  		var i;
  		var slides = document.getElementsByClassName("mySlides");
  		var dots = document.getElementsByClassName("dot");
  		if (n > slides.length) {slideIndex = 1} 
  		if (n < 1) {slideIndex = slides.length}
  		for (i = 0; i < slides.length; i++) {
      		slides[i].style.display = "none"; 
  		}
  		for (i = 0; i < dots.length; i++) {
      		dots[i].className = dots[i].className.replace(" active", "");
 		 }
 		 slides[slideIndex-1].style.display = "block"; 
 		 dots[slideIndex-1].className += " active";
		}

		</script>
		<?php
		if(isset($_SESSION["user_ses"]))
		{
		echo " ";
		}
		else
		{
		echo "<p align='center'><a href='login.php'>Login</a><br><a href='signup.php'>Sign up</a></p>";
		echo "<hr width='80%'>";
		echo "<p align='center'><strong>Online Shopping India : Buy Women clothing of all kinds-casual or party wears @BMART.com</strong></p>";
		}?>
	<?php include("footer.php"); ?>
</body>
</html>