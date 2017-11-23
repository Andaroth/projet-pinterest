<nav class="topbar">
    <a href="./"><img src="./" alt="Logo"></a>
    <div class="flright">
      <div class="searchbox">
        <form id="searchform" class="searchform" action="./" method="get">
          <input type="text" id="searchbar" class="searchbar" value="Faire une recherche..." />
        </form>
        <a href="#" id="opencat" class="opencat">&equiv;<span class="hidden">Catégories</span></a>
        <?php include V."categorylist.php"; ?>
        <a class="searchclic" href="#">&#128269;<!--&cudarrr;--><span class="hidden">Rechercher</span></a>
      </div>
      <a id="profilicon" class="profilicon" href="#">&#128126;<span class="hidden">Votre profil</span></a>
      <a href="#" class="calltoaction">Se connecter</a>
    </div>
    <?php include V."usermenu.php"; ?>
  </nav>
