<?php

require_once '../ex00/Color.class.php';

class Vertex {
	private $x;
	private $y;
	private $z;
	private $w = 1.0;
	private $color;

	static $verbose = false;

	function __construct($arr) {
		if (isset($arr['x']) && isset($arr['y']) && isset($arr['z'])) {
			$this->x = $arr['x'];
			$this->y = $arr['y'];
			$this->z = $arr['z'];
			if (isset($arr['w'])) {
				$this->w = $arr['w'];
			}
			if (isset($arr['color'])) {
				$this->color = $arr['color'];
			}
			else {
				$this->color = new Color(array("rgb" => 0xffffff));
			}
			if (self::$verbose) {
				echo $this->__toString() . " constructed" . PHP_EOL;
			}
		}
	}

	function __destruct() {
		if (self::$verbose) {
			echo $this->__toString() . " destructed" . PHP_EOL;
		}
	}

	function __toString() {
		return (vsprintf("Vertex( x: %3d, y: %3d, z: %3d, w: %3d, Color( red: %3d, green: %3d, blue %3d ) )",
				array($this->x, $this->y, $this->z, $this->w, $this->color->red, $this->color->green, $this->color->blue)));
	}

	static function doc() {
		echo file_get_contents("Vertex.doc.txt") . PHP_EOL;
	}

//	Vector funcs----------------------------------------------------------------------------//

	function get_x() {
		return $ret_x = $this->x;
	}

	function get_y() {
		return $ret_y = $this->y;
	}

	function get_z() {
		return $ret_z = $this->z;
	}
}