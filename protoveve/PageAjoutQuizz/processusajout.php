<?php

include "database.php";
global $db;
if(isset($_POST["submit"])){
        echo"ok";
        $question = $_POST["NQuestion"];
        $quiz = $_POST["NQuizz"];
       

    $sql = $db->prepare("INSERT INTO question (Titre,intituléQuestion, Difficulte) VALUES ( :intituléQuestion, :Difficulte', 1);");
    $sql = $db->prepare("INSERT INTO quizz (Titre, Difficulte) VALUES ( :Titre , :Difficulte', 1);");
    $sql = $db->prepare("INSERT INTO choix (reponse,intituléQuestion, Difficulte) VALUES ( :Titre , :intituléQuestion, :Difficulte', 1);");
    $sql -> execute([
        'Titre' => $question,
        'intituléQuestion' => $quiz;
    ]);
    
} 

?>