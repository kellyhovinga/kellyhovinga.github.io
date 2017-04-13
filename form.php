<form>
	<label for="name">Name:</label>
	<input type="text" id="name" name="name">
	<label for="email">Email:</label>
	<input type="email" id="email" name="email">
	<label for="msg">Message:</label>
	<textarea name="msg" id="msg" cols="30" rows="10"></textarea>
	<input type="submit">
	<?php 
		//$fname = $_POST['fname'];
		$fname = htmlentities($_POST['name']);
		//$email = $_POST['email'];
		$email = htmlentities($_POST['email'])
		//$msg = $_POST['msg'];
		$msg = htmlentities($_POST['msg'])
		echo "<p>Hello <b class='spec'>$fname</b>, your email address is <b class='spec'>$email</b>. You wanted to leave this message: <b class='spec'>$msg</b></p>";
	?>

</form>


// you will have to do this for your next assignment. 
//second line of code keeps people from messing with the form style/format. 