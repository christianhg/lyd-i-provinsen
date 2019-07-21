<?php
	include("core.php");

	if(isset($_POST['doLogout']))
	{
		$_SESSION = array();
		session_destroy();
	}
?>