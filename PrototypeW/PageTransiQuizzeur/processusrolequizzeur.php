<?php   
        session_start();   
        include "database.php";
        $sql1 = "SELECT * FROM user WHERE Email = :Email"; 
                $result = $db->prepare($sql1);
                $result->execute([
                    "Email" => $_SESSION['email'],
                ]);
                if($result->rowCount() > 0)
                {
                    $data = $result->fetchAll();
                } 
        if($data[0]['Role'] != 2 && $data[0]['Role'] != 3){
        $sql = $db->prepare("UPDATE User SET Role = 2 WHERE Email = :Email;");
        $sql -> execute([
        'Email' => $_SESSION['email']
        ]);

        header('location: ../PageAjoutQuizz/index.php');
        } else header('location: ../PageAjoutQuizz/index.php');
 
        

?>

    



