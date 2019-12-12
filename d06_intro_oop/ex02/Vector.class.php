<?php

require_once '../ex01/Vertex.class.php';

class Vector {
	private $x;
	private $y;
	private $z;
	private $w = 0.0;

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
			$this->x = $arr['dest']->get_x() - $orig->get_x();
			$this->y = $arr['dest']->get_y() - $orig->get_y();
			$this->z = $arr['dest']->get_z() - $orig->get_z();
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
		return (vsprintf("Vector( x: %0.2f, y: %0.2f, z: %0.2f, w: %0.2f )",
				array($this->x, $this->y, $this->z, $this->w)));
	}

	static function doc() {
		echo file_get_contents("Vector.doc.txt") . PHP_EOL;
	}

	public function magnitude() {
		return sqrt(pow($this->x, 2) + pow($this->y, 2) + pow($this->z, 2));
	}

	public function normalize() {
		if ($this->magnitude() == 1.00) {
			return clone $this;
		}
		else {
			return new Vector(array('dest' => new Vertex(array('x' => $this->x / $this->magnitude(),
															   'y' => $this->y / $this->magnitude(),
															   'z' => $this->z / $this->magnitude()))));
		}
	}

	public function add(Vector $rhs) {
		return new Vector(array('dest' => new Vertex(array('x' => $this->x + $rhs->x,
														   'y' => $this->y + $rhs->y,
														   'z' => $this->z + $rhs->z))));
	}

	public function sub(Vector $rhs) {
		return new Vector(array('dest' => new Vertex(array('x' => $this->x - $rhs->x,
														   'y' => $this->y - $rhs->y,
														   'z' => $this->z - $rhs->z))));
	}

	public function opposite() {
		return new Vector(array('dest' => new Vertex(array('x' => $this->x * -1,
														   'y' => $this->y * -1,
														   'z' => $this->z * -1))));
	}

	public function scalarProduct($k) {
		return new Vector(array('dest' => new Vertex(array('x' => $this->x * $k,
														   'y' => $this->y * $k,
														   'z' => $this->z * $k))));
	}

	public function dotProduct(Vector $rhs) {
		return (float)(($this->x * $rhs->x) + ($this->y * $rhs->y) + ($this->z * $rhs->z));
	}

	public function cos(Vector $rhs) {
		return ($this->dotProduct($rhs) / ($this->magnitude() * sqrt(pow($rhs->x, 2) +
																	 pow($rhs->y, 2) +
																	 pow($rhs->z, 2))));
	}

	public function crossProduct(Vector $rhs) {
		return (new Vector(array('dest' => new Vertex(array('x' => $this->y * $rhs->z - $this->z * $rhs->y,
															'y' => $this->z * $rhs->x - $this->x * $rhs->z,
															'z' => $this->x * $rhs->y - $this->y * $rhs->x)))));
	}
}
