<?php
 require_once "header.php";

//  http://de3.php.net/manual/en/pdostatement.execute.php
 echo "<pre>";
 
$result = $pdo->query("SELECT * FROM  contact");
 echo "<pre>";
// print_r($row = $result->fetchAll());
 
     
$st=$pdo->prepare('
   SELECT * FROM  contact
    WHERE Ename = :username');
$st->execute(array(':username' => 'abcd'));
//print_r($st->fetch());

//PDO::FETCH_ASSOC

$st=$pdo->prepare('
   SELECT * FROM  contact
    WHERE Ename = ?');
echo $username=$pdo->quote($_GET['username']);	
$st->execute(array($username));
  
print_r($st->fetch());	


$st=$pdo->prepare("
					  INSERT INTO `contact` 
					         (`Eregard`, `Ename`, `Eemail`, `Ephone`, `Ecomments`, `Eid`, `date`) 
					  VALUES (?,?,?,?,?,?,?)
                 ");
$st->execute(array(NULL,'abcde','a@gmail.com','2323','asdd s d ds ',NULL,NULL ));
  
   echo $pdo->lastInsertId();

//  PDO::exec() returns the number of rows that were modified or deleted by the SQL statement you issued. If no rows were affected, PDO::exec() returns 0.

	/* Delete all rows from the FRUIT table */
	//$count = $dbh->exec("DELETE FROM fruit WHERE colour = 'red'");
	
	/* Return number of rows that were deleted */
	//print("Deleted $count rows.\n");

function getFruit($conn) {
    $sql = 'SELECT  FROM contact ORDER BY name';
    foreach ($conn->query($sql) as $row) {
        print $row['name'] . "\t";
        print $row['color'] . "\t";
        print $row['calories'] . "\n";
    }
} 



