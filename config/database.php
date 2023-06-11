<?php
   try {
  $bdd = new PDO('mysql:host=localhost;dbname = cours ; charset = utf8' , 'root' , '');
  echo "bien connecté";
   }catch (Exception $e) {
   die('une erreur est survenu : '.$e-> getMessage());
   }





?>