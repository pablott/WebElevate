<?php


class Fruit {

	public $name;
	public $clean;
	protected $washed = 0;



	public function Fruit($fruitName) {
		$this->name = $fruitName;
		$this->clean = false;
	}

	public function wash() {
		$this->washed =+ 1;
		$this->clean = true;
	}
}



class Cherry extends Fruit {

	public $hasStone;
	public $makesPies;

	public function Cherry ($cherryType) {
		$this->name = $cherryType . ' cherry';
		$this->hasStone = true;
		$this->makesPies = true;
	}

}



class Apple extends Fruit {

	public $hasStone;
	public $makesPies;

	public function Apple ($appleType) {
		$this->name = $appleType . ' apple';
		$this->hasStone = false;
		$this->makesPies = true;
	}

}


$myCherry = new Cherry('wild');
$myApple = new Apple('Golden');

$myCherry->wash();

$myApple->wash();
$myApple->wash();


if ($snack->clean) {
	echo 'You get a nice clean ' . $snack->name . ' for lunch';
}
else {
	echo 'You get a ' . $snack->name . ' for lunch, but you should really wash it first!';
}
