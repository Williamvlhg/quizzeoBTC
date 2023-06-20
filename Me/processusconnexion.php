<?php
    include "Prototype/database.php";
    global $db;
    if(isset($_POST["submit"])){
            echo"ok";
            $u = $_POST["name"];
            $e = $_POST["email"];
            $p = $_POST["pwd"];

        $sql = $db->prepare("INSERT INTO User(Username, Email, mdp, Role) VALUES ( :Username, :Email, :mdp, 1);");
        $sql -> execute([
            'Username' => $u,
            'Email' => $e,
            'mdp' => $p
        ]);
    }

    
