<?php

#http://php.net/manual/en/language.oop5.abstract.php


abstract class A
{

	abstract public function f1($message);

}

class B extends A
{	
	public $message;

	public function f1($message)
	{
		return $this->message = $message; 
	}

} 

$obj = new B;

$obj->f1('hello world');

echo $obj->message;





