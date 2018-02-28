<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Team Medellin, Assignment 3</title>
		<link href="css/styles.css" rel="stylesheet">
		<!-- linkfor slider.css -->
		<link rel="stylesheet" type="text/css" href="./bootstrap/css/responsiveslides.css">
		<!-- links for fontface -->
		<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
	</head>

	<body>
		
   		<?php
  			include "includes/nav.php";
  		?>

		<div class="container flexColumn">

			<div class="container">
				<article>
		
					<h2>Casey A. Brentnall</h2>

					<p>Hello! My name is Casey Adam Brentnall. I am a sophomore attending the the University of Rochester and my major is computer science.</p>
					<!-- Add a read more botton tag that leads to casey's page -->
					<form>
						<input type="button" value="Learn More" onclick="window.location.'http://www.urcsc174.org/assignment03/medellin/casey.php'" />
					</form>

					<h2>Irfan Bashir</h2>

					<p>Hello! My name is Irfan Bashir. I am a sophomore and an international student from Indian attending the University of Rochester and my major is Financial Economics.</p>
					<!-- Add a read more botton tag that leads to Irfan's page -->
					<form>
						<input type="button" value="Learn More" onclick="window.location.'http://www.urcsc174.org/assignment03/medellin/irfan.php'"/>
					</form>


					<h2>Jimmy Yang</h2>

					<p>Hello! My name is Jimmy Yang. I am a sophomore attending the University of Rochester and I am double majoring in Economics and Global Perspectives History.</p>
					<!-- Add a read more botton tag that leads to Jimmy's page -->
					<form>
						<input type="button" value="Learn More" onclick="window.location.'http://www.urcsc174.org/assignment03/medellin/jimmy.php'"/>
					</form>


				</article>

				<!-- create a slideshow that is constantly showing the picture of the students-->
		
				<aside>			
					<main class="rslides">
						<img src="images/casey.jpg" alt="Casey">
						<img src="images/irfan.jpg" alt="Irfan">
						<img src="images/jimmy.jpg" alt="Jimmy">
					</main>
				</aside>
					<!--slideshow-->
		
			</div><!--.container-->

		</div>
		<footer>&copy;Team Medellín</footer>	
		
	    <!-- responsive slider -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
		<script src="js/responsiveslides.js"></script>    
		<script>
		      $(function() {
		      $(".rslides").responsiveSlides();
		        });
		</script>

	</body>

	
</html>