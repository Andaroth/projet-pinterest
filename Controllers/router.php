<?php
  $page= isset($_GET['page']) ? htmlentities($_GET['page']) ; 'default';

  require_once(Views . 'header.php');

  switch ($page) {
    case 'functions':
      include(Controllers . 'functions.php');
      break;

    case

      break;
  }

 ?>
