<?php 
if ($_SESSION["admin"] < 1) {
?>
<div id="errormsg">Vous n'avez pas le droit d'accéder à cette page !</div>
<?php } else { ?>
<div id="passedmsg">Bienvenue dans le panneau d'administration !</div>
<main id="home">
    <div class="grid">
      <?php
        $do = new Image;
        $do->getAllImgAsAdmin();
      ?>
    </div>
  </main>
<?php } ?>