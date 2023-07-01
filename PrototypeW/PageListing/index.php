<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listing.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

   <?php include 'verification.php';
    echo $_SESSION['email'];?>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="c:\Users\esther\Pictures\Image1.png" alt="logo" style="width: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="collapseNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a  class="nav-link" href="index.php">Accueil</a>
        </li>
    
            <li class="nav-item">
            <a  class="nav-link" href="#">Classements</a>
        </li>
        <li class="nav-item">
            <a  class="nav-link" href="#" <?php if($data[0]['Role'] != 2 && $data[0]['Role'] != 3) {?>style="display:none"<?php }?>>Quiz enregistrés</a>
        </li>
        <li class="nav-item" <?php if($data[0]['Role'] != 3) {?>style="display:none"<?php }?>>
            <a  class="nav-link" href="">Liste des Quizz</a>
        </li>
        <li class="nav-item" <?php if($data[0]['Role'] != 3) {?>style="display:none"<?php }?>>
            <a  class="nav-link" href="">Liste des Utilisateurs</a>
        </li>
     

        </ul>

    </div>
    </nav>
    <br><br>
    <form method="post">
    <div class="container">
        <div class="row">
            
            <div class="col-3 align-self-start border rounded-left rounded-right-75 bg-danger ">
                <a  class="nav-link myDiv" name="quizz"  data-idquizz="0" >SPORT</a>
            </div>
        </div><br>
        <div class="row">
            <div class="col-3 align-self-middle border rounded-left rounded-right-75 bg-secondary">


                <a  id="start" class="nav-link myDiv" name="quizz" data-idquizz="1" >GEOGRAPHIE</a>
                

            </div>
        </div><br>
        <div class="row">
            <div class="col-3 align-self-center border rounded-left rounded-right-75 bg-success">
                <a  class="nav-link myDiv"  name="quizz" data-idquizz="2">FRANCAIS</a>
            
            </div>

        </div><br>
        <div class="row">
            <div class="col-3 align-self-end border rounded-left rounded-right-75 bg-warning">
                <a  class="nav-link myDiv"  name="quizz"data-idquizz="3">MATHEMATIQUES</a>
            </div>
    </form>
        </div><br>
        <div class="row">
            <div class="col-3 align-self-end border rounded-left rounded-right-75 bg-dark">
                <a  class="nav-link" href="listequizz.php">QUIZZ DES QUIZZEURS</a>
            </div>
        
        </div><br>


    </div>
    <form method="post" action="../PageTransiQuizzeur/index.php" class='btn btn-light'>
         <input type="submit"  name='CreaQuizz' value="Créer un quizz">
    </form>
    <form method="post" class='position-absolute top-0 end-0 btn btn-light'>
         <input type="submit" name='deconnexion' value="Déconnexion">
    </form>
    <?php include 'processusdeconnexion.php';?> 
    <script src="index.js"></script>
</body>
</html>