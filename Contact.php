<?php 
include('database.php');
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['mail'];
$requete = $bdb->exec("INSERT into inscription(nom, prenom,) values ('$nom','$prenom','$mail')");

if ($requete == true) {
    echo "insertion effectuée avec succès";
} else {
    echo "insertion echouée";
}
 ?>