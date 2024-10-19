

<?php
$servername = "localhost";
$username = "root"; // ou votre nom d'utilisateur
$password = ""; // ou votre mot de passe
$dbname = "Reservation";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    
    $sql = "INSERT INTO reservation (Nom, Email, Destination, Date_reservation, Temp) VALUES ('$name', '$email', '$destination', '$date', '$time')";
    if ($conn->query($sql) === TRUE) {
        echo "Réservation réussie!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>