<?php
 require_once "header.php";

//  http://de3.php.net/manual/en/pdostatement.execute.php
 echo "<pre>";

//$mysqli = new mysqli("us-cdbr-east-06.cleardb.net", "b923e5879b2598", "c48c0cf4", "heroku_5035f62fbd8a42c");
$mysqli = new mysqli("localhost", "root", "vnt", "victorynet");
/* check connection */
if ($mysqli->connect_errno) {
    die( $mysqli->connect_error);
}

$query = "SELECT * FROM portfolioinfo";
$result = $mysqli->query($query);

/* numeric array */
$row = $result->fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);

/* associative array */
print_r($row = $result->fetch_array(MYSQLI_ASSOC));


/* associative and numeric array */
$row = $result->fetch_array(MYSQLI_BOTH);
printf ("%s (%s)\n", $row[0], $row["CountryCode"]);

/* free result set */
$result->free();

/* close connection */
$mysqli->close();


/*
$query = $mysqli->prepare('
    SELECT * FROM users
    WHERE username = ?');
   
 print_r($query );
 
$params= array("username"=>"abcde");

$query->bind_param($params["username"]);
print_r($mysqli->execute());*/
