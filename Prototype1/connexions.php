<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<img src="c:\Users\esther\Pictures\Image2.png" alt="">
    <h4>°onnexion</h4>
    <form action="" method="post">
    
     <label for="name">Pseudo</label>
     <input type="text" name="name"><br>

     <label for="email">E-mail</label>
     <input type="email" name="email"><br>

     <label for="password">Mot de passe</label>
     <input type="password" name="password" ><br>

     <input type="submit" name="submit" value="Valider">


    </form>
<<<<<<< Updated upstream:connexions.php

    <?php
    $nom=$_POST['name'];
$mdp=$_POST['password'];

 
$nom = $_POST['name'];
$mdp = $_POST['password'];


if (isset($_POST['submit'])){
    echo "Enregistré";
}
else {
    echo "Pas enregistré";
}
?>

<?php include "processusconnexion.php"; ?>
=======

   


<?php include "processusconnexion.php"; ?>


>>>>>>> Stashed changes:Prototype1/connexions.php

</body>
</html>