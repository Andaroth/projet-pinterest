<div id="container">
    <a id="calltoclose" class="close" href="#">&times;</a>
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

<style media="screen">

#container{
  width: 60%;
  border: 1px solid black;
  border-radius: 4px;
  display: block;
  margin: 0 auto;
  opacity: 0.8;
}
#container a{
  display: block;
  float: right;
  margin-right: 10px;
  color: black;
}
#upload_img{
  font-family:'Nunito';
  font-size: 14px;
  line-height: 30px;
  font-weight:800;
  display: flex;
  flex-wrap: wrap;
  margin: 0 auto;
  justify-content: space-between;
  padding: 20px;
}
.titre {
  width: 60%;
  text-align: center;
  display: block;
  margin: 0 auto;
  border-bottom: 1px solid black;

}
.titre h3{
  font-family: 'Nunito';
  font-size: 20px;
}
/*Upload de l'image*/
.new_img{
  width: 40%;
}
.new_img form{
  padding: 12px;
  margin-bottom: 15px;
  box-sizing: border-box;
  resize: vertical;
}
.img_upload label {
  width: 100%;
  cursor: pointer;
  font-weight: bold;
  text-align: center;
  display: block;
  position: relative;
  top: 50%;
  transform: translateY(-50%)
}
.img_upload input {
    display: none;
}
input[type="submit"]{
  display: block;
  margin: 0 auto;
}
.img_upload{
  border-radius: 3px;
  border: 1px solid black;
  width: 200px;
  height: 300px;
  padding: 10px;
  margin-bottom: 15px;
}
/*Titre, description et catégorie*/
.description{
  width: 45%;
  margin-top: 12px;
}
.description input, .description textarea{
  border: 1px solid #ccc;
  border-radius: 4px;
}
.description textarea{
  width: 100%;
  margin-bottom: 15px;
}
.description label{
  margin-left: 40px;
  text-align: left;
}
.checkbox input, .checkbox label{
  float:left;
  clear: both;
  line-height: normal;
}
.item, .item1, .item2, .item3,.item4{
  display: flex;
}
</style>
