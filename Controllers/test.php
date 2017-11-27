<?php
  $_FILES['nom']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
  $_FILES['nom']['size']     //La taille du fichier en octets.
  $_FILES['nom']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
  $_FILES['nom']['error']    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.
  $_FILES['nom']['type']


  if (!empty($_FILES)) {
      $img = $_FILES['img'];
      echo strtolower(substr($img['name'], -3));
      $allow_ext = array ("jpg", "png", "gif");
      if(in_array($ext, $allow_ext)){
      move_uploaded_file($img["tmp_name"], "./upload/".$img['name']);
  } else {
    $erreur = "Votre fichier n'est pas une image"
  }

  //taille du fichier
  $taille_maxi = 100000;
  $taille = filesize($_FILES["name"]["tmp_name"]);
  if($taille>$taille_maxi) {
    $erreur = "Le fichier est trop gros...";
  }

 ?>
 <?php
if (isset($erreur)) {
  echo $erreur;
}
  ?>

<form class="upload" action=".?page=test.php" method="post" enctype="multipart/form-data">
  Titre :<input type="text" name="title"><br/>
  Votre description :<textarea type="description" name="texte"></textarea><br/>
  <input type="hidden" name="MAX_FILE_SIZE" value="100000">
  Votre image :<input type="file" name="nom" value="Parcourir"><br/>
  <input type="submit" name="submit" value="Envoyer">
</form>


<!-- // $dbhost = "localhost"; //chemin vers le serveur
// $dbname = "projet_pinterest"; //nom de la base de données
// $dbuser = "root_pinterest"; // nom utilisateur pour se connecter
// $dbpass = "pinterest";
//
// class register {
//
//   public function __construct() {
//
//
//     try {
//       $bdd = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8',$dbuser,$dbpass);
//       $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//     }
//     catch(Exception $e) {
//       die('Erreur : '.$e->getMessage());
//     }
//   }
//
//   public function add($name, $mail, $pass) {
//     $req = this->bdd->prepare("INSERT INTO users(name, mail, pass) VALUES(?,?,?)");
//     $req ->execute([$name, $mail, $pass]);

 -->


<!--
  // $connect = mysql_connect("localhost/projet-pinterest", "name", "mail", "pass")
  //   if (!=$connect) {
  //     die("Impossible de se connecter : " .mysql_error());
  //   } else {
  //     echo "Connexion réussie";
  //   }
  // mysql_close($connect);

  // mysql_connect => ouvrir une connexion à un serveur mySQL





 // inscription test
  // class register{
  //   function __construct() {
  //
  //     if (  (isset($_POST["name"])) &&
  //           (isset($_POST["mail"])) &&
  //           (isset($_POST["pass"]))
  //         )
  //     {
  //       $name = $_POST['name'];
  //       $mail = $_POST['mail'];
  //       $mdp = $_POST['pass'];
  //       $mdp = hash("sha256", htmlentities($_POST['pass']) ); //recupere le mdp de la table qui correspond au login du visiteur
  //
  //       $sql= "SELECT * FROM users WHERE name='".$name." AND mail=".$name"";
  //     }
  //   }
  // }



    // mysql_connect('localhost', 'root', '');
    // mysql_select_db('bdd');
    //
    // if ( (isset($_POST["name"]) &&
    //       (isset($_POST['mail']) &&
    //       (isset($_POST["pass"])
    //   )
    //   {
    //   $name = mysql_real_escape_string($_POST['name']);
    //   $mail = mysql_real_escape_string($_POST['mail']);
    //   $pass=mysql_real_escape_string($_POST['pass']);
    //
    //   $result =mysql_query('update projet-pinterest set pseudo="'.$name.'", mail="'.$mail.'", pass="'.$pass.'"')or die("Requete pas comprise");
    //   }
    //
    //


  // $req =$bdd->prepare("SELECT * FROM users WHERE mail= :mail AND pass= :pass");
  // $req->execute(array(
  //   'name'=>$name,
  //   'mail'=>$mail,
  //   'pass'=>$pass
  // ));
  // $resultat = $req->fetchAll();


// $req = $bdd->prepare('INSERT INTO users(id, name, mail, date, admin) VALUES(:id, :name, :mail, :date, :admin)');
// $req->execute(array(
//   'id'=> $id;
//   'name'=> $name;
//   'mail'=> $mail;
//   'date'=>$date;
//   'admin'=> $admin;
// 	));
//
// echo 'Tu es connecté!';

// $req = $bdd->prepare('INSERT INTO
//    (username, mdp) VALUES(?, ?)');
// $req->execute(array($_POST['username'], $_POST['mdp']));




// class login {
  // $username= $_POST["username"];
  // $mdp= $_POST["mdp"];

  // if ($pseudo=="")  {
  //   if ($mdp=="") {
  //   echo "correct";
  // } else {
  //     echo "incorrect";
  //   }
  // }





















  // class register{
  // 	function __construct() {
  //
  // 		if (  (isset($_POST["name"])) &&
  // 					(isset($_POST["mail"])) &&
  // 					(isset($_POST["pass"]))
  // 				)
  // 		{
  // 			$name = $_POST['name'];
  // 			$mail = $_POST['mail'];
  // 			$mdp = $_POST['pass'];
  // 			$mdp = hash("sha256", htmlentities($_POST['pass']) ); //recupere le mdp de la table qui correspond au login du visiteur
  //
  // 			$sql= "SELECT * FROM users WHERE name='".$name." AND mail=".$name"";
  // 		}
  // 	}
  // }
  // class db {
  //
  // 	public function __construct()
  // 	{
  // 		try {
  // 	    $bdd = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8',$dbuser,$dbpass);
  // 	  }
  // 	  catch(Exception $e) {
  // 	    die('Erreur : '.$e->getMessage());
  // 	  }
  // 	}
  //
  // 	public function signup($name, $pass) {
  // 		$req = $bdd->prepare("SELECT * FROM users WHERE name = (?)");
  // 		$req->execute([$name]);
  // 		if ($req->rowcount()==1) {
  //
  // 		}
  // 	}
  // }





  // class Register {
  // 	function __construct() {
  // 		$machin=mysql_connect($dbhost, $dbuser, $dbpass);
  // 		mysql_select_db($bdd);
  //
  // 		if (!=$machin) {
  // 			die("connexion impossible:" . mysql_error());
  //
  // 		}

  // 		$connect = mysql_connect("localhost/projet-pinterest", "name", "mail", "pass")
  // 			if (! $connect) {
  // 				die("Impossible de se connecter : " .mysql_error());
  // 			} else {
  // 				echo "Connexion réussie";
  // 			}
  // 		mysql_close($connect);
  //
  //
  // 	// 	if ( (isset($_POST["name"]) &&
  // 	// 		(isset($_POST['mail']) &&
  // 	// 		(isset($_POST["pass"])
  // 	// )
  // 	// {
  // 	// $name = mysql_real_escape_string($_POST['name']);
  // 	// $mail = mysql_real_escape_string($_POST['mail']);
  // 	// $pass=mysql_real_escape_string($_POST['pass']);
  // 	//
  // 	// $result =mysql_query('update projet-pinterest set pseudo="'.$name.'", mail="'.$mail.'", pass="'.$pass.'"')or die("Requete pas comprise");
  // 	// }

  // 	}
  // }
  // $machin = new Register;
  // $machin-> construct();



  	// class Register {
  	// 	function __construct() {
  	//
  	// 		if (  (isset($_POST["name"])) &&
  	// 				  (isset($_POST["mail"])) &&
  	// 					(isset($_POST["pass"]))
  	// 				)
  	// 		{
  	// 			$name = $_POST['name'];
  	// 			$mail = $_POST['mail'];
  	// 			$mdp = $_POST['pass'];
  	// 			$mdp = hash("sha256", htmlentities($_POST['pass']) ); //recupere le mdp de la table qui correspond au login du visiteur
  	// 			$point = strpos($mail,".");
  	// 	    $arobase = strpos($mail,"@");
  	// 		}
  	// 			if (($_POST['name'] !="") && ($_POST['mail'] !="") && ($_POST['pass'] !=""))
  	// 	    //         {
  	// 	    //           if (isAvailable($_POST['name'])==true || isAvailable($_POST['mail'])==true)
  	// 	    //           { echo "correct";
  	// 			// 						else {
  	// 			// 							echo "incorrect";
  	// 			// 						}
  	//
  	// 	    // if(empty($mail)){
  	// 	    //   $erreur = "";
  	// 	    // } else if ($point==""){
  	// 	    //   $erreur = "Entrez une adresse mail valide. (Il manque surement un .)";
  	// 	    // } else if ($arobase==""){
  	// 	    //   $erreur = "Entrez une adresse mail valide. (Il manque surement un @)";
  	// 	    // } else {
  	// 	    //   $erreur = "correct";
  	// 	    // }
  	// 			// $query = $bdd->prepare("INSERT INTO users (name, mail, pass) VALUES (".$username.",".$mail.",".$mdp.")"));
  	//
  	// 		}
  	//
  	// 	}
  	//
  	// }



  	// $connect = mysql_connect("localhost/projet-pinterest", "name", "mail", "pass")
  	// 	if (!$connect) {
  	// 		or die("Impossible de se connecter : " .mysql_error());
  	// 	}
  	// echo "Connexion réussie";
  	// mysql_close($connect);

  	// $query -> execute([".$username.",".$mail.",".$mdp."]);
  	// $recup = $query->fetchAll(PDO::FETCH_OBJ); //on recupere la liste des inscription
  	// echo $query;


  // Inscription sur le siteweb, verification adresse eamil : nico
    class register{
      $username = $_POST["username"];
      $mail = $_POST["mail"];
      $mdp = $_POST["mdp"];
      $point = strpos($mail,".");
      $arobase = strpos($mail,"@");

      if(empty($mail)){
        $erreur = "";
      } else if ($point==""){
        $erreur = "Entrez une adresse mail valide. (Il manque surement un .)";
      } else if ($arobase==""){
        $erreur = "Entrez une adresse mail valide. (Il manque surement un @)";
      } else {
        $erreur = "correct";
      }
 ?>
 <form class="formulaire" action="index.php?action=class.php" method="post">
   <!<h1>Connecte toi</h1> -->
    <!-- <label for="username">Veuillez indiquer votre Pseudo ou votre adresse email </label>
    <input type="text" name="username" id="username" placeholder="Votre pseudo ou email"><br/>

    <label for="mdp">Veuillez indiquer votre mot de passe</label>
    <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe"><br/>

    <input type="submit" name="button" value="Se Connecter">

 </form> -->
