<?php
if(!empty($_FILES)){
  $img = $_FILES['img'];
  strtolower(substr($img['name'],-3));
  $allow_ext : array("jpg","png","gif");
  if (in_array($ext,$allow_ext)){
    move_uploaded_file($img['tmp_name'], "upload/".$img['name']);
    Img::creerMin("images/".$img["name"],"images/min",$img["name"],215,112);
  } else {
    $error = "votre fichier n'est pas une image";
  }
}
?>
<?php
if(isset($error)){
  echo $error;
}
?>
<form  action="index.php" method="post" enctype="multipart/form-data">
<input type="file" name="img"/>
<input type="submit" name="envoyer"/>
</form>
