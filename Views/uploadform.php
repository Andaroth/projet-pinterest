<div id="upload_img">
  <form action="./?page=upload" method="post" enctype="multipart/form-data">
    <div class="new_img">
      Une nouvelle image?  <br>
    <input type="file" name="fileToUpload" id="fileToUpload"> <br>
    <div class="img_upload">
    </div>
    <div class="description">
    <input type="submit" value="Upload Image" name="submit"><br>
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
  width: 70%;
  font-family: 'Nunito';
  font-size: 14px;
  line-height: 30px;
  font-weight:800;
  display: flex;
  flex-wrap: wrap;
}
.new_img form{
  width: 100%;
  padding: 12px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
.new_img form input{
  width:70%;
  border-radius: 2px solid black;
}
.new_img form textarea{
  width:70%;
}
.submit{
  width: 30%;
}
.submit input{
  height: 20px;
  background-color: black;
  color: #FFFFFF;
}
.description{

}
</style>
