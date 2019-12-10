<?php

require_once '../ex01/Vertex.class.php';

class Vector {
	private $x_magnitude;
	private $y_magnitude;
	private $z_magnitude;
	private $w = 1.0;

	static $verbose = false;

	function __construct($arr) {
		if (isset($arr['dest'])) {
			if (isset($arr['orig'])) {
				$orig = new Vertex(array('x' => $arr['orig']->get_x(),
										 'y' => $arr['orig']->get_y(),
										 'z' => $arr['orig']->get_z(),));
			}
			else {
				$orig = new Vertex(array('x' => 0.0, 'y' => 0.0, 'z' => 0.0));
			}
			$this->x_magnitude = $arr['dest']->get_x() - $orig->get_x();
			$this->y_magnitude = $arr['dest']->get_y() - $orig->get_y();
			$this->z_magnitude = $arr['dest']->get_z() - $orig->get_z();
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

	}

	static function doc() {
		echo file_get_contents("Vector.doc.txt") . PHP_EOL;
	}

	public function magnitude() {
		return sqrt(pow($this->x_magnitude, 2) + pow($this->y_magnitude, 2) + pow($this->z_magnitude, 2));
	}

	public function normalize() {

	}

	public function add() {

	}

	public function sub() {

	}

	public function opposite() {

	}

	public function scalarProduct() {

	}

	public function dotProduct() {

	}

	public function cos() {

	}

	public function crossProduct() {

	}
}
