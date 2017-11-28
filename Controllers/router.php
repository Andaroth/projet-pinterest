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
  switch($action) {
    case "login"||"register": 
      $construct = new Account($action); break;
    case "upload":
      $construct = new Image(); break;
    default: break;
  }
?>