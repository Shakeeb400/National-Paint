<?php
	session_start();

	require('inc/function1.php');

	$email = $_POST['email'];
	$password = $_POST['password'];
	$save = $_POST['save'];

	if($email == 'khaleeq@paint.pk' && $password == 'dulux')
	{
		$_SESSION['email'] = $email;
		redirect('about.php', 'Welcome Back!', 'success');
		if($save == 'yes')
		{
			setcookie('email', $email, time()+3600*24);
		}

	}else{
		redirect('login.php', 'Invalid Login Info', 'error');
	}
?>