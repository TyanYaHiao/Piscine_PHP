<?php
session_start();
if ($_SESSION['loggued_on_user'])
	$_SESSION['loggued_on_user'] = "";
	header('location: index.php');
?>