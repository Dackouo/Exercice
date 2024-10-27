<?php
define('DB_SERVER', "localhost");
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DATABASE', 'connexion');

$bdb = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);

if($bdb->connect_error){
    die("Connexion echouée! : " . $bdb->connect_error);
}else{
    die('Connexion réussie');
}

?>
