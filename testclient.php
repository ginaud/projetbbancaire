<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestionbancaire";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
if(isset($_GET['id']))
{
  $query = SELECT * FROM client WHERE idclient = ".$_GET['idclient'];

}
else  $query = SELECT * FROM client WHERE id = 1";

?<>