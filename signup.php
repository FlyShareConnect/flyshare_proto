<?php
	session_start();
	require('db.php');

	// insert the registered values into database

	$fullname = $_POST['name'];
//	$fullname = str_replace(' ', '', $fullname);
	$email = $_POST['email'];
	$password = $_POST['password'];
	$pverify = $_POST['pverify'];
	$visible = 1;

	// password encryption
	$hash_format = "";
	$salt = "";
	$format_and_salt = $hash_format . $salt;
	$hash = crypt($password, $format_and_salt);


	$query  = "INSERT INTO profiles (fullname, email, password, visible)
			 VALUES ('{$fullname}', '{$email}', '{$hash}', {$visible})";

	$result = mysqli_query($connection, $query);

	// checking for error
	if($result){
		$_SESSION['logged_user'] = $email;
	}else{
		die(mysqli_error($connection));
	}

	header('Location:dashboard.php');

/*
	$query  = "CREATE TABLE $fullname
				(
				id INT(11) NOT NULL AUTO_INCREMENT,
				fullname VARCHAR(50) NOT NULL,
				email VARCHAR(100) NOT NULL,
				password VARCHAR(100) NOT NULL,
				likes VARCHAR(50) NOT NULL,
				skips VARCHAR(50) NOT NULL,
				visible TINYINT(1) NOT NULL,
				PRIMARY KEY(id)
				)";


	$result = mysqli_query($connection, $query);

	// checking for error
	if($result){
		echo 'we have a profile!';
	}else{
		die(mysqli_error($connection));
	}


	$query2	 = "INSERT INTO $fullname (fullname, email, password, visible)
			   	VALUES ('{$fullname}', '{$email}', '{$hash}', {$visible})";

	$result2 = mysqli_query($connection, $query2);

	if($result2){
		$_SESSION['logged_user'] = $email;
	}else{
		die(mysqli_error($connection));
	}
*/

?>

<?php include('head.php') ?>
<?php include('nav.php') ?>

<main>

	<div class="dim"></div>
	<div class="wrapper">
		<div class="video-content">
			<video muted="muted" id="register-vid" src="" class="video-js vjs-default-skin" autoplay loop width="auto" height="auto" vjs-default-skin vjs-playing vjs-fullscreen vjs-big-play-centered data-setup='{ "techOrder": ["youtube"], "src": "https://www.youtube.com/watch?v=V07InQN6hWM&feature=youtu.be" }'></video>
		</div>
	</div>

	<div class="corner-title-static"><a href="index.php">FlyShare</a></div>

</main>


<?php include('footer.php') ?>

<?php mysqli_close($connection); ?>