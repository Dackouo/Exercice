<?php
$servername = "localhost";
$username = "root"; // Change si nécessaire
$password = ""; // Change si nécessaire
$dbname = "ma_base_de_donnees"; // Assure-toi que ta base de données est créée

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection échouée: " . $conn->connect_error);
}
?>