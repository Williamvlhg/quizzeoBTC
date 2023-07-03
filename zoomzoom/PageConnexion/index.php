<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="web.css">
</head>
<body>
    <?php if (isset($_SESSION['Email'])){
        echo "Vous êtes connecté en tant que : ". $_SESSION['Email'];
        }
        else
        { ?> 
                    <h4>Connexion</h4>

                    
                    <div class="divi">
    <form  method="post">
    <div class="conex">
     <label for="email">E-mail</label>
     <input id="mail"type="email" name="email"><br>

     <label for="pwd">Mot de passe</label>
     <input id="pass"type="password" name="pwd" ><br>
</div>
<input id="submit" type="submit" name="submit" value="Valider">
    </form>
    </div>
            <?php
        }?>



<?php include "processusconnexion.php"; ?>



</body>
</html>