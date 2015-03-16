<?php

include 'name/parents.php'; 

use name\parents\parents;

class child extends parents{


	public static function __callStatic($mathod,$parameters)
	{
		echo $mathod;
		echo "<br/>";
		print_r($parameters);

	}

	public static  function childOutputs() {
	    # Output HTML page
	    $obj = new parents;

	    echo $obj->output();

	    echo 'child !<br/>'.__FUNCTION__.':::NAMESPACE:::'.__NAMESPACE__.'::CLASS::'.__CLASS__;
	}
}


child::childOutputs();

