<?php

require_once 'header.php' ;

echo '<pre>';
$obj=new aDate;

$df1 = $obj->diffDateTime('8:35:6', '8:55:34');          // difference between 2 times (in hours:min:sec)
print_r($df1);


$df2 =  $obj->diffDateTime('07/08/2014 11:10:00', 'now');      // difference between a previous date-time and now
print_r($df2);

$df3 = $obj-> diffDateTime('25 August 2012 14:10:00', '18-09-2012 08:25:00');     // difference between 2 date-times
print_r($df3);

$df4 =  $obj->diffDateTime(1348012438, 1348029429);      // difference between 2 date-time, with Timestamp
print_r($df4);


echo  "<br>";
echo  date("Y/m/d") . "<br>";   //  2014/07/08
echo  date("Y.m.d") . "<br>";   //  2014.07.08
echo  date("Y-m-d") . "<br>";   //  2014-07-08
echo   date("Y")  . "<br>";     //  2014

date_default_timezone_set("America/New_York");
echo date_default_timezone_get(). "<br>" ;

// view special time zone 
// http://www.php.net/manual/en/timezones.php

echo  date("h:i:sa")  . "<br>";  // 01:58:30pm

//mktime(hour,minute,second,month,day,year)

$d=mktime(19, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br>" ;  // 2014-08-12 07:14:54pm

echo "Created date is " . date("y-M-D h:i:sa", $d);  // 14-Aug-Tue  07:14:54pm

//  http://www.php.net/manual/en/datetime.formats.compound.php

//  Y   //   2014
//  y  //    14
//  m  //   08
//  M  //   Aug
//  d  //   08
//  D  //   Tue
 



//   Create a Date From a String With PHP strtotime()
	$d=strtotime("tomorrow");
	echo date("Y-m-d h:i:sa", $d) . "<br>";  //  2014-07-09 12:00:00am
	
	$d=strtotime("next Saturday");
	echo date("Y-m-d h:i:sa", $d) . "<br>";  //  2014-07-12 12:00:00am
	
	$d=strtotime("+3 Months");
	echo date("Y-m-d h:i:sa", $d) . "<br>";  //  2014-10-08 05:41:47am
	
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks",$startdate);

while ($startdate <  $enddate) {
   echo date("M d", $startdate),"<br>";
   $startdate = strtotime("+1 week", $startdate);
}


// more  about  http://www.w3schools.com/php/php_ref_date.asp

	

