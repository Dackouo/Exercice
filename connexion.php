<?php
include('dbConnexion.php'); // Assurez-vous que ce fichier établit la connexion
$servername = "localhost";
$username = "root"; // ou votre nom d'utilisateur
$password = ""; // ou votre mot de passe
$dbname = "connexion";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $motdepasse = $_POST['mdp'];
    // Préparer la requête d'insertion
    $sql = "INSERT INTO connexion (nom, prenom, motdepasse) VALUES ('$nom', '$prenom', '$motdepasse')";

        // Exécuter la requête et gérer le succès ou l'échec
        if ($conn->query($sql) === TRUE) {
            echo "Connexion réussie!";
        } else {
            // Afficher l'erreur en cas d'échec d'insertion
            echo "Erreur SQL : ";
        }
} else {
    echo "Formulaire non soumis.";
}
 ?>