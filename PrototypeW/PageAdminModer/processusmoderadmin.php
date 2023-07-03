<?php
  global $db;
  if(isset($_SESSION['email'])){
      $req = $db->prepare("SELECT Username FROM user WHERE 1");
      $req->setFetchMode(PDO::FETCH_ASSOC); 
      $req -> execute();
      $tab=$req->fetchAll();
      for($i=0; $i<count($tab); $i++){
          echo $tab[$i]['Username']."<br>";
      }

   }
   ?>
