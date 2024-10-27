<?php
$servername = "localhost";
$username = "root"; // ou votre nom d'utilisateur
$password = ""; // ou votre mot de passe
$dbname = "Reservation";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?> 