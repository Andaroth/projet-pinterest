<?php
  // auth to db
  $dbhost = "ec2-46-137-174-67.eu-west-1.compute.amazonaws.com"; //chemin vers le serveur
  $dbname = "d14ccnf0ha0ble"; //nom de la base de données
  $dbuser = "ynwyizvjfafzwu"; // nom utilisateur pour se connecter
  $dbpass = "b47e04aac67ae3fd247fd2642580ce00c42a7586de1637dd9a7b048a1099b2b5"; // mot de passe pour se connecter

  // Connexion à la base de données.
	try {
		$bdd = new PDO('pgsql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
	}
	catch(Exception $e) {
	  die('Erreur PDO : '.$e->getMessage());
	}

?>
