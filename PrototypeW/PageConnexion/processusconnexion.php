
<?php
    include "database.php";
    global $db;
    if(isset($_POST["submit"]))
    {
            $e = $_POST["email"];
            $p = $_POST["pwd"];

        $sql = "SELECT * FROM User WHERE Email = :Email"; 
        $result = $db->prepare($sql);
        $result->execute([
            "Email" => $e
        ]);
        if($result->rowCount() > 0)
            {
                $data = $result->fetchAll();
                if(password_verify($p,$data[0]['mdp']))
                {
                    echo "Connexion effectuée";
                    $_SESSION['Email'] = $e;
                }
                echo $e;
                echo $p;

            } else
            {
                echo "Identifiant ou mot de passe erroné"; 
            }
    }

    
