<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web.css">
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php if (isset($_SESSION['email'])){
        echo "Vous êtes connecté en tant que : ". $_SESSION['email'];
        }
        else
        { ?> 
                    <h4>Connexion</h4>
    <form  method="post">
    
     <label for="email">E-mail</label>
     <input type="email" name="email"><br>

     <label for="pwd">Mot de passe</label>
     <input type="password" name="pwd" ><br>

     <input type="submit" name="submit" value="Valider">


    </form>
            <?php
        }?>



<?php include "processusconnexion.php"; ?>



</body>
</html>