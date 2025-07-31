<?php
	session_start();
		
	unset($_SESSION['name']);
		
	print $_SESSION['name'];
	
?>