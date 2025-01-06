<?php
	session_start();
	require('inc/function1.php');

?>
<?php
	showmsg();

?>
<style>
	body {
		font-family: Arial, sans-serif;
		line-height: 1.6;
		margin: 0;
		padding: 0;
		background-color: #f8f9fa;
		color: #333;
		font-style: italic;
	.login{
		display: inline-block;
		position: absolute;
		left: 35%;
		top: 20%;
		width: 300px;
		height: 300px;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);		
		padding: 70px;
		max-width: 600px;
		margin: 2rem auto;
		background-color: #f1f1f1;
		border-radius: 8px;
		color: black;
		font-style: italic;
	
	}
	h1{
	
		color: green;
	}
	
	.login input{
		border-left: 0px;
		border-right: 0px;
		border-top: 0px;
		font-size: 30px;
		margin-left: -30px;
		background-color: #f1f1f1;
	}
	b{
		margin-left: -30px;
	}
</style>
<link rel='stylesheet' href='style/style.css' />
<div class='login'>
<h1> Login </h1>
<form action='login-process.php' method='post'>
	
   <b> Email </b> <input type='email' name='email' required/>
	 <br /><br />
   <b> Password </b> <input type= 'password' name='password' required/>
	 <br /><br />
	 <input type='checkbox' name='save' value='yes' /> Remember Me
	<br /><br />
	 <input type='submit' value='login'  />
</form>
</div>