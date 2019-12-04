<?php
function ft_split($str) {
	$array = explode(" ", $str);
	foreach ($array as $key=>$value) {
		$array[$key] = trim($array[$key]);
		if ($array[$key] == "\t" || $array[$key] == "\n" || $array[$key] == "\r" || !$array[$key])
			unset($array[$key]);
	}
	$array = array_values($array);
	return ($array);
}

//print_r(ft_split($argv[1]));
