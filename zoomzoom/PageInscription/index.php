<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="weba.css">
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
<img src="c:\Users\esther\Pictures\Image2.png" alt="">
    <h4>Inscription</h4>
    <div class="frm">
    <form action="" method="post">
    <div class="inscript">
     <label for="name">Pseudo</label>
     <input id="nom" type="text" name="name" required><br>

     <label for="email">E-mail</label>
     <input id="mail" type="email" name="email" required><br>

     <label for="pwd">Mot de passe</label>
     <input id="pass" type="password" name="pwd" required><br>

     <label for="pwd2">Comfirmer votre Mot de passe</label>
     <input id="pass"type="password" name="pwd2" required><br>

   
     </div>
     <input id="submit" type="submit" name="submit" value="Valider">
    </form>
</div>
   


<?php include "processusinscription.php"; ?>



</body>
</html>