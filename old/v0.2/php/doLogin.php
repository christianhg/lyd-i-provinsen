<?php
	include("core.php");

	if(isset($_POST['doLogin']))
	{
		$username = $db->real_escape_string($_POST['username']);
		$password = $_POST['password'];
		
		if($result = $db->prepare("select id, password, salt from users where username = ?"))
		{
			$result->bind_param('s', $username);
			$result->execute();
			$result->store_result();
			$result->bind_result($r_id, $r_password, $r_salt);
			$result->fetch();
	
			if($result->num_rows > 0)
			{
				$hash = hash('sha256', $r_salt . hash('sha256', $password));

				if($hash == $r_password)
				{
					session_regenerate_id();
					$_SESSION['userId'] = $r_id;
					$_SESSION['username'] = $username;
					session_write_close();
					header("Location: ../?p=admin");
				}	
			}

			$result->close();
		}
		$db->close();
	}

	header("Location: ../?p=login");
?>