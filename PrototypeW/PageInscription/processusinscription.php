<?php
    include "database.php";
    global $db;
    if(isset($_POST["submit"])){
            echo"ok";
            $u = $_POST["name"];
            $e = $_POST["email"];
            $p = $_POST["pwd"];
<<<<<<< Updated upstream
            $p2 = $_POST["pwd2"];
        if($p2 != $p){
            echo "Vos mots de passes ne correspondent pas";
        } else {
        $p = password_hash($p, PASSWORD_DEFAULT); 
        $sql = $db->prepare("INSERT INTO User(Username, Email, mdp, Role) VALUES ( :Username, :Email, :mdp, 1);");
        $sql -> execute([
            'Username' => $u,
            'Email' => $e,
            'mdp' => $p
        ]);
        }
    }

    
=======
            $p = password_hash($p, PASSWORD_DEFAULT);

        $sql = $db->prepare("INSERT INTO user(pseudo, email, password) VALUES ( :pseudo, :email, :password);");
        $sql -> execute([
            'pseudo' => $u,
            'email' => $e,
            'password' => $p
        ]);
    }

    ?>
>>>>>>> Stashed changes