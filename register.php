<?php include('head.php') ?>
<?php include('nav.php') ?>

<main>

	<div class="wrapper">
		<div class="video-content">
			<video muted="muted" id="register-vid" src="" class="video-js vjs-default-skin" autoplay loop width="auto" height="auto" vjs-default-skin vjs-playing vjs-fullscreen vjs-big-play-centered data-setup='{ "techOrder": ["youtube"], "src": "http://youtu.be/z7SXit3yoNM" }'></video>
		</div>
	</div>
	
	<div class="dim"></div>
	
	<div class="corner-title-static"><a href="index.php">FlyShare</a></div>
	
	<form class="login" name="input" action="loggingin.php" method="post">
		<p>Already a user?</p>
		<input id="email" type="text" name="l_email" placeholder="Email Address">
		<input id="passwd"type="password" name="l_password" placeholder="Password">
		<input id="login-button" type="submit" name="welcome" value="Sign In">
	</form>

	<form class="signup" name="input" action="signup.php" method="post">
		<p>New to Trailer Disco? Sign up.</p>
		<input id="signup-name" type="text" name="name" placeholder="Full Name">
		<input id="signup-email"type="text" name="email" placeholder="Email Address">
		<input id="signup-passwd" type="password" name="password" placeholder="Password">
		<input id="signup-pverify" type="password" name="pverify" placeholder="Verify Password">
		<input id="signup-button" type="submit" name="hookup" value="Sign up for Trailer Disco">
		<p id="terms"><a href="terms.php">Terms and Conditions</a></p>
	</form>
	
</main>

<?php include('footer.php') ?>