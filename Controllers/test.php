<?php
$dbhost = "localhost"; //chemin vers le serveur
$dbname = "projet_pinterest"; //nom de la base de données
$dbuser = "root_pinterest"; // nom utilisateur pour se connecter
$dbpass = "pinterest";

  try {
    $bdd = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8',$dbuser,$dbpass);
  }
  catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
  }

  $connect = mysql_connect("localhost/projet-pinterest", "name", "mail", "pass")
    if (!$connect) {
      or die("Impossible de se connecter : " .mysql_error());
    }
  echo "Connexion réussie";
  mysql_close($connect);

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



    mysql_connect('localhost', 'root', '');
    mysql_select_db('bdd');

    if ( (isset($_POST["name"]) &&
          (isset($_POST['mail']) &&
          (isset($_POST["pass"])
      )
      {
      $name = mysql_real_escape_string($_POST['name']);
      $mail = mysql_real_escape_string($_POST['mail']);
      $pass=mysql_real_escape_string($_POST['pass']);

      $result =mysql_query('update projet-pinterest set pseudo="'.$name.'", mail="'.$mail.'", pass="'.$pass.'"')or die("Requete pas comprise");
      }




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
 ?>
 <form class="formulaire" action="index.php?action=class.php" method="post">
   <!-- <h1>Connecte toi</h1> -->
    <label for="username">Veuillez indiquer votre Pseudo ou votre adresse email </label>
    <input type="text" name="username" id="username" placeholder="Votre pseudo ou email"><br/>

    <label for="mdp">Veuillez indiquer votre mot de passe</label>
    <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe"><br/>

    <input type="submit" name="button" value="Se Connecter">

 </form>
