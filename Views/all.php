<!DOCTYPE html> 
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?= $pagetitle ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Nunito%7COpen+Sans" rel="stylesheet">
  <link rel="stylesheet" href="./Views/css/style.css" />
  <link rel="stylesheet" media="screen and (max-width: 400px)" href="./Views/css/phone.css"/>
</head>
<body>
  <?php
    include V."header.php";
    include $inPage;
    include V."modal.register.php";
    include V."modal.onepicture.php";
    include V."uploadform.php";
    include V."jscript.php";
  ?>
</body>
</html>