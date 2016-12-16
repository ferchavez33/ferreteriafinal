<?php
	session_start();
	if($_SESSION["auentificado"] != "SI"){
		header("Location: index.php?errorus=si");
		exit();
	}


?>