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
      // $fileToUpload = $_POST["fileToUpload"];
      // $fileTitle = $_POST["fileTitle"];
      // $description = $_POST["description"];
      // $checkbox = $_POST["nature", "voyage", "dessin", "animaux", "design"];
      if (empty($_POST["fileToUpload"])) {
        echo "<div id=\"errormsg\">Veuillez mettre une image, svp</div>";
      }
      else if (empty($_POST["fileTitle"])) {
        echo "<div id=\"errormsg\">Veuillez indiquer un titre, svp.</div>";
      }
      // else if (empty($description)) {
      //     $erreur = "Veuillez écrire une description svp";
      //   }
      else if (empty($_POST["checkbox"])){
        foreach ($checkbox as $value) {
          echo "<div id=\"errormsg\">Veuillez cocher une catégorie</div>";
        }
      }

      // $checkbox = array($_POST["nature"], $_POST["voyage"], $_POST["dessin"], $_POST["animaux"], $_POST["design"]); //and so on
      // for($i = 0; $i < count($checkbox); $i++){
      //   if($checkbox[$i] != 1)
      //   {
      //     $checkbox[$i] = 0;
      //   }
      // }
      // else if ($("#nature, #voyage, #dessin, #animaux, #design") .is(":checked")) {
      else {
          $construct = new Image(); break;
      }
    default: break;
  }
?>
