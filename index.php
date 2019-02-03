<?php include('head.php') ?>
<?php include('nav.php') ?>

<main>

	<div class="dim"></div>
	<div class="wrapper">
		<div class="video-content">
			<video
					muted="muted"
					id="index-vid"
					class="video-js vjs-default-skin vjs-fullscreen"
					autoplay
					loop
					data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=V07InQN6hWM&feature=youtu.be"}] } '>
				</video>
		</div>
	</div>

	<form class="login" name="input" action="loggingin.php" method="post">
		<?php if(isset($_SESSION['logged_user'])): ?>
			<a href="/dashboard.php" id="goto-dashboard">Go to dashboard</a>
		<?php else: ?>
			<p>Already a user?</p>
			<input id="email" type="text" name="l_email" placeholder="Email Address">
			<input id="passwd"type="password" name="l_password" placeholder="Password">
			<input id="login-button" type="submit" name="welcome" value="Sign in">
		<?php endif; ?>
	</form>

	<?php if(!isset($_SESSION['logged_user'])): ?>
		<form class="signup" name="input" action="signup.php" method="post">
			<p>New to FlyShare? Sign up.</p>
			<input id="signup-name" type="text" name="name" placeholder="Full Name">
			<input id="signup-email"type="text" name="email" placeholder="Email Address">
			<input id="signup-passwd" type="password" name="password" placeholder="Password">
			<input id="signup-pverify" type="password" name="pverify" placeholder="Verify Password">
			<input id="signup-button" type="submit" name="hookup" value="Sign up for FlyShare">
			<p id="terms"><a href="terms.php">Terms and Conditions</a></p>
		</form>
	<?php endif; ?>

</main>


<?php include('footer.php') ?>