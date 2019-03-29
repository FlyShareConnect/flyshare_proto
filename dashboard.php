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

<main class="main-dashboard">
	<h1>Location Map</h1>
        <center>
        <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="702" id="gmap_canvas" src="https://maps.google.com/maps?q=&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.flyshare.live"></a></div><style>.mapouter{position:relative;text-align:right;height:702px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:702px;width:1080px;}</style>
		<a href="/media.php" class="link-media">
			<img src="/images/person.png" alt="media icon">
			User
		</a>
		<a href="/pilot.php" class="link-pilot">
			<img src="/images/drone.png" alt="pilot icon">
			Pilot
		</a>
        </center>
	</div>
</main>

<?php include('footer.php') ?>
 