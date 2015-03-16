<?php
class test
{
	public static $a = 5;//Static variable

	public static function vnt()
	{
		return self::$a++;
	} 
}


$obj = new test();

echo $obj->vnt();