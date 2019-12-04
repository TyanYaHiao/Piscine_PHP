<?php

function ft_split_no_sort($str) {
	$array = explode(" ", $str);
	foreach ($array as $key=>$value) {
		$array[$key] = trim($array[$key]);
		if ($array[$key] == "\t" || $array[$key] == "\n" || $array[$key] == "\r" || !$array[$key])
			unset($array[$key]);
	}
	$array = array_values($array);
	return ($array);
}

function my_sort($a, $b) {
	$line = "abcdefghijklmnopqrstuvwxyz0123456789!\#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	for ($i=0; $i < strlen($a) || $i < strlen($b); $i++) {
		if (stripos($line, $a[$i]) > stripos($line, $b[$i]))
			return 1;
		elseif (stripos($line, $a[$i]) < stripos($line, $b[$i]))
			return -1;
	}
}

$arr = array();
for($i = 1; $i < $argc; $i++) {
	$ii = 0;
	while (ft_split_no_sort($argv[$i])[$ii])
	{
		array_push($arr, ft_split_no_sort($argv[$i])[$ii]);
		$ii++;
	}
}
usort($arr, 'my_sort');
foreach ($arr as $key=>$value) {
	echo $arr[$key] . PHP_EOL;
}