<?php
  // auth to db
  $dbhost = "axelfiolle.be"; //chemin vers le serveur
  $dbname = "projet_pinterest"; //nom de la base de données
  $dbuser = "root_pinterest"; // nom utilisateur pour se connecter
  $dbpass = "pinterest"; // mot de passe pour se connecter

  // Connexion à la base de données.
	try {
		$bdd = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8',$dbuser,$dbpass);
	}
	catch(Exception $e) {
	  die('Erreur PDO : '.$e->getMessage());
	}

?>
