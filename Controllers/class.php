<?php

class Register {
		public $bdd;

	function __construct($bdd) {
		if (  (isset($_POST["name"])) &&
					(isset($_POST["mail"])) &&
					(isset($_POST["pass"]))
				)
		{
			$name = $_POST['name'];
			$mail = $_POST['mail'];
			$mdp = $_POST['pass'];
			$mdp = hash("sha256", htmlentities($_POST['pass']) ); //recupere le mdp de la table qui correspond au login du visiteur

			// $query = $bdd->exec("INSERT INTO users (name, mail, pass) VALUES (".$username.",".$mail.",".$mdp.")"));
		}

	}
	public function Signup($name, $mail, $pass)
	{
		$req = $this->bdd->prepare("SELECT * FROM users WHERE name = (?)");
		$req->execute([$name]);
		if($req->rowCount() == 1) {
			return false;
		}
		$req = $this->bdd->prepare("INSERT INTO users (name, mail, pass) VALUES (?,?,?)");
		$req->execute([$name, $mail, $pass]);
			return true;
	}

} // class Register end

class LoadImage {
	function __construct() {
		$imageid = isset($_GET["img"]) ? $_GET["img"] : false ;
		if ($imageid) {
			$imgurl = getImgData($imageid,"url");
			echo "a:".$imgurl;
		}// if $imageid end
	} // construct end
	private function getImgData($imageid,$data) {
		return "get";
		// return $bdd->exec('SELECT '.$data.' FROM img WHERE id ="'.$imageid.'"');
	} // getImgData end
	private function getImgCat($imageid) {

	} // getImgCat end
} // class LoadImage end



//   public function add($name, $mail, $pass) {
// 		checkmail();
// 		$req = this->bdd->prepare("INSERT INTO users(name, mail, pass) VALUES(?,?,?)");
//     $req ->execute([$name, $mail, $pass]);
//   }
//
// 	public function checkmail($mail) {
// 		if(empty($mail)){
// 			$erreur = "";
// 		} else if ($point==""){
// 			$erreur = "Entrez une adresse mail valide. (Il manque surement un .)";
// 		} else if ($arobase==""){
// 			$erreur = "Entrez une adresse mail valide. (Il manque surement un @)";
// 		} else {
// 			$erreur = "correct";
// 		}
// 	}
//
// }
// $machin = new register($name, $mail, $pass);
// $machin->add($name, $mail, $pass);
// var_dump($machin);

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
