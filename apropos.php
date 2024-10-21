<?php
$host = 'localhost';
$db = 'mon_site';
$user = 'root'; // Changez si nécessaire
$pass = ''; // Changez si nécessaire

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM informations WHERE id = 1"; // ID de l'information
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(['titre' => 'Erreur', 'contenu' => 'Aucune information trouvée.']);
}

$conn->close();
?>