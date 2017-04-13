<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<title>Digital Art</title>
	
		<link rel="stylesheet" type="text/css" href="CSS/homepagestyle.css">
		<link rel="stylesheet" type="text/css"
	          href="https://fonts.googleapis.com/css?family=Tangerine">
	    <?php $fname=basename(__FILE__); ?>
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
		<?php include 'header.php';?>
	<nav id="nav">
		<?php include 'nav.php';?>		
	</nav>
</header>
		<h1 class="place">Digital Art Page</h1>
	<div id="digitalpic_gallery" >
		<a href="img/Garmoshka.png"><img id="Garmoshka" class="DGP" src="img/Garmoshka.png" alt="Ashley Johnson"></a>
		<a href="img/doubt.png"><img id="doubt" class="DGP" src="img/doubt.png" alt="Ashley Johnson"></a>
		<a href="img/focus.png"><img id="focus" class="DGP" src="img/focus.png" alt="Ashley Johnson"></a>
		<a href="img/eyeshadow.png"><img id="eyeshadow" class="DGP" src="img/eyeshadow.png" alt="Ashley Johnson"></a>
		<a href="img/cleaning.png"><img id="cleaning" class="DGP" src="img/cleaning.png" alt="Ashley Johnson"></a>
		<a href="img/Fox.png"><img id="Fox" class="DGP" src="img/Fox.png" alt="Ashley Johnson"></a>
		<a href="img/Purple.png"><img id="Purple" class="DGP" src="img/Purple.png" alt="Ashley Johnson"></a>
		<a href="img/RaRaRasputin.png"><img id="RaRaRasputin" class="DGP" src="img/RaRaRasputin.png" alt="Ashley Johnson"></a>
		<a href="img/skeletons.png"><img id="skeletons" class="DGP" src="img/skeletons.png" alt="Ashley Johnson"></a>
		<a href="img/Morning.png"><img id="Morning" class="DGP" src="img/Morning.png" alt="Ashley Johnson"></a>
		<a href="img/Light_Bringer.png"><img id="Light_Bringer" class="DGP" src="img/Light_Bringer.png" alt="Ashley Johnson"></a>
		<a href="img/Steve.png"><img id="Steve" class="DGP" src="img/Steve.png" alt="Ashley Johnson"></a>
		<a href="img/USA.png"><img id="USA" class="DGP" src="img/USA.png" alt="Ashley Johnson"></a>
		<a href="img/Villa.png"><img id="Villa" class="DGP" src="img/Villa.png" alt="Ashley Johnson"></a>
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
