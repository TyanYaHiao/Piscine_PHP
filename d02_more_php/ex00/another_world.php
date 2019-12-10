#!/usr/bin/php
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

if ($argc > 1) {
	$arr = ft_split_no_sort($argv[1]);
	foreach ($arr as $key=>$value) {
		echo $arr[$key];
		if ($arr[$key + 1])
			echo " ";
		else
			echo PHP_EOL;
	}
}
?>