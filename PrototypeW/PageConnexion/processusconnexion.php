
<?php
    include "database.php";
    global $db;
    if(isset($_POST["submit"]))
    {
            $e = $_POST["email"];
            $p = $_POST["pwd"];

<<<<<<< Updated upstream
        $sql = "SELECT * FROM User WHERE Email = :Email"; 
        $result = $db->prepare($sql);
        $result->execute([
            "Email" => $e
=======
        $sql = "SELECT * FROM user WHERE email = :email"; 
        $result = $db->prepare($sql);
        $result->execute([
            "email" => $e
>>>>>>> Stashed changes
        ]);
        if($result->rowCount() > 0)
            {
                $data = $result->fetchAll();
                if(password_verify($p,$data[0]['mdp']))
                {
                    echo "Connexion effectuée";
<<<<<<< Updated upstream
                    $_SESSION['Email'] = $e;
                }
                echo $e;
                echo $p;
                header('location: ../PageListing/index.php');
=======
                    $_SESSION['email'] = $e;
                }
                echo $e;
                echo $p;

>>>>>>> Stashed changes
            } else
            {
                echo "Identifiant ou mot de passe erroné"; 
            }
    }

    
