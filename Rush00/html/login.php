<?php
	include "auth.php";
	session_start();
	if (($_POST['login'] && $_POST['passwd']) && auth($_POST['login'], $_POST['passwd']))
	{
		if ($_POST['login'] == 'admin')
		{
			include ('admin.html');
			exit;
		}
		$_SESSION['loggued_on_user'] = $_POST['login'];
		header('location: index.php');
		exit;
	}
	else if (($_POST['login'] && $_POST['passwd']))
	{
		include ('loginagain.html');
		exit;
	}
?>
