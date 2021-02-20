<?php
//DEvelopment connection
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname= "sparks_bank";

//Remote Database connetion
$servername = "remotemysql.com";
$username = "oHbxPZBFPY";
$password = "VWqlLvSsKJ";
$dbname= "oHbxPZBFPY";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>