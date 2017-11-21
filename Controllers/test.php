<?php

  try {
    $bdd = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8',$dbuser,$dbpass);
  }
  catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
  }
  $req =$bdd->prepare("SELECT name FROM users WHERE mail= :mail AND pass= :pass");
  $req->execute(array(
    'name'=>$name,
    'mail'=>$mail,
    'pass'=>$pass,
  ));
  $resultat = $req->fetchAll();











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
