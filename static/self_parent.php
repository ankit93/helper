<?php
class test
{
private static $no_of_call = 0; 
public function __construct()
{
self::$no_of_call = self::$no_of_call + 1;
echo "No of time object of the class created is:  ". self::$no_of_call; 
}
}
$objT = new test(); // Prints No of time object of the class created is 1
$objT2 = new test(); //Prints No of time object of the class created is 2

?>