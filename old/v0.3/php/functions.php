<?php
	function message($message)
	{
		echo "<p>" . $message . "</p>";
	}

	function block($name)
	{
		include("blocks/" . $name . ".php");
	}
?>