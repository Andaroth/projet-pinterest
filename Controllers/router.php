<?php
  // Routeur en 2 lignes
  $page = (isset($_GET['page'])) ? $_GET['page'] : "gallery";
  $inPage = (file_exists(V.$page.".php")) ? V.$page.".php" : V."gallery.php" ;
  // Un switch pour changer le titre de la page
  switch ($page) {
    case 'admin': $pagetitle .= " - Page d'administration"; break;
    default: $pagetitle="Bienvenue sur ".$sitetitle." !"; break;
  }
  // Un switch pour indiquer l'action en cours dans le titre
  $action = (isset($_GET['action'])) ? $_GET['action'] : 1;
  switch ($action) {
    case 'register': $pagetitle .= " - S'enregister..."; break;
    case 'login': $pagetitle .= " - Se connecter..."; break;
  }
  // Un switch pour déclencher les constructeurs
  switch($action){
    case "login":
      if(empty($_POST["name"]){
        echo "<div id=\"errormsg\">Merci d'indiquer un Nom!</div>";
      }
      else if(empty($_POST["pass"]){
        echo "<div id=\"errormsg\">Merci d'indiquer un Mot de passe!</div>";
      }
      else {
        $construct = new Account($action); break;
      }
      break;
    case "register":
      if(empty($_POST['username']){
        echo "<div id=\"errormsg\">Merci d'indiquer un Pseudo!</div>";
      }
      else if(empty($_POST['mdp']){
        echo "<div id=\"errormsg\">Merci d'indiquer un Mot de passe!</div>";
      }
      else {
        $construct = new Account($action); break;
      }
    case "upload":
      $construct = new Image(); break;
    default: break;
  }

?>
