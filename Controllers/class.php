<?php
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
  }
  
class login {
  $username= $_POST["username"];
  $mdp= $_POST["mdp"];

  // if ($pseudo=="")  {
  //   if ($mdp=="") {
  //   echo "correct";
  // } else {
  //     echo "incorrect";
  //   }
  // }
}


 ?>
