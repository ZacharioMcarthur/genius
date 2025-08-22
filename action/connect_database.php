<?php
$servername = "localhost";
$username = "root";
$password = "";
$my_database = "g2d";

// Connexion à MySQL
$conn = new mysqli($servername, $username, $password, $my_database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
?>
