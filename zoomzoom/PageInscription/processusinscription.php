<?php
    include "database.php";
    global $db;
    if(isset($_POST["submit"])){
            echo"ok";
            $u = $_POST["name"];
            $e = $_POST["email"];
            $p = $_POST["pwd"];
            $p2 = $_POST["pwd2"];
        if($p2 != $p){
            echo "Vos mots de passes ne correspondent pas";
        } else {
        $p = password_hash($p, PASSWORD_DEFAULT); 
        $sql = $db->prepare("INSERT INTO User(Username, email, mdp, Role) VALUES ( :Username, :email, :password, 1);");
        $sql -> execute([
            'Username' => $u,
            'email' => $e,
            'mdp' => $p
        ]);
        }
    }

?>

    
