<?php
include 'dbInscription.php'; // Assurez-vous que ce fichier établit la connexion
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "inscription";
// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $motdepasse = isset($_POST['mdp']) ? $_POST['mdp'] : '';
    $motdepasseconf = isset($_POST['mdpconf']) ? $_POST['mdpconf'] : '';
    // Préparer la requête d'insertion
    $sql = "INSERT INTO inscription (nom, prenom, motdepasse, motdepasseconf) VALUES ('$nom', '$prenom', '$motdepasse', '$motdepasseconf')";    
    // Exécuter la requête
    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie!";
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
