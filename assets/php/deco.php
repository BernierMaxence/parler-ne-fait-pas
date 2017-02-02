<?php 
	// Destroy session variables 
	session_start();
	$_SESSION['loginTable'] = false;
	session_destroy();
	header('Location: ../../index.php');
?>