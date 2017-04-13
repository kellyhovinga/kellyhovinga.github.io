<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<title>About Page</title>
		<link rel="stylesheet" type="text/css" href="CSS/homepagestyle.css">
		<link rel="stylesheet" type="text/css"
	          href="https://fonts.googleapis.com/css?family=Tangerine">
	    <?php $fname=basename(__FILE__);?>
</head>
<body>
<header>
		<?php include 'header.php';?>
	<nav id="nav">
		<?php include 'nav.php';?>		
	</nav>
</header>
		<h1 class="place">About Ashley</h1>
		<div class="forcolumns">
			<div id="statement">
				<h2>Statement</h2>
				<p id="related" class="about">
				"Artwork by nature is a transitive medium. It is both an expression of the artist's emotions and an expression of reality on a conceptual level. Most interestingly, a single piece of artwork can mean an infinite number of things to an infinite number of people, because the emotions a picture evokes and the thoughts associated are completely internal. Unlike a book or a movie, a picture does not dictate how the viewer is supposed to feel, but instead allows them to find their own meaning. Much of the artwork Ashley creates evokes complex emotions, but the viewer is left to their own devices to decide how those emotions fit into their world view."</p>
			</div>
			<div id="artwork">
				<h2>Artwork</h2>
				<p id="description" class="about">The majority of Ashley’s work is a combination of collage and digital mediums. Ashley seriously began working with construction paper after she began her children’s job. Working on bulletin boards brought about an interest in the possible uses of paper. The digital artwork is an even more recent interest, and the result of digital courses through the community college.In her work, Ashley strives to create equal representation of different ethnicities.</p>
			</div>
			<div id="education">
				<h2>Education and Work</h2>
				<p id="Ed&W" class="about">
				Ashley is an alumnus of the Ohio State University, and a resident of Columbus, Ohio. Currently, Ashley works with children in an after school program. Additionally, Ashley tutors college students in writing at the University of Michigan. </p>
			</div>
		</div>
		<br>
		<div id="Formphp">
			<form action="formhandle.php" method="GET">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email">
				<label for="msg">We hope you enjoyed the Website. Please leave us a comment:</label>
				<textarea name="msg" id="msg" cols="30" rows="10"></textarea>
				<input type="submit" name="submit" value="submit">
			</form>
		</div>
<footer id="footbox">
	<?php include 'footer.php';?>
</footer>
</body>
