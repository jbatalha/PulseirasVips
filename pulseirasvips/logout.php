<?php
	session_start();

	$_SESSION["nome"] = "";
	$_SESSION["email"] = "";
    
    
	session_destroy();

	
	header("location: index.php");
?>