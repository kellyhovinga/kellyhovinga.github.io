<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<title>Collage Page</title>
		<link rel="stylesheet" type="text/css" href="CSS/homepagestyle.css">
		<link rel="stylesheet" type="text/css"
	          href="https://fonts.googleapis.com/css?family=Tangerine">
        <?php $fname=basename(__FILE__);?>
	<script>
		$(document).ready(function() {
        var imageLinks = $('a[href$=".png"], a[href$=".jpg"], a[href$=".gif"], a[href$=".bmp"]');
        if (imageLinks.children('img').length) {
            imageLinks.children('img').each(function() {
                var currentTitle = $(this).attr('title');
                $(this).attr('title', currentTitle + ' (click to enlarge image)');
            });
            imageLinks.click(function(e) {
                e.preventDefault();
                $(this).children('img').toggleClass('expanded');
            });
        }
    });
	</script>
</head>
<body>
<header>
<header>
		<?php include 'header.php';?>
	<nav id="nav">
		<?php include 'nav.php';?>		
	</nav>
</header>
</header>
		<h1 class="place">Collage Page</h1>
	<section class="aside">
		<p>The three pieces with the red backgrounds are Johnson's "Map Girl" Series. The meaning behind the pieces is best described as "travel makes you free." Moreover, the act of travel becomes a part of an individual's worldview, and eventually affects the way they interact with other people. The altered perceptions of a well traveled individual are apparent to their friends and family, and thus become a map that is worn upon their chest. 
	</section>
	<div id="pictures">
		<a href="img/Patti.png"><img id="Patti" class="collageart" src="img/Patti.png" alt="Ashley Johnson"></a>
		<a href="img/Annie.png"><img id="Annie" class="collageart" src="img/Annie.png" alt="Ashley Johnson"></a>
		<a href="img/Polly.png"><img id="Polly" class="collageart" src="img/Polly.png" alt="Ashley Johnson"></a>
		<a href="img/col_untitled.png"><img id="untitled" class="collageart" src="img/col_untitled.png" alt="Ashley Johnson"/> </a>
	</div>
<footer id="footbox">
	   <?php include 'footer.php';?>
</footer>


<script>
	function swipe() {
   var largeImage = document.getElementsByClassName('collageart');
   collageart.style.display = 'block';
   collageart.style.width=200+"px";
   collageart.style.height=200+"px";
   var url=collageart.getAttribute('src');
   window.open(url,'Image','width=collageart.stylewidth,height=collageart.style.height,resizable=1');
		}
</script>
</body>