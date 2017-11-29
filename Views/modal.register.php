  <div id="registermodal" class="modal hidden">
    <div class="modal-content">
      <a class="close calltoclose" href="#">&times;</a>
      <div class="errorform"></div>
      <div class="signtab signin">
        <h3>Nouveau? Inscrivez-vous</h3>
        <div class="form1">
          <form action="./?action=register" method="post">
            <label for="pseudoinput">Veuillez choisir un Pseudo</label><br/>
            <input id="pseudoinput" type="text" name="name" value="Pseudo" class="inputleft"><input id="mailinput" type="text" name="mail" value="votre@mail" class="inputright"><br/>
            <label for="passinputOne">Veuillez choisir un mot de passe</label><br/>
            <input id="passinputOne" type="password" name="pass" value="" class="inputleft"><input id="passinputTwo" type="password" name="pass2" value="" class="inputright"><br/>
            <input id="submitOne" class="hidden" type="submit" name="submit" value="sinscrire">
          </form>
        </div>
      </div>
      <div class="signtab signup">
        <h3>Déjà membre ? Inscrivez-vous</h3>
        <div class="form2">
          <form class="formulaire" action="./?action=login" method="post">
           <label for="username">Pseudo</label>
           <input class="fullinput" type="text" name="username" id="username" placeholder="Votre pseudo"><br/>
           <label for="mdp">Mot de passe</label>
           <input class="fullinput" type="password" name="mdp" id="mdp" placeholder="Votre mot de passe">
           <input id="submitTwo" class="hidden" type="submit" name="button" value="Se Connecter">
          </form>
        </div>
      </div>
    </div>
  </div>
