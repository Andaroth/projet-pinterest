<?php

	class Register {
		function __construct() {

			if (  (isset($_POST["name"])) &&
					  (isset($_POST["mail"])) &&
						(isset($_POST["pass"]))
					)
			{
				$name = $_POST['name'];
				$mail = $_POST['mail'];
				$mdp = $_POST['pass'];
				$mdp = hash("sha256", htmlentities($_POST['pass']) ); //recupere le mdp de la table qui correspond au login du visiteur

				// $query = $bdd->prepare("INSERT INTO users (name, mail, pass) VALUES (".$username.",".$mail.",".$mdp.")"));
			}

		}

	}



	// $query -> execute([".$username.",".$mail.",".$mdp."]);
	// $recup = $query->fetchAll(PDO::FETCH_OBJ); //on recupere la liste des inscription
	// echo $query;


// Inscription sur le siteweb, verification adresse eamil : nico
  // class register{
  //   $username = $_POST["username"];
  //   $mail = $_POST["mail"];
  //   $mdp = $_POST["mdp"];
  //   $point = strpos($mail,".");
  //   $arobase = strpos($mail,"@");
	//
  //   if(empty($mail)){
  //     $erreur = "";
  //   } else if ($point==""){
  //     $erreur = "Entrez une adresse mail valide. (Il manque surement un .)";
  //   } else if ($arobase==""){
  //     $erreur = "Entrez une adresse mail valide. (Il manque surement un @)";
  //   } else {
  //     $erreur = "correct";
  //   }
 ?>
 <!-- <form class="formulaire" action="index.php?action=class.php" method="post">
   <!-- <h1>Connecte toi</h1>
    <label for="username">Veuillez indiquer votre Pseudo ou votre adresse email </label>
    <input type="text" name="username" id="username" placeholder="Votre pseudo ou email"><br/>

    <label for="mdp">Veuillez indiquer votre mot de passe</label>
    <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe"><br/>

    <input type="submit" name="button" value="Se Connecter">

 </form> -->
