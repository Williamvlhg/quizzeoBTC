<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">-->
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="c:\Users\esther\Pictures\Image1.png" alt="logo" style="width: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div>
        <form>
            <label for="Nquizz">Nom de votre quizz</label>
            <textarea name="NQuizz"></textarea> <br>
            <label for="Nquestion">Intutilé de votre question</label> 
            <textarea name="NQuestion"></textarea> <br>
            <label for="rep1">Intutilé de votre réponse 1</label>
            <input type="text" name="rep1"> <br>
            <label for="rep2">Intutilé de votre réponse 2</label>
            <input type="text" name="rep2"> <br> 
            <label for="rep3">Intutilé de votre réponse 3</label>
            <input type="text" name="rep3"> <br>
            <label for="rep4">Intutilé de votre réponse 4</label>
            <input type="text" name="rep4"> <br>
            <input type="submit" name='vquiz' value="Valider le quizz">
        </form>
    </div>

    <form method="post" class='position-absolute top-0 end-0 btn btn-light'>
         <input type="submit" name='deconnexion' value="Déconnexion">
    </form>
    <?php include '../PageConnexion/processusdeconnexion.php';?>
</body>
</html>