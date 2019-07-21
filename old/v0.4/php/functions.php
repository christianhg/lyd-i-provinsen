<?php
	function message($message)
	{
		echo "<p>" . $message . "</p>";
	}

	function block($name)
	{
		include("blocks/" . $name . ".php");
	}

	function page($name)
	{
		include("pages/" . $name . ".php");
	}

	function activePage($page) {
		if(isset($_GET['p']))
		{
			if($page == $_GET['p'])
			{
				return "class=\"active\"";	
			}
		} else {
			if($page == "broadcast")
			{
				return "class=\"active\"";
			}
		}
	}
?>