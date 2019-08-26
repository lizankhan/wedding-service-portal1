<?php
$conn_error ='Could not connect';
$servername = "localhost";
$username = "root";
$password = "";
$dbname="wedding";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

//$mysql_db ='wedding';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//mysqul_select_db($mysql_db) or die($conn_error) ;
//echo "Connected successfully";
?>
