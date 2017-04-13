<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="CSS/homepagestyle.css">
	<link rel="stylesheet" type="text/css"
	          href="https://fonts.googleapis.com/css?family=Tangerine">
	<?php $fname=basename(__FILE__); ?>
</head>
<body>
<header>
		<?php include 'header.php';?>
	<nav id="nav">
		<?php include 'nav.php';?>		
	</nav>
</header>
	<h1 class="place">Ashley Johnson</h1>
	<div class="aside">
		<p>This website is a collection of work from Ashley Johnson. The works include both digital and paper mediums. Many of the works are created in spurts of inspiration, and thus have a series like quality. As of right now, Ashley does not have a store or account on Etsy; however, a link to a webshop is in the works. Please enjoy.</p>
	</div>
	<div class="forcolumns">
		<div class="bodybox">
			<p id="content">
				<img class="navpic" src="img/Patti.png" alt="Ashley Johnscon">
				<a class="nav_second" href="collagepage.php">To the Collage Gallery</a>
			</p>
		</div>
		<div class="bodybox">
			<p id="middle">
				<img class="navpic" src="img/untitled.png" alt="Ashley Johnson">
				<a class="nav_second" href="digitalpage.php">To the Digital Artwork</a>
			</p>
		</div>
		<div class="bodybox">
			<p id="right">
				<img class="navpic" src="img/for_kelly.png" alt="Ashley Johnscon">
				<a class="nav_second" href="aboutpage.php">To the About Page</a>
			</p>
		</div>
	</div>
<footer id="footbox">
	<?php include 'footer.php';?>
</footer>
</body>