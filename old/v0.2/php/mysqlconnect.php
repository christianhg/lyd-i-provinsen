<?php
	//$mysqli = mysqli_connect("db18.meebox.net", "lydiprov_lip", "", "lydiprov_lip");
	$db = new mysqli("localhost", "root", "root", "lydiprovinsen");

	if(mysqli_connect_errno()) {
		echo "Connection Failed: " . mysqli_connect_errno();
		exit();
   }
?>
