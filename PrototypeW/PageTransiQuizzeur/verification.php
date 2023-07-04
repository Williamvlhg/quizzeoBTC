<?php      
                global $db;
                if(!isset($_SESSION['email'])){
                    header("Location: ../PageConnexion/index.php");
                    exit;
                }
                if($data[0]['Role'] != 2 && $data[0]['Role'] != 3){
                    header("Location: ../PageListing/index.php");
                    exit;
                }
?>