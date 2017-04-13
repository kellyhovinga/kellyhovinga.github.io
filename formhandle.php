<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<title>FormHandle</title>
	
		<link rel="stylesheet" type="text/css" href="CSS/homepagestyle.css">
		<link rel="stylesheet" type="text/css"
	          href="https://fonts.googleapis.com/css?family=Tangerine">
	    <?php $fname=basename(__FILE__) ?>
</head>
<body>
<header>
	<nav id="nav">
		<?php include 'nav.php';?>		
	</nav>
</header>
<div class="responsepage">
	<h1>Welcome <?php echo $_GET["name"]; ?></h1>
	<br>
	<h2>Your email address is: <?php echo $_GET["email"];?></h2>
	<br>
	<h2>You wrote: <?php echo $_GET["msg"];?></h2>
</div>
<footer id="formfoot">
	<h2>Thank you for your Comments!</h2>
</footer>
</body>
</html>

