<?php

namespace main;

class ABC{

 	public static function __callStatic($mathod,$pars)
 	{
 		echo __class__;

 		//print_r($pars);
 	}
}

namespace ABC;

class ABC{

	public $name ="hi my name is ankit"; 

	public function name(){
		return $this->name;
	}
}


ABC::name('ss','sdasd');