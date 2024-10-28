<?php 
include('database.php');
$nom = $_POST['nom'];

$email = $_POST['mail'];
$message= $_POST['message'];
$envoie= $_POST['envoie'];
$requete = $bdb->exec("INSERT into inscription(nom,mail, message,envoie) values ('$nom','$message','$mail','$envoie')");

if ($requete == true) {
    echo "insertion effectuée avec succès";
} else {
    echo "insertion echouée";
}
 ?>