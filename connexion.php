<?php
include('database.php');
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$password=$_POST['mdp'];

$requete = $bdb->exec("INSERT into connexion(nom, prenom, mdp) values ('$nom','$prenom','$mdp')");

 ?>
