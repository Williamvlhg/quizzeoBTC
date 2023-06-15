<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_SESSION['Email'])){
        echo "Vous êtes connecté en tant que : ". $_SESSION['Email'];
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

    <form method="post" class='position-absolute top-0 end-0 btn btn-light'>
         <input type="submit" name='deconnexion' value="Déconnexion">
    </form>
    <?php include 'processusdeconnexion.php';?>

    


<?php include "processusconnexion.php"; ?>



</body>
</html>