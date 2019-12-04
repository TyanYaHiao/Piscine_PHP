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

$arr = ft_split_no_sort($argv[1]);
$i = 1;
while ($arr[$i]) {
	echo $arr[$i] . " ";
	$i++;
}
echo $arr[0] . PHP_EOL;

//foreach ($arr as $key=>$value) {
//
//	if ($arr[$key + 1])
//		echo " ";
//	else
//		echo PHP_EOL;
//}
