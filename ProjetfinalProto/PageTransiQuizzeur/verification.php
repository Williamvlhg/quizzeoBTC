<?php      
                global $db;
                if(!isset($_SESSION['email'])){
                    header("Location: ../PageConnexion/index.php");
                    exit;
                }
?>