<?php

function asn($name,$log)
{
	if($log()){
		echo "$name:Ankit";
	}
}


asn("Name",function()
				{
					return false;
				});