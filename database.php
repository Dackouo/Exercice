<?php
define('DB_SERVER', "localhost");
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DATABASE', 'inscription');

$bdb = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);

if(!$bdb){
    die("Connexion echouée!");
}else{
    die('Connexion Réussie');
}

?>