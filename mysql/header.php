<?php
 require_once "inc/config.php";
function __autoload($class_name) {
   require_once "inc/".$class_name . '.php';
}