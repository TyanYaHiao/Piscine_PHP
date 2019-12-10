<?php
switch ($_GET['action']) {
	case 'set':
		setcookie($_GET['name'], $_GET['value'], time() + (60 * 60 * 24));
		break;
	case 'get':
		if ($_COOKIE[$_GET['name']]) {
			echo $_COOKIE[$_GET['name']] . "\n";
		}
		break;
	case 'del':
		setcookie($_GET['name'], "", time() - 3700);
		print_r($_COOKIE);
		break;
}
?>