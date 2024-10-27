<?php
define('DB_SERVER', "localhost");
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DATABASE', 'inscription');

$bdb = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);

try {
	$bdb=new PDO("mysql:host=localhost;dbname=inscription;charset=utf8",'root','');
} catch (Exception $e) {
	die("erreur de connexion".$e->getMessage());
}
?>
