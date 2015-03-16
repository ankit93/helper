<?php

$inital = array(
				 array( 0, 0, 0 ),
  				 array( 0, 0, 0 ),
  				 array( 0, 0, 0 )
       			);

$a01 = 1;
$a10 = 2;
$a22 = 3;
$params = array('a01' => 1,'a10' => 2,'a22' => 3);

// assign value 
function initalAssignValue($params)
{

	for($i=0; $i<3; $i++)
	{
		for($j=0; $j<3; $j++)
		{
			$var ="params[0][1]";
			echo $$var;
			if(isset($$var))
			{
				$inital[$i][$j] = $$var;
			}
		}
	}
}

initalAssignValue($params);


function numValid($key = null)
{
	for($i=0;$i<3; $i++)
	{
		for($j=0; $j<3; $j++)
		{

		}
	}	
}

echo "<pre>";
print_r($inital);