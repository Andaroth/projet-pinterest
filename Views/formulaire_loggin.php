<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Loggin</title>
  </head>
  <body>
  <h1>Connecte toi</h1>
  <form class="formulaire" action="index.php?action=loginform" method="post">
    <div>
      <label for="pseudo">Veuillez indiquer votre Pseudo </label>
      <input type="text" name="pseudo" placeholder="Votre pseudo">
    </div>

    <div>
      <label for="mdp">Veuillez indiquer votre mot de passe</label>
      <input type="text" name="mdp" placeholder="Votre mot de passe">
    </div>

    <div class="button">
        <input type="submit" name="button" value="Se Connecter">
    </div>
  </form>
</body>
</html>
