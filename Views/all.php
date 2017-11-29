niktam airline<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?= $pagetitle ?></title>
  <link href="https://fonts.googleapis.com/css?family=Nunito%7COpen+Sans" rel="stylesheet">
  <link rel="stylesheet" href="./Views/css/style.css" />
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
