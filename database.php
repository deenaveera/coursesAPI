<?php
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'interview';
$tablename = 'courses';

$connection = mysqli_connect($hostname, $username, $password, $dbname) or die('db not connect');

?>