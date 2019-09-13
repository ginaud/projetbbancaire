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
	
}

$sql = "SELECT idclient, nom, datenaissance FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idclient"]. " - Nom: " . $row["nom"]. " - Date de naissance: " . $row["datenaissance"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>