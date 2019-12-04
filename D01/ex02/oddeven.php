<?php
while (1) {
	echo "Enter a number: ";
	$str = fgets(STDIN);
	$str = trim($str);
	if (feof(STDIN)) {
		echo PHP_EOL;
		exit(0);
	}
	if (is_numeric($str) == true) {
		$i = (int)$str;
		switch ($i % 2) {
			case 0:
				echo "The number ", $str . " is even" . PHP_EOL;
				break;
			case 1:
				echo "The number ", $str . " is odd" . PHP_EOL;
				break;
			default:
				echo "Error with ", $str . PHP_EOL;
				break;
		}
	}
	else {
		echo "'" . $str . "' " . "is not a number" . PHP_EOL;
	}
}
