<?php
  // Create connection with database for registering
  $dbhost = "";
  $dbuser = "";
  $dbpass = "";
  $dbname = "";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Test if connection occured
  if(mysqli_connect_errno()){
    die("Database connection failed: " .
      mysqli_connect_error() .
      " (" . mysqli_connect_errno() . ")"
    );
  }
?>