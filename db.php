<?php 
  // Create connection with database for registering
  $dbhost = "flyshare.live";
  $dbuser = "imadeitc_albert";
  $dbpass = "buff2904100";
  $dbname = "imadeitc_flyshare_db";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Test if connection occured
  if(mysqli_connect_errno()){
    die("Database connection failed: " .
      mysqli_connect_error() . 
      " (" . mysqli_connect_errno() . ")"
    );  
  }
?>