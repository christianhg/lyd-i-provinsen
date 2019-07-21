<?php
	session_start();

	include("functions.php");

	$loggedIn = false;

	if(isset($_SESSION['userId']) && (trim($_SESSION['userId']) != ''))
	{
		$loggedIn = true;
	}
?>