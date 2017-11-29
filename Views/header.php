<nav class="topbar">
    <a class="sitelogo" href="./"><img id="sitelogo" src="<?= V ?>img/Pinto.svg" alt="Logo"></a>
    <div class="flright">
     <?php 
        if ( (isset($_SESSION ['login'])) && ($_SESSION ['login']==true) )  {
      ?>
      <div class="searchbox">
        <form id="searchform" class="searchform" action="./" method="get">
          <input type="text" id="searchbar" class="searchbar" value="Faire une recherche..." /><input type="button" id="opencat" class="opencat" value="&equiv;" /><input type="submit" class="searchclic" value="&#128269;" />
        </form>
        <div id="catlist" class="catlist hidden">
          <ul>
            <li><a href="#">Nature</a></li>
            <li><a href="#">Voyages</a></li>
            <li><a href="#">Dessins</a></li>
            <li><a href="#">Animaux</a></li>
            <li><a href="#">Design</a></li>
          </ul>
        </div>
      </div>
      <a id="profilicon" class="profilicon" href="#">&#128126;<span class="hidden">Votre profil</span></a>
      <?php }  
        if (!isset($_SESSION['login']))  {
      ?>
      <a href="#" id="calltoconnect" class="calltoaction">Se connecter</a>
      <?php } else { ?>
      <a href="#" id="sendpic" class="calltoaction">Partager une photo</a>
      <?php } ?>
    </div>
    <?php 
      if ( (isset($_SESSION ['login'])) && ($_SESSION ['login']==true) )  {
    ?>
    <ul id="usermenu" class="usermenu hidden">
      <li><a href="#">Profil</a></li>
      <li><a href="#">Mes images</a></li>
      <li><form action="./?action=logout"><input type="submit" value="Déconnexion" /></form></li>
    </ul>
    <?php } ?>
  </nav>
