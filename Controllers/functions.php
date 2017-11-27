<?php
  if (isset($_GET["action"])) {
    $action = new Account;
  }

?>
<?php
  // $_FILES['nom']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
  // $_FILES['nom']['size']     //La taille du fichier en octets.
  // $_FILES['nom']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
  // $_FILES['nom']['error']    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.

  if (!empty($_FILES)) {
      $img = $_FILES['img'];
      move_uploaded_file($img["tmp_name"], "/var/www/html/projet-pinterest/upload/".$img['name']);
  }









 ?>

<form class="upload" action=".?action=functions.php" method="post" enctype="multipart/form-data">
  Titre :<input type="text" name="title"><br/>
  Votre description :<textarea type="description" name="texte"></textarea><br/>
  <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
  Votre image :<input type="file" name="nom" value="Parcourir"><br/>
  <input type="submit" name="submit" value="Envoyer">
</form>
