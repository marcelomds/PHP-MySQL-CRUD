<?php

session_start();

$hostname = 'localhost';
$user = 'root';
$password = '';
$dbName = 'crud_mysql';

$conn = mysqli_connect($hostname, $user, $password, $dbName);

?>
