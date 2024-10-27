<?php
include('dbInscription.php'); // Assurez-vous que ce fichier établit la connexion

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $motdepasse = isset($_POST['mdp']) ? $_POST['mdp'] : '';
    $motdepasseconf = isset($_POST['mdpconf']) ? $_POST['mdpconf'] : '';

    // Vérification que les mots de passe correspondent
    if ($motdepasse !== $motdepasseconf) {
        echo "Les mots de passe ne correspondent pas.";
        exit(); // Arrête l'exécution si les mots de passe ne correspondent pas
    }

    // Préparer la requête d'insertion
    $requete = $bdb->prepare("INSERT INTO inscription(nom, prenom, motdepasse) VALUES (?, ?, ?)");
    
    // Exécuter la requête
    if ($requete->execute([$nom, $prenom, $motdepasse])) {
        echo "Insertion effectuée avec succès";
    } else {
        echo "Échec de l'insertion : ";
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}
?>
