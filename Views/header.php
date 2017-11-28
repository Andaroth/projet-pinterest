<nav class="topbar">
    <a class="sitelogo" href="./"><img id="sitelogo" src="<?= V ?>img/Pinto.svg" alt="Logo"></a>
    <div class="flright">
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
      <a href="#" id="calltoconnect" class="calltoaction">Se connecter</a>
    </div>
    <ul id="usermenu" class="usermenu hidden">
      <li><a href="#">Profil</a></li>
      <li><a href="#">Mes images</a></li>
      <li><a href="#">Déconnexion</a></li>
    </ul>
  </nav>
