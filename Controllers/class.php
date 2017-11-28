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

class Image {
	public function __construct() {
		// $imageid = isset($_GET["img"]) ? $_GET["img"] : false ;
		if(isset($_FILES["fileToUpload"]['tmp_name'])){
      $file = $_FILES["fileToUpload"];
      var_dump($file);
      $this->uploadImg($file);
    } elseif (true) {
			echo "aaaaa";
		}
	} // construct end
  private function uploadImg($file) {
    global $bdd;
    // if (isset( $_POST["fileTitle"] )) {
    //   $fileTitle = htmlspecialchars($_POST["fileTitle"]);
    //   $fileDescr = (isset($_POST["description"])) ? htmlspecialchars($_POST["description"]) : "";
    // } else { echo "<div id=\"errormsg\">Vous devez renseigner un titre !</div>"; die(); }
		$fileTitle = (isset($_POST["fileTitle"])) ? htmlspecialchars($_POST["fileTitle"]) : "Mon image";
		$fileDescr = (isset($_POST["description"])) ? htmlspecialchars($_POST["description"]) : "";
    $fileTmp = $file["tmp_name"];
    $fileName = htmlspecialchars($file["name"]);
    $filetype = $file["type"];
    $allow_ext = array("image/jpeg","image/png","image/gif");
    if (in_array($filetype,$allow_ext)){
      $fileUrl = UP.$fileName;
      echo "<br>url : ".$fileUrl;
      if (file_exists(UP.$fileName)) {
        echo "<div id=\"errormsg\">Un fichier de ce nom existe déjà !</div>";
      } else
      {
        try {
          $bdd->exec("INSERT INTO img (url, title, description) VALUES ('".$fileUrl."','".$fileTitle."','".$fileDescr."')");
        } catch(Exception $e){echo "erreur uploadimg: ".($e->getMessage());die();}
        move_uploaded_file($file['tmp_name'], UP.$fileName);
        echo '<img src="'.UP.$fileName.'" alt="preview" />';
        echo "<div id=\"passedmsg\">Votre fichier est uploadé !</div>";
        //Img::creerMin("images/".$img["name"],"images/min",$img["name"],215,112);
      }
    } else {
      echo "<div id=\"errormsg\">votre fichier n'est pas une image :(</div>";
    }
  }
 	public function getAllImg() {
		global $bdd;
		$req = $bdd->query("SELECT * FROM img LIMIT 100");
		foreach ($req as $thisQuery) { ?>
			<a class="grid-item" href="#<?= $thisQuery["id"] ?>">
	      <img src="<?= $thisQuery["url"] ?>" alt="road">
	      <h2 class="imagetitle hidden"><?= $thisQuery["title"] ?></h2>
	      <p class="imagedescr hidden"><?= $thisQuery["description"] ?></p>
	    </a>
		<?php }
	}
	private function getImgData($imageid,$data) {
		return $bdd->query('SELECT '.$data.' FROM img WHERE id ="'.$imageid.'"');
	} // getImgData end
	private function getImgCat($imageid) {

	} // getImgCat end
  private function delImg($imageid) {

  }
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
