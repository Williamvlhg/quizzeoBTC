
<?php
    include "../database.php";
    global $db;
    if(isset($_POST["submit"]))
    {
            $e = $_POST["email"];
            $p = $_POST["pwd"];

 
        $sql = "SELECT * FROM user WHERE Email = :Email"; 
        $result = $db->prepare($sql);
        $result->execute([
            "Email" => $e,
        ]);
        if($result->rowCount() > 0)
            {
                $data = $result->fetchAll();
                if(password_verify($p,$data[0]['mdp']))
                {
                    $_SESSION['email'] = $e;
                    header('location: ../PageListing/index.php');
                }
 
            } else
            {
                echo "Identifiant ou mot de passe erroné"; 
            }
    }
?>

    
