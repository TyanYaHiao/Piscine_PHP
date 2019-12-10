<?php

class Color {
	public $red;
	public $green;
	public $blue;
	static $verbose = False;

	function __construct($arr) {
		if (isset($arr['rgb'])) {
			$this->red = intval($arr['rgb'] >> 16 & 0xFF);
			$this->green = intval($arr['rgb'] >> 8 & 0xFF);
			$this->blue = intval($arr['rgb'] & 0xFF);
		}
		elseif (isset($arr['red']) && isset($arr['green']) && isset($arr['blue'])) {
			$this->red = intval($arr['red']);
			$this->green = intval($arr['green']);
			$this->blue = intval($arr['blue']);
		}
		if(self::$verbose) {
			echo $this->__toString() . " constructed" . PHP_EOL;
		}
	}

	function __destruct() {
		if(self::$verbose) {
			echo $this->__toString() . " destructed" . PHP_EOL;
		}
	}

	function __toString() {
		return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
	}

	static function doc() {
		echo file_get_contents("Color.doc.txt") . PHP_EOL;
	}

	public function add($color) {
		return (new Color(array('red' => $this->red + $color->red,
								'green' => $this->green + $color->green,
								'blue' => $this->blue + $color->blue)));
	}

	public function sub($color) {
		return (new Color(array('red' => $this->red - $color->red,
								'green' => $this->green - $color->green,
								'blue' => $this->blue - $color->blue)));
	}

	public function mult($multiplicator) {
		return (new Color(array('red' => $this->red * $multiplicator,
								'green' => $this->green * $multiplicator,
								'blue' => $this->blue * $multiplicator)));
	}
}