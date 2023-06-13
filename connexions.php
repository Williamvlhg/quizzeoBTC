<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="c:\Users\esther\Pictures\Image2.png" alt="">
    <h4>Inscription</h4>
    <form action="" method="post">
    
     <label for="name">Pseudo</label>
     <input type="text" name="name"><br>

     <label for="email">E-mail</label>
     <input type="email" name="email"><br>

     <label for="pwd">Mot de passe</label>
     <input type="password" name="pwd" ><br>

     <input type="submit" name="submit" value="Valider">


    </form>
<<<<<<< HEAD:connexion.php
    <?php
    $nom=$_POST['name'];
$mdp=$_POST['password'];
=======
    <?php 
$nom = $_POST['name'];
$mdp = $_POST['password'];
>>>>>>> 3e24fa86459c315bf990ddfe69a9acdb0b72a78c:conex.php

if (isset($_POST['submit'])){
    echo "Enregistré";
}
else {
    echo "Pas enregistré";
}
?>
<<<<<<< HEAD:connexion.php

=======
<?php include "processusconnexion.php"; ?>
>>>>>>> 3e24fa86459c315bf990ddfe69a9acdb0b72a78c:conex.php


</body>
</html>