<?php
if(!empty($_FILES)){
  $img=$_FILES['img'];
  move_uploaded_file($img['tmp_name'],"upload/".$img['tmp_name']);
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form action="testupload.php" method="post">
  <input type="file" name="img">
  <input type="submit" name="envoyer">
</form>
  </body>
</html>
