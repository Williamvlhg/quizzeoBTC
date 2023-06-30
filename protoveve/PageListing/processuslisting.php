<?php
   /* include "database.php";
    global $db;
    if(isset($_POST["start"]))
    {
           
        $sql = "SELECT * FROM quizz WHERE IdQz = 1"; 
        $result = $db->prepare($sql);
        $result->execute();
        if($result->rowCount() > 0)
            {
                $data = $result->fetchAll();
                if(($p,$data[0]['mdp']))
                {
                    echo "Connexion effectuée";
                    $_SESSION['email'] = $e;
                    header('location: ../PageListing/index.php');
                }
 
            } else
            {
                echo "Identifiant ou mot de passe erroné"; 
            }
    }
    
*/
    
