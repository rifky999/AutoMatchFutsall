<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ligabola";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $Berhasil = 1;
  }
catch(PDOException $e)
 {
 echo "Error: " . $e->getMessage();
 }
 ?>
