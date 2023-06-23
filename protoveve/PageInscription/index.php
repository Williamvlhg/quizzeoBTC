<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web.css">
    <title>Document</title>
</head>
<body>
<img src="c:\Users\esther\Pictures\Image2.png" alt="">
    <h4>Inscription</h4>
    <form action="" method="post">
    <div>
     <label for="name">Pseudo</label>
     <input type="text" name="name" required><br>

     <label for="email">E-mail</label>
     <input type="email" name="email" required><br>

     <label for="pwd">Mot de passe</label>
     <input type="password" name="pwd" required><br>

     <label for="pwd2">Comfirmer votre Mot de passe</label>
     <input type="password" name="pwd2" required><br>

     <input type="submit" name="submit" value="Valider">
     </div>

    </form>

   


<?php include "processusinscription.php"; ?>



</body>
</html>