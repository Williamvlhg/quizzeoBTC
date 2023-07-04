<?php
    include "../database.php";
    global $db;
    if(isset($_POST["submit"])){
            $u = $_POST["name"];
            $e = $_POST["email"];
            $p = $_POST["pwd"];
            $p2 = $_POST["pwd2"];
        if($p2 != $p){
            echo "Vos mots de passes ne correspondent pas";
        } else {
        $ph = password_hash($p, PASSWORD_DEFAULT); 
        $sql = $db->prepare("INSERT INTO User(Username, Email, mdp, Role) VALUES ( :Username, :Email, :mdp, 1);");
        $sql -> execute([
            'Username' => $u,
            'Email' => $e,
            'mdp' => $ph
        ]);
        header('Location: ../PageConnexion/index.php');
        }
    }

?>

    
