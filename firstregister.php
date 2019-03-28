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

header( 'Location:play.php' ) ;

?>

<!-- Google Code for signups Conversion Page -->
<script type="text/javascript">
/ <![CDATA[ /
var google_conversion_id = 962185109;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "dc5UCMP5slYQlY_nygM";
var google_remarketing_only = false;
/ ]]> /
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/962185109/?label=dc5UCMP5slYQlY_nygM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>