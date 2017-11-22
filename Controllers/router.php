<?php
  $page= isset($_GET['page']) ? htmlentities($_GET['page']) : 'main';
  switch ($page) {
    case 'admin':
    case 'login':
    case 'register':
      $load = V.$page.".php";
      break;
    default:
      $load = V.$page.".php";
      break;
  }
  $inPage = $load;

 ?>
