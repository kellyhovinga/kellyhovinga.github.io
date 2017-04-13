<footer>
<h2>Like, Subscribe, or Tweet:</h2>
	    <ul>
	    <li>
		    <a href="http://www.facebook.com">
		        <img src='http://www.womenactionmedia.org/cms/assets/themes/crate/images/social/facebook.png' alt="facebook"/>
		    </a>
	    </li>
		<li>
			<a href="http://www.twitter.com">
		    <img src='http://grfx.cstv.com/schools/wis/graphics/icon_twitter24.jpg' alt="Twitter"/>
			</a>
		</li>
		<li>
		<?php
			if (file_exists($fname)) {
				echo "$filename This file was last modified: ".date("F d Y H:i:s.", filemtime($fname));
			};
	 	?>
	 	</li>
		</ul>
		<br>
<h3>This website was created by Kelly Hovinga for the sake of SI539</h3>
</footer>
