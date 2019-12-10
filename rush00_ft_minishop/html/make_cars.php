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
		$fd = fopen($file_name, 'wb');
		
		foreach ($cars as $fields) {
			fputcsv($fd, $fields);
		}
		
		fclose($fd);
	}
?>
