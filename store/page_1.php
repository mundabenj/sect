<?php
	session_start();
	
	$_SESSION['name'] = 'Felix';
	
	print $_SESSION['name'];
	
?>