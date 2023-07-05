<?php session_start();
if(isset($_POST['score'])){
    echo $_POST['score'];
} else echo 'Vous ne possédez pas de score pour ce quizz';

?>