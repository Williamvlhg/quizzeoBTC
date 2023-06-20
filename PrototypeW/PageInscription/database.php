<?php
    define('HOST', 'localhost');
<<<<<<< Updated upstream
    define('DB_NAME', 'Quizzeo');
    define('USER', 'root');
    define('PASS', 'root');
=======
    define('DB_NAME', 'quizzeo');
    define('USER', 'root');
    define('PASS', '');
>>>>>>> Stashed changes

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo $e;
    }
?>