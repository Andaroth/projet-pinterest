<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= "hello world" ?></title>
  <link href="https://fonts.googleapis.com/css?family=Nunito%7COpen+Sans" rel="stylesheet">
  <link rel="stylesheet" href="./Views/css/style.css" />
</head>
<body>
  <?php include V."header.php"; ?>
  <main>
    <?php include $inPage; ?>
  </main>
  <?php include V."jscript.php"; ?>
</body>
</html>
