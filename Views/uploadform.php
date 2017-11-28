<div id="upload_img">
    <div class="new_img">
    <form action="./?page=upload" method="post" enctype="multipart/form-data">
      Une nouvelle image?<br>
    <div class="img_upload">
      <label for="file" class="label-file">Choisir une image</label>
      <input id="file" class="input-file" type="file">
    </div>
    <input type="submit" value="Upload Image" name="submit"><br>
    </div>
    <div class="description">
    Titre <br>
    <input type="text" name="title"><br>
    Description<br>
    <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
      <p>
       Cochez la/les catégories souhaitées:<br />
       <input type="checkbox" name="nature" id="nature" /> <label for="nature">Nature</label>
       <input type="checkbox" name="voyage" id="voyage" /> <label for="voyage">Voyages</label>
       <input type="checkbox" name="dessin" id="dessin" /> <label for="dessin">Dessin</label>
       <input type="checkbox" name="animaux" id="animaux" /> <label for="animaux">Animaux</label>
       <input type="checkbox" name="desing" id="design" /> <label for="design">Design</label>
      </p>
  </div>
 </form>
</div>

<style media="screen">

#upload_img{
  width: 40%;
  font-family: 'Nunito';
  font-size: 14px;
  line-height: 20px;
  font-weight:800;
  border: 1px solid #ccc;
  border-radius: 4px;
  display: flex;
  flex-wrap: wrap;
  margin: 0 auto;
  justify-content: space-between;
}
.new_img{
  width: 40%;
}
.new_img form{
  padding: 12px;
  margin-bottom: 10px;
  box-sizing: border-box;
  resize: vertical;
}
.new_img form input{
  border-radius: 2px solid black;
  padding-top: 60%;
}
.new_img form textarea{

}
.img_upload{
  border-radius: 3px;
  border: 1px solid black;
  width: 200px;
  height: 300px;
  padding: 20px;
  margin-bottom: 10px;
}
.description{
  width: 40%;
}
</style>
