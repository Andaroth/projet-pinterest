<form action="register.php" method="post">
  Nom d'utilisateur : <input type="text" name="username" value=""></br>
  Addresse mail : <input type="text" name="mail" value=""><?= $erreur ?></br>
  Mot de passe : <input type="password" name="mdp" value=""></br>
  <input type="submit" name="submit" value="s'inscrire">
</form>
