<?php
include('dbConnexion.php'); // Assurez-vous que ce fichier établit la connexion

// Activer l'affichage des erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $motdepasse = isset($_POST['mdp']) ? $_POST['mdp'] : '';

    // Affichage de test (à retirer en production)
    echo "Nom : $nom, Prénom : $prenom, Mot de passe : $motdepasse <br>";

    // Préparer la requête d'insertion
    if (isset($bdb)) { // Vérifie que $bdb est défini
        $requete = $bdb->prepare("INSERT INTO connexion (nom, prenom, motdepasse) VALUES (?, ?, ?)");

        // Exécuter la requête et gérer le succès ou l'échec
        if ($requete->execute([$nom, $prenom, $motdepasse])) {
            // Redirection vers la page d'accueil après une insertion réussie
            header("Location: index.html");
            exit();
        } else {
            // Afficher l'erreur en cas d'échec d'insertion
            echo "Erreur SQL : ";
        }
    } else {
        echo "Erreur de connexion à la base de données.";
    }
} else {
    echo "Formulaire non soumis.";
}
 ?>