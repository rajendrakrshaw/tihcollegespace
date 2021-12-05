<?php
$host = 'localhost';
$username = 'root';
$pass = '';
$db = 'tihcollegespace';

// $db = new mysqli($host,$username,$pass,$db);

$conn = mysqli_connect($host,$username,$pass,$db);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
  }

?>