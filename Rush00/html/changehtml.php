<?php
	session_start();
	error_reporting(0);
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
	function do_cars_user($name, $user){
		$file_name = '../private/'.$user.'.csv';
		$fp = fopen($file_name, 'r');
		while (($array[] = fgetcsv($fp))!= FALSE)
				foreach ($array as &$value){
					if ($value[1] == $name){
						$value[2] = 1;
					}
				}
		fclose($fp);
		$fp = fopen($file_name, 'w');
		foreach ($array as $fields) {
			fputcsv($fp, $fields);
		}
		fclose($fp);
	}
	
	if ($_POST['A1'] == 'Add to cart'){
	    do_cars('A1', '-');
   	    do_cars_user('A1', $_SESSION['loggued_on_user']);
	    include ('index.php');
	    exit();
    }
	if ($_POST['A3'] == 'Add to cart'){
		do_cars('A3', '-');
	    do_cars_user('A3', $_SESSION['loggued_on_user']);
		include ('index.php');
		exit();
	}
	if ($_POST['A4'] == 'Add to cart'){
		do_cars('A4', '-');
	    do_cars_user('A4', $_SESSION['loggued_on_user']);
		include ('index.php');
		exit();
	}if ($_POST['A5'] == 'Add to cart'){
	do_cars('A5', '-');
    do_cars_user('A5', $_SESSION['loggued_on_user']);
	include ('index.php');
	    exit();
	}
	if ($_POST['A6'] == 'Add to cart'){
	do_cars('A6', '-');
    do_cars_user('A6', $_SESSION['loggued_on_user']);
	include ('index.php');
	    exit();
	}
	if ($_POST['A7'] == 'Add to cart'){
		do_cars('A7', '-');
	    do_cars_user('A7', $_SESSION['loggued_on_user']);
		include ('index.php');
	    exit();
	}
	if ($_POST['A8'] == 'Add to cart'){
		do_cars('A8', '-');
	    do_cars_user('A8', $_SESSION['loggued_on_user']);
		include ('index.php');
	    exit();
	}if ($_POST['TT'] == 'Add to cart'){
	do_cars('TT', '-');
    do_cars_user('TT', $_SESSION['loggued_on_user']);
	include ('index.php');
	    exit();
	}
	if ($_POST['Q3'] == 'Add to cart'){
	do_cars('Q3', '-');
	do_cars_user('Q3', $_SESSION['loggued_on_user']);
	include ('index.php');
	    exit();
	}
	if ($_POST['Q7'] == 'Add to cart'){
	do_cars('Q7', '-');
	do_cars_user('Q7', $_SESSION['loggued_on_user']);
	include ('index.php');
	    exit();
	}
	if ($_POST['Q8'] == 'Add to cart'){
		do_cars('Q8', '-');
		do_cars_user('Q8', $_SESSION['loggued_on_user']);
		include ('index.php');
	    exit();
	}
	if ($_POST['RS6'] == 'Add to cart'){
		do_cars('RS6', '-');
		do_cars_user('RS6', $_SESSION['loggued_on_user']);
		include ('index.php');
	    exit();
	}
	if ($_POST['RS7'] == 'Add to cart'){
		do_cars('RS7', '-');
		do_cars_user('RS7', $_SESSION['loggued_on_user']);
		include ('index.php');
	    exit();
	}
	if ($_POST['TTRS'] == 'Add to cart'){
		do_cars('TTRS', '-');
		do_cars_user('TTRS', $_SESSION['loggued_on_user']);
		include ('index.php');
	    exit();
	}
	
