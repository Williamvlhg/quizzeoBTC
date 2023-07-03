<?php
    define('HOST', 'localhost');
    define('DB_NAME', 'Quizzeo');
    define('USER', 'root');
    define('PASS', '');

    try{
        $db = new PDO("mysql:host=localhost" . HOST . ";dbname=Quizzeo" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo $e;
    }
?>