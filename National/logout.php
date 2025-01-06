<?php
	session_start();
	
	require('inc/function1.php');

	checkuser();

	unset($_SESSION['email']);
	
	setcookie('email', NULL, time()-9999);

	redirect('login.php', 'Successfully Logged Out', 'success');

?>