<?php
  if (isset($_GET["action"])) {
    $action = new Account;
  }

  // $_FILES['nom']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
  // $_FILES['nom']['size']     //La taille du fichier en octets.
  // $_FILES['nom']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
  // $_FILES['nom']['error']    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.
  // $_FILES['nom']['type']

//   if (!empty($_FILES)) {
//     // require("imgClass.php");
//       $img = $_FILES['img'];
//       echo strtolower(substr($img['name'], -3));
//       $allow_ext = array ("jpg", "png", "gif");
//       if(in_array($ext, $allow_ext)){
//       move_uploaded_file($img["tmp_name"], "./upload/".$img['name']);
//   } else {
//     $erreur = "Votre fichier n'est pas une image";
//   }
// }
  //taille du fichier
  // $taille_maxi = 100000;
  // $taille = filesize($_FILES["name"]["tmp_name"]);
  // if($taille>$taille_maxi) {
  //   $erreur = "Le fichier est trop gros...";
  // }

 ?>
 <?php
// if (isset($erreur)) {
//   echo $erreur;
// }
  ?>
<!--<form class="upload" action=".?action=functions.php" method="post" enctype="multipart/form-data">
  Titre :<input type="text" name="title"><br/>
  Votre description :<textarea type="description" name="texte"></textarea><br/>
  <input type="hidden" name="MAX_FILE_SIZE" value="100000">
  Votre image :<input type="file" name="nom" value="Parcourir"><br/>
  <input type="submit" name="submit" value="Envoyer">
</form>-->
