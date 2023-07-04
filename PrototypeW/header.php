<<<<<<< Updated upstream
<!DOCTYPE >
<html >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> QUIZZEO </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>

      
    
    </head>
     <body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="../img/Image2.png" alt="logo" style="width: 70px;">
=======

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
<?php include 'verification.php';?>
<?php include 'processuslisting.php';?>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="c:\Users\esther\Pictures\Image1.png" alt="logo" style="width: 70px;">
>>>>>>> Stashed changes
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="collapseNavbar">
        <ul class="navbar-nav">
<<<<<<< Updated upstream
        <li class="nav-item">
            <a  class="nav-link" href="../PageListing/index.php">Accueil</a>
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
            <a  class="nav-link" href="../PageAdminModer/index.php">Liste des Utilisateurs</a>
        </li>
        <li>
            <form method="post">
            <input type="submit" name='deconnexion' value="Déconnexion">
            </form>
        </li>
     
=======
            <li class="nav-item">
                <a  class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link" href="#">Classements</a>
            </li>
            <li class="nav-item" <?php if($data[0]['Role'] != 2 && $data[0]['Role'] != 3) {?>style="display:none"<?php }?>>
                <a  class="nav-link" href="">Quiz enregistrés</a>
            </li>
            <li class="nav-item" <?php if($data[0]['Role'] != 3) {?>style="display:none"<?php }?>>
                <a  class="nav-link" href="">Liste des Quizz</a>
            </li>
            <li class="nav-item" <?php if($data[0]['Role'] != 3) {?>style="display:none"<?php }?>>
                <a  class="nav-link" href="">Liste des Utilisateurs</a>
            </li>
            
    
>>>>>>> Stashed changes

        </ul>
        <?php include "processusdeconnexion.php"?>
    </div>
<<<<<<< Updated upstream
    </nav>  
=======
    </nav>
>>>>>>> Stashed changes
