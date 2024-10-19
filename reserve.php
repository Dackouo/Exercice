<?php
$servername = "localhost";
$username = "root"; // Remplace par ton utilisateur
$password = ""; // Remplace par ton mot de passe
$dbname = "reservation";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    
    
die("Connection échouée: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nom = $_POST['nom'];
    $Email = $_POST['email'];
    $date_reservation = $_POST['date'];

    $sql = "INSERT INTO reservations (Nom, Email, date_reservation) VALUES ('$Nom', '$Email', '$date_reservation')";

    if ($conn->query($sql) === TRUE) {
        echo "Réservation réussie !";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>