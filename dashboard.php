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
	<div class="map-wrapper">
		<img src="images/map.png" alt="map image">
		<a href="/media.php" class="link-media">
			<img src="/images/person.png" alt="media icon">
			Media
		</a>
		<a href="/pilot.php" class="link-pilot">
			<img src="/images/drone.png" alt="pilot icon">
			Pilot
		</a>
	</div>
</main>

<?php include('footer.php') ?>
 