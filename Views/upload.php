<form action="upload.php" method="post" enctype="multipart/form-data"><br>
    Ajoutez une photo à votre compte : <br>
    <input type="file" name="fileToUpload" id="fileToUpload"> <br>
    <input type="submit" value="Upload Image" name="submit"><br>
    Titre:
    <input type="text" name="title"><br>
    Description: <br>
    <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
   <p>
       Cochez la/les catégories souhaitées:<br />
       <input type="checkbox" name="nature" id="nature" /> <label for="nature">Nature</label><br />
       <input type="checkbox" name="voyage" id="voyage" /> <label for="voyage">Voyages</label><br />
       <input type="checkbox" name="dessin" id="dessin" /> <label for="dessin">Dessin</label><br />
       <input type="checkbox" name="animaux" id="animaux" /> <label for="animaux">Animaux</label>
       <input type="checkbox" name="desing" id="design" /> <label for="design">Animaux</label>
   </p>
</form>
