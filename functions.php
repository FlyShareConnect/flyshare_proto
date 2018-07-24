<?php
	function logged_in(){
		return isset($_SESSION['logged_user']);
	}
	
	function confirm_log(){
		if(!logged_in()){
			header("Location:register.php");
		}
	}
?>

