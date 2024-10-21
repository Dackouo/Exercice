<?php
include('database.php');
//Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $motdepasse = $_POST['mdp'];

    $requete = $bdb->exec("INSERT into connexion(nom, prenom, motdepasse) values ('$nom','$prenom','$mdp')");
    //Affichage d'un message de succès ou d'échec
    if ($requete == true) {
        echo "insertion effectuée avec succès";
    }
}else{
    echo "insertion echouée";
}
 ?>