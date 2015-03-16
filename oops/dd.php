<?php

class A
{


	public function __call($method,$params)
	{
		echo "$method -:---:- ";
		echo "<br/>";
		print_r($params);
		echo "<br/>";
	}

	# when read  variable 
	public function __get($key)
	{
		echo "$key -:get:- ";
		echo "<br/>";
	}

	# when set a varible 
	public function __set($method,$params)
	{
		echo "$method -:set:- ";
		echo "<br/>";
		print_r($params);
		echo "<br/>";

		//$this->$method= $params;
	}

}

$obj = new A();

$obj->ss = 332 ;

$s = $obj->ss;
print_r($obj);
