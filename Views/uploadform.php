<div id="container">
    <a class="close calltoclose" href="#">&times;</a>
  <div class="titre">
    <h3>Une nouvelle image?</h3>
  </div>
  <div id="upload_img">
    <div class="new_img">
    <form action="./?page=upimg" method="post" enctype="multipart/form-data">
      <div class="img_upload">
        <img id="imgPreview" src="#" alt="">
        <label for="fileToUpload" class="label-file">Choisir une image</label>
        <input name="fileToUpload" id="fileToUpload" class="input-file" type="file">
      </div>
        <input type="submit" value="Upload Image" name="submit">
      </div>
      <div class="description">
        Titre <br>
        <input type="text" name="fileTitle"><br>
        Description<br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
      <div class="checkbox">
         <p>Cochez la/les catégories souhaitées:</p>
         <div class="item">
           <input type="checkbox" id="nature"/><label>Nature</label></div>
         <div class="item1">
           <input type="checkbox" id="voyage"/><label>Voyages</label>
         </div>
         <div class="item2">
           <input type="checkbox" id="dessin"/><label>Dessins</label>
         </div>
         <div class="item3">
           <input type="checkbox" id="animaux"/><label>Animaux</label>
         </div>
         <div class="item4">
           <input type="checkbox" id="design"/><label>Design</label>
        </div>
       </div>
     </div>
  </form>
  </div>
</div>
