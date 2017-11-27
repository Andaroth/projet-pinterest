<?php

class Account {
	// global $bdd;

	public function __construct() {
		// extract($_POST);
		// extract($_GET);
		switch($_GET["action"]) {
			case 'register':
					$name = $_POST['name'];
					$mail = $_POST['mail'];
					$pass = $_POST['pass'];
					$pass = hash("sha256", htmlentities($_POST['pass']) ); // hash le password
					$this->Signup($name,$mail,$pass);
				break;
			case 'login':
				$name = $_POST["username"];
				$pass = hash("sha256", htmlentities($_POST['mdp']) );
				$this->Login($name,$pass);
				break;
			default: break;
			// $this->$bdd = new PDO('pgsql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpass);
		} // switch end
	} // contruct end

	private function Signup($name, $mail, $pass)
	{
		global $bdd;
		$req = $bdd->query("SELECT COUNT(name) AS count FROM users WHERE name = '".$name."'");
		$row = $req->fetch();
		$test = $row['count'];
		if($test == 0) {
			try {
				$bdd->exec("INSERT INTO users (name, mail, pass) VALUES ('".$name."','".$mail."','".$pass."')");
				echo "<div id=\"passedmsg\">Vous êtes bien enregistré</div>";
			} catch(Exception $e){echo "erreur signup: ".($e->getMessage());die();}
		} else  {
			echo "<div id=\"errormsg\">Ce nom d'utilisateur existe deja !</div>";
		} // if end
	} // func signup end

	private function Login($name, $pass)
	{
		global $bdd;
		$req = $bdd->query("SELECT COUNT(*) AS count FROM users WHERE name = '".$name."' AND pass ='".$pass."'");
		$row = $req->fetch();
		$test = $row['count'];
		if($test==1)
		{
				$_SESSION ['login'] = true;
				$_SESSION ['name'] = $name;
				echo "<div id=\"passedmsg\">Vous êtes bien connecté</div>";
		} else {
			echo "<div id=\"errormsg\">Vous avez entré de mauvais identifiants !</div>";
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
