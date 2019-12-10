<?php
	function check($name){
		$fp = fopen('../private/cars.csv', 'r');
		while (($array[] = fgetcsv($fp))!= FALSE)
				foreach ($array as &$value){
					if ($value[1] == $name){
						if ($value[2] == 1)
							return (TRUE);
						else
							return (FALSE);
						}
				}
			}

