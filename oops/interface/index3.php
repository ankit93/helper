<?php

# http://php.net/manual/en/language.oop5.interfaces.php

interface logger{

	public function execute($message);

}



class file implements logger{

	public function execute($message)
	{
 		echo "message show  file class :".$message;
	} 
}

class database implements logger{

	public function execute($message)
	{
		echo "message show database class".$message;
	}

}

class c
{
	protected $file;

	function __construct(logger $file)
	{
		$this->file = $file;
	}

	public function show()
	{
		$this->file->execute("Jone Dev");
	}
}


$obj = new c(new file);

$obj->show();


