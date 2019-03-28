<?php
	session_start();
	require_once('db.php');

	$l_email = $_POST['l_email'];
	$l_password = $_POST['l_password'];

	$hash_format = "";
	$salt = "";
	$format_and_salt = $hash_format . $salt;
	$l_hash = crypt($l_password, $format_and_salt);

	$fetch = mysqli_query($connection, "SELECT id FROM profiles WHERE
							email = '$l_email' and password = '$l_hash'");
	$count = mysqli_num_rows($fetch);

	if($count > 0){
		$_SESSION['logged_user'] = $l_email;
		header("Location:dashboard.php");
	}else{
		header("Location:index.php");
	}

?>