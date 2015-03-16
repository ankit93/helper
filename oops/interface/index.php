<?php
# http://php.net/manual/en/language.oop5.interfaces.php
# http://www.techflirt.com/tutorials/oop-in-php/abstract-classes-interface.html
# Interface example

interface template1
{
	public function f1();
	public function f2();
}

class abc implements template1
{
	public function f1()
	{
		echo 'Class : '.__CLASS__;
		echo "<br/>";
		echo "function : ".__FUNCTION__;
		echo "<br/>";
		echo "<br/>";
	}

	public function f2()
	{
		echo 'Class : '.__CLASS__;
		echo "<br/>";
		echo "function : ".__FUNCTION__;
		echo "<br/>";
		echo "<br/>";
	}
}



$obj = new abc;

$obj->f1();
$obj->f2();
