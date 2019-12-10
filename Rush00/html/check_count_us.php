<?php
	function check2($name)
	{
		$dir = '../private/'.$_SESSION['loggued_on_user'].'.csv';
		$fp = fopen($dir, 'r');
		while (($array[] = fgetcsv($fp)) != FALSE)
			foreach ($array as &$value) {
				if ($value[1] == $name) {
					if ($value[2] == 1)
						return (TRUE);
					else
						return (FALSE);
				}
			}
	}