<?php

// PDO
$pdo = new PDO("mysql:host=localhost;dbname=evos;charset=utf8", 'root', 'vnt');
// mysqli, procedural way
//$mysqli = mysqli_connect('localhost','root','vnt','evos');
 
 // mysqli, object oriented way
  $mysqli = new mysqli('localhost','root','vnt','evos');

?>