<?php
  global $db;
  if(isset($_SESSION['email'])){
      $req = $db->prepare("SELECT Username FROM user WHERE 1");
      $req->setFetchMode(PDO::FETCH_ASSOC); 
      $req -> execute();
      $tab=$req->fetchAll();
      ?> <form method="post"> <?php
      for($i=0; $i<count($tab); $i++){
        ?>
        <input type="button" value="Modifier l'utilisateur"> <input type="submit" name="supprimer" value="Supprimer l'utilisateur">  
        <?php
        $username = $tab[$i]['Username'];
        echo $username."<br>";

        if (isset($_POST['supprimer'])){
            $req = $db->prepare("DELETE FROM user WHERE Username Like :Username");
            $req -> execute([
                'Username' => $username
            ]);
            $req -> execute();
            exit;
        }
    } }
    ?> </form> 

