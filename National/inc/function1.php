<?php
	function checkuser()
	{
		if(!isset($_SESSION['email']) and !isset($_cookie['email']))
		{
			redirect('login.php', 'Please Login First', 'error');
		}
	}
	function redirect($url, $msg, $msgtype)
	{
		$_SESSION['msg'] = $msg;
		$_SESSION['msgtype'] = $msgtype;
		header("location: $url");
	}

	function showmsg()
	{
		if(isset($_SESSION['msg']))
		{
			echo "<div class='$_SESSION[msgtype]'>";
			echo $_SESSION['msg'];
			echo "</div>";

			unset($_SESSION['msg']);
			unset($_SESSION['msgtype']);

		}
	}

?>