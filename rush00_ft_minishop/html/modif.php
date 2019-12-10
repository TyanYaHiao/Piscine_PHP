<?php
	$array = [];
	
	if ($_POST['submit'] == 'GO BACK'){
		include ('login.html');
		exit();
		}
	if (!($_POST['newpasswd']) || !($_POST['login']) || !($_POST['submit'] == 'OK') || !($_POST['oldpasswd'])) {
		include('modifagain.html');
		exit("Error\n");
	}
	if (!($array = unserialize(file_get_contents("../private/passwd")))){
		include('modifagain.html');
		exit("ERROR\n");
	}
	foreach ($array as &$value)
	{
		if ($value["login"] == $_POST["login"]) {
			if ($value["passwd"] == hash("whirlpool",$_POST["oldpasswd"])) {
				$value["passwd"] = hash("whirlpool",$_POST["newpasswd"]);
				file_put_contents("../private/passwd", serialize($array));
				include('login.html');
				exit("OK\n");
			} else {
				echo "ERROR\n";
				include('modifagain.html');
				exit ();
			}
		}
	}
	include('modifagain.html');
	exit("ERROR\n");
