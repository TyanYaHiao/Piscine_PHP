<?php

function ft_split($str) {
	$array = explode(" ", $str);
	foreach ($array as $key => $value) {
		$array[$key] = trim($array[$key]);
		if ($array[$key] == "\t" || $array[$key] == "\n" || $array[$key] == "\r" || !$array[$key])
			unset($array[$key]);
	}
	sort($array);
	return ($array);
}

function ft_is_sort($arr) {
	$sorted_array = $arr;
	sort($sorted_array);
	$sorted = true;
	foreach ($arr as $key => $value) {
		if ($arr[$key] != $sorted_array[$key])
			$sorted = false;
	}
	return ($sorted);
}

//$tab = array("1", "1", "2", "4", "5");
//$tab[] = "What are we doing now ?";
//if (ft_is_sort($tab))
//	echo "The array is sorted\n";
//else
//	echo "The array is not sorted\n";
