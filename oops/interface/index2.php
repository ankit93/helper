<?php
#http://php.net/manual/en/language.oop5.interfaces.php
# Extendable Interfaces

interface template1
{
	public function f1();
}

interface template2 extends template1
{
	public function f2();
}

class abc implements template2
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


######################
#Example #3 Multiple interface inheritance
############
interface a
{
    public function foo();
}


interface b
{
    public function bar();
}


interface c extends a, b
{
    public function baz();
}


class d implements c
{
    public function foo()
    {
    }

    public function bar()
    {
    }

    public function baz()
    {
    }
}


##############
#Interfaces with constants
#############
interface a
{
    const b = 'Interface constant';
}

// Prints: Interface constant
echo a::b;


// This will however not work because it's not allowed to 
// override constants.
class b implements a
{
    const b = 'Class constant';
}
