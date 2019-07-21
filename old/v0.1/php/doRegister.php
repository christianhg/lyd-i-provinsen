<?php
	include("core.php");

	if(isset($_POST['doRegister']))
	{
		$username = mysql_real_escape_string($_POST['username']);
		$password = $_POST['password'];
		$passwordAgain = $_POST['passwordAgain'];
		if($username < 30 && $password = $passwordAgain)
		{
			$hash = hash('sha256', $password);
			$salt = substr(md5(uniqid(rand(), true)), 0, 3);
			$hash = hash('sha256', $salt . $hash);
			
			mysqli_connect_errno($mysqli);
			$mysqli->query("insert into users (username, password, salt) values ('".$username."', '".$hash."', '".$salt."')");
			$mysqli->close();

			header("Location: ../index.php");
		}
	}
	else
	{
		header("Location: ../index.php");
	}
?>