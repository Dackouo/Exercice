<?php
include('database.php');
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$motdepasse = $_POST['mdp'];
$confirmPassword = $_POST['mdpconf'];
$requete = $bdb->exec("INSERT into inscription(nom, prenom, motdepasse, confirmPassword) values ('$nom','$prenom','$mdp', '$mdpconf')");

if ($requete == true) {
    echo "insertion effectuée avec succès";
} else {
    echo "insertion echouée";
}
?>