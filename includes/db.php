<?php
// NOTE: connection to the database
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'loginsystem2';


$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName); //to activate the connection

if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
 ?>
