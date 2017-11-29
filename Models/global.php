<?php
  /*  Trois defines pour ne pas devoir écrire les 
      dossiers de l'architecture MVC à chaque fois. */
  define("M","./Models/");
  define("V","./Views/");
  define("C","./Controllers/");
  // D'autres pour pouvoir rappeler des dossiers communs
  define("UP","./upload/");
  define("mUP","./upload/mini/");
  define("IMG",V."img/");
  define("mIMG",V."img/mini/");
  define("imghold", V."img/placeholder.png");
  // Quelques variables utiles
  $sitetitle = "PinTO";
?>