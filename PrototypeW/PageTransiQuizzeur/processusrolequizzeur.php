<?php
    include "database.php";
    global $db;
            $u = $_SESSION["name"];
            $e = $_POST["email"];
            $p = $_POST["pwd"];
            $p2 = $_POST["pwd2"];
        if($p2 != $p){
            echo "Vos mots de passes ne correspondent pas";
        } else {
        $sql = $db->prepare("INSERT INTO User(Username, Email, mdp, Role) VALUES ( :Username, :Email, :mdp, 1);");
        $sql -> execute([
            'Username' => $u,
            'Email' => $e,
            'mdp' => $p
        ]);
        }
    

?>

    



