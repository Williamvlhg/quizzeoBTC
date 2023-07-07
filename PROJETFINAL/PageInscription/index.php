<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body><center>

    <h4>Inscription</h4>
    <form action="processusinscription.php" method="post">
    
     <label for="name">Pseudo</label>
     <input type="text" name="name" required><br>
     <br>
     <label for="email">E-mail</label>
     <input type="email" name="email" required><br>
     <br>
     <label for="pwd">Mot de passe</label>
     <input type="password" name="pwd" required><br>
     <br>
     <label for="pwd2">Comfirmer votre Mot de passe</label>
     <input type="password" name="pwd2" required><br>
     <br>
     <button class="btn btn-dark btn-outline-dark" type="submit" name="submit" value="Valider"><h4>VALIDER<h4></button>
     <br>
     <br>
     <a href="../PageConnexion/index.php"> Vous possedez un compte ? Connectez-vous !</a>


    </form>

   

</body></center>
</html>