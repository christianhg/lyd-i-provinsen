<?php include("php/core.php"); ?>
<?php block("header"); ?>
<?php
	if(isset($_GET['p'])) {
		if(file_exists("pages/".$_GET['p'].".php")) {
			include("pages/".$_GET['p'].".php");
		} else {
			include("pages/404.php");
		}
	} else {
		include("pages/front.php");
	}
?>	
<?php block("footer"); ?>