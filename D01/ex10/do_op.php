<?php

if ($argc == 4) {
	$num1_str = trim($argv[1]);
	$operator_str = trim($argv[2]);
	$num2_str = trim($argv[3]);
	switch ($operator_str) {
		case "+":
			echo ((int)$num1_str + (int)$num2_str) . PHP_EOL;
			break;
		case "-":
			echo ((int)$num1_str - (int)$num2_str) . PHP_EOL;
			break;
		case "*":
			echo ((int)$num1_str * (int)$num2_str) . PHP_EOL;
			break;
		case "/":
			echo ((int)$num1_str / (int)$num2_str) . PHP_EOL;
			break;
		case "%":
			echo ((int)$num1_str % (int)$num2_str) . PHP_EOL;
			break;
		default:
			echo "0" . PHP_EOL;
			break;
	}
}
