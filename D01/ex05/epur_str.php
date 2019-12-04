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

for ($i = 1; $i < $argc; $i++) {
	$arr = ft_split($argv[$i]);
	foreach ($arr as $key=>$value) {
		echo $arr[$key];
		if ($arr[$key + 1])
			echo " ";
		else
			echo PHP_EOL;
	}
}