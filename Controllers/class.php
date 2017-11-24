<?php

class account{
	// global $bdd;

	public function __construct() {
		// extract($_POST);
		// extract($_GET);
		if (  (isset($_POST["name"])) &&
					(isset($_POST["mail"])) &&
					(isset($_POST["pass"]))
				)
		{
			$name = $_POST['name'];
			$mail = $_POST['mail'];
			$pass = $_POST['pass'];
			$pass = hash("sha256", htmlentities($_POST['pass']) ); // hash le password
			echo "passed";
			$this->Signup($name,$mail,$pass);
		} else { echo "not set"; }
	}

	private function Signup($name, $mail, $pass)
	{
		global $bdd;
		$req = $bdd->exec("SELECT * FROM users WHERE name = '".$name."'");
		if(($req->rowCount()) > 0) {
			return false;
		} else {
			try {
				$bdd->exec("INSERT INTO users (name, mail, pass) VALUES (".$name.",".$mail.",".$pass.")");
				return true;
			} catch(Exception $e){echo "erreur signup: ".($e->getMessage());die();}

		} // else end
	} // func signup end

	//$call = new __construct(); //je sais pas trop comment on appelle la fnc construct mais j'pense que c'est ça qui bug..

	private function Login($name, $pass)
	{
		global $bdd;
		$req = $bdd->exec("SELECT * FROM users WHERE name = '".$name."' AND pass ='".$pass."'");
		$user_bdd= $req->fetch();

		if($req->rowCount()==1)
		{
				$_SESSION ['login'] = true;
				$_SESSION ['name'] = $user_bdd['name'];
				$_SESSION ['pass'] = $user_bdd['pass'];
				return true;
		} else {
			return false;
		}

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
