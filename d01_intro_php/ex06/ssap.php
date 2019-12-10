<?php
function ft_split($str) {
	$array = explode(" ", $str);
	foreach ($array as $key=>$value) {
		$array[$key] = trim($array[$key]);
		if ($array[$key] == "\t" || $array[$key] == "\n" || $array[$key] == "\r" || !$array[$key])
			unset($array[$key]);
	}
	sort($array);
	return ($array);
}

$arr = array();
for($i = 1; $i < $argc; $i++) {
	$ii = 0;
	while (ft_split($argv[$i])[$ii])
	{
		array_push($arr, ft_split($argv[$i])[$ii]);
		$ii++;
	}
}
sort($arr);
foreach ($arr as $key=>$value) {
	echo $arr[$key] . PHP_EOL;
}
