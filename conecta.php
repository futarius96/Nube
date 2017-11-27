<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="nombrebd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
