<?php 	
	session_start();
	// if session exists
	if(!isset($_SESSION['logged_user'])){
		header("Location:index.php");
		exit;
	}
?>

<?php include('head.php') ?>
<?php include('nav.php') ?>

<main>
	<div class="video-wrapper">
		<div class="media-video-content">
			<video
			muted="muted"
			id="index-vid"
			class="video-js vjs-default-skin"
			autoplay
			loop
			data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=Kh883DeNl7M&feature=youtu.be"}] } '>
			</video>
		</div>
	</div>
	<div class="stream-description">
		<section class="stream-profile">
			<h1>Pilot Profile</h1>
			<ul>
				<li>Name: Frank Lebowski</li>
				<li>Location: Somewhere out here</li>
				<li>Email: FLebowski@flyshare.live</li>
				<li>Phone: +61 491 570 159</li>
				<li>Address: 64-40 Tutt Ave, Netherby SA 5062, Australia</li>
				<li>Skype: FLobowski</li>
			</ul>
		</section>
		<div class="stream-information">
			<div class="info-item"><span class="stream-live-icon">LIVE</span></div>
			<div class="info-item">Local Time: 18:00</div>
			<div class="info-item">Friday, June 1, 2019 (GMT+9:30)</div>
			<div>
				<button>start a conversation</button>
			</div>
			<div>
				<button>assign mission</button>
			</div>
			<div>
				<button>share this live</button>
			</div>
			<div>
				<button>download hd footage</button>
			</div>
		</div>
	</div>
</main>

<?php include('footer.php') ?>
