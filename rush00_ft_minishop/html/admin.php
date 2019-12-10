<?php
	function do_cars($name, $do){
		$fp = fopen('../private/cars.csv', 'r');
		while (($array[] = fgetcsv($fp))!= FALSE)
			if ($do == '+'){
				foreach ($array as &$value){
					if ($value[1] == $name){
						$value[2] = 1;
					}
				}
			}
		if ($do == '-'){
			foreach ($array as &$value){
				if ($value[1] == $name){
					$value[2] = 0;
				}
			}
		}
		fclose($fp);
		$fp = fopen('../private/cars.csv', 'w');
		foreach ($array as $fields) {
			fputcsv($fp, $fields);
		}
		fclose($fp);
	}
	
	function clear_user($name){
			$file_name = '../private/'.$name.'.csv';
			$fp = fopen($file_name, 'r');
			while (($array[] = fgetcsv($fp))!= FALSE)
				foreach ($array as &$value){
					if ($value[2] == 1){
						do_cars($value[1], '+');
					}
				}
			fclose($fp);
			$fp = fopen($file_name, 'w');
			foreach ($array as $fields) {
				fputcsv($fp, $fields);
			}
			fclose($fp);
			unlink($file_name);
	}
	
	if (!($_POST['login']) || !($_POST['submit'] == 'Delete user')) {
		include('admin.html');
		exit();
	}
	if ($_POST['login'] == 'admin'){
		include('admin.html');
		exit();
	}
	$array = unserialize(file_get_contents("../private/passwd"));
	foreach ($array as $key => $value)
	{
		if ($value["login"] == $_POST["login"]) {
			clear_user($_POST["login"]);
			unset($array[$key]);
		}
	}
	file_put_contents("../private/passwd", serialize($array));
	include('admin.html');
	exit();
