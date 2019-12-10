<?php
	function new_user($name)
	{
		$cars = array(
			array(1, 'A1', 0),
			array(2, 'A3', 0),
			array(3, 'A4', 0),
			array(4, 'A5', 0),
			array(5, 'A6', 0),
			array(6, 'A7', 0),
			array(7, 'A8', 0),
			array(8, 'TT', 0),
			array(9, 'Q3', 0),
			array(10, 'Q7', 0),
			array(11, 'Q8', 0),
			array(12, 'RS6', 0),
			array(13, 'RS7', 0),
			array(14, 'TTRS', 0),
		);
		$file_name = "../private/".$name.".csv";
		echo $file_name;
		$fd = fopen($file_name, 'w+');
		
		foreach ($cars as $fields) {
			fputcsv($fd, $fields);
		}
		
		fclose($fd);
	}
	
	$array = [];
	
	if ($_POST['submit'] == 'GO BACK'){
		include ('login.html');
		exit();
	}
	if (!($_POST['passwd']) || !($_POST['login']) || !($_POST['submit'] == 'OK')) {
		include('createagain.html');
		exit();
	}
	
	if (!($array = unserialize(file_get_contents("../private/passwd")))){
		$array[] = [
			"login" => $_POST['login'],
			"passwd" => hash("whirlpool", $_POST['passwd'])
		];
		file_put_contents("../private/passwd", serialize($array));
		$name = $_POST['login'];
		new_user($name);
		include('login.html');
		exit();
	}
	foreach ($array as $value)
	{
		if ($value["login"] == $_POST["login"]) {
			include('createagain.html');
			exit ();
		}
	}
	$array[] = [
		"login" => $_POST['login'],
		"passwd" => hash("whirlpool", $_POST['passwd'])
	];
	file_put_contents("../private/passwd", serialize($array));
	$name = $_POST['login'];
	new_user($name);
	include('login.html');
	exit();