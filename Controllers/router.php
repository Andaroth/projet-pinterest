<?php
  if( isset($_GET['page']) ) {
    $page = $_GET['page'];
    switch ($page) {
      case 'admin'||'login'||'modals'||'onepicture'||'register':
        $load = V.$page.".php"; break;
      default: $load = V."main.php"; break;
    }
  } else { $load = V."main.php"; }
  
  $inPage = $load;

 ?>
