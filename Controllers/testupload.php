<?php
if(!empty($_FILES)){
  print_r($_FILES);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form action="testupload.php" method="post" enctype="multipart/form-data">
  <input type="file" name="img"/>
  <input type="submit" name="envoyer"/>
</form>
  </body>
</html>
