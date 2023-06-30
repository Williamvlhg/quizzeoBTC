<?php
    include "database.php";
    global $db;

        $sql = $db->prepare("UPDATE User SET Role = 2 WHERE Email = :Email;");
        $sql -> execute([
        'Email' => $_SESSION['email']
    ]);

        header('location: ../PageAjoutQuizz/index.php');

        

?>

    



