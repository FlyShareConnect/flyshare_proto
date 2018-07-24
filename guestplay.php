<?php include('head.php') ?>
<?php include('nav.php') ?>

<main>	

	<div class="overlay"></div>
	<div class="wrapper">
		<div class="video-content">
			<video id="trailers" src="" class="video-js vjs-default-skin" autoplay quality="720p" width="auto" height="auto" vjs-default-skin vjs-playing vjs-fullscreen></video>
		</div>
	</div>
	
	<div class="corner-title"><a href="register.php">TRAILER DISCO</a></div>

	<div id="controls">
		<button id="refresh-b"><img id="refresh" src="images/refresh.png" name="Replay"></button>
		<button id="pause-b"><img id="pause" src="images/pause.png" name="Pause"></button>
		<button id="g-heart-b"><img id="heart" src="images/heart.png" name="I Want To See It!"></button>
		<button id="skip-b"><img id="skip" src="images/ff.png" name="Skip please"></button>
	</div>

</main>

<script src="js/guest.js"></script>

<?php include('footer.php') ?>