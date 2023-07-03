Page TransiQuizzeur

<!-- <?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">-->
    <!-- <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="c:\Users\esther\Pictures\Image1.png" alt="logo" style="width: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div>
            <h1> Vous allez devenir un quizzeur </h1>

    </div>
    <!-- <?php include '../PageConnexion/processusrolequizzeur.php';?> -->
    </body>
</html> --> 




Page processusTransiQuizzeur

<!-- <?php
    // include "database.php";
    // global $db;
    //         $u = $_SESSION["name"];
    //         $e = $_POST["email"];
    //         $p = $_POST["pwd"];
    //         $p2 = $_POST["pwd2"];
    //     if($p2 != $p){
    //         echo "Vos mots de passes ne correspondent pas";
    //     } else {
    //     $sql = $db->prepare("INSERT INTO User(Username, Email, mdp, Role) VALUES ( :Username, :Email, :mdp, 1);");
    //     $sql -> execute([
    //         'Username' => $u,
    //         'Email' => $e,
    //         'mdp' => $p
    //     ]);
    //     }
    

?> -->


Page Listing = index

<!-- <?php session_start();?>
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
   <?php include '../PageAjoutQuizz/verification.php';
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
     
        </ul>
    </div>
    </nav>
    <br><br>

    <form method="post">
    <div class="container">
        <div class="row">

            <div class="col-3 align-self-start border rounded-left rounded-right-75 bg-danger ">

                <a  class="nav-link" onclick="listequizz.php" href="#">SPORT</a>

                <a  id="start"  class="nav-link" href="#" onclick="jouer();">SPORT</a>




                <a  class="nav-link" name="quizz" href="../PageJeu/Prototype/test.php" value="1">SPORT</a>
            </div>



        </div><br>
        <div class="row">
            <div class="col-3 align-self-middle border rounded-left rounded-right-75 bg-secondary">

                <a  class="nav-link" onclick="listequizz.php" href="#">GEOGRAPHIE</a>

                <a  id="start" class="nav-link" href="#" onclick="jouer()">GEOGRAPHIE</a>



                <a  id="start" class="nav-link" name="quizz" href="../PageJeu/Prototype/test.php" value=2>GEOGRAPHIE</a>


            </div>
        </div><br>
        <div class="row">
            <div class="col-3 align-self-center border rounded-left rounded-right-75 bg-success">

                <a  class="nav-link" onclick="listequizz.php" href="#">FRANCAIS</a>

                <a id="start" class="nav-link" href="#" onclick="jouer()">FRANCAIS</a>

                <a  class="nav-link"  name="quizz" href="../PageJeu/Prototype/test.php" value=3>FRANCAIS</a>

            </div>

        </div><br>
        <div class="row">
            <div class="col-3 align-self-end border rounded-left rounded-right-75 bg-warning">

                <a  class="nav-link" onclick="listequizz.php" href="#">MATHEMATIQUES</a>

                <a id="start" class="nav-link" href="#"  onclick="jouer()">MATHEMATIQUES</a>

                <a  class="nav-link"  name="quizz" href="../PageJeu/Prototype/test.php" value=4>MATHEMATIQUES</a>
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
    <?php include '../PageConnexion/processusdeconnexion.php'; ?>
    <script src="test.js"></script>
</body>
</html> -->












<!DOCTYPE >
<html >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> QUIZZEO </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
        <link rel="stylesheet" href="css1.css">


    </head>
     <body>


<nav class="navbar navbar-expand-lg 6g-dark navbar-dark toto">

<!-- Brand/logo -->

<a class="navbar-brand" href="#"></a>

<img src="c:\Users\esther\Pictures\Image1.png" alt="logo" style="width: 70px;">

<!-- Links -->

<ul class="navbar-nav">

  <li class="nav-item">

    <a class="nav-link" href="#">Tous les Quizz</a>

  </li>

  <li class="nav-item">

    <a class="nav-link" href="#">Quizz enregistrés</a>

  </li>

  <li class="nav-item">

    <a class="nav-link" href="#">Connexion</a>

  </li>

</ul>

</nav>  



Page jeu/Prototype = test

        <!-- <div class="Timer"> 
            <p id="Countdown"></p>
        </div>
        <form method="post">
      <input id="submit" type="submit" name="submit" value="Valider">
    </form>
     <?php include "database.php"; 
    // global $db;
    // $idquizz = 0;
    //  if(isset($_POST["submit"])){
    //  $req = $db->prepare("SELECT intituléQuestion FROM question WHERE IdQuizz like :IdQuizz");
    //  $req->setFetchMode(PDO::FETCH_ASSOC); 
    //  $req -> execute([
    //   'IdQuizz' => $idquizz+1,
    //  ]);
    //  $tab=$req->fetchAll();
    //  for($i=0; $i<count($tab); $i++){
    //     echo $tab[$i]['intituléQuestion']."<br>";

    //     $idquestion = ($idquizz*20)+$i+1;
    //     $req2 = $db->prepare("SELECT reponse FROM CHOIX WHERE IdQuestion like :IdQuestion");
    //     $req2->setFetchMode(PDO::FETCH_ASSOC); 
    //     $req2 -> execute([
    //       'IdQuestion' => $idquestion,
    //      ]);
    //     $tab2=$req2->fetchAll();
    //     for($y=0; $y<count($tab2); $y++){
    //       echo $tab2[$y]['reponse']."<br>";
    //     }
    //   }

    //  }
     ?>

        <script src="../PageListing/test.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html> -->





<!-- <?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="bird.jpg" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
</nav>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div>
        <form>
            <label for="Nquizz">Nom de votre quizz</label>
            <textarea name="NQuizz"></textarea> <br>
            <label for="Nquestion">Intutilé de votre question</label> 
            <textarea name="NQuestion"></textarea> <br>
            <label for="rep1">Intutilé de votre réponse 1</label>
            <input type="text" name="rep1"> <br>
            <label for="rep2">Intutilé de votre réponse 2</label>
            <input type="text" name="rep2"> <br> 
            <label for="rep3">Intutilé de votre réponse 3</label>
            <input type="text" name="rep3"> <br>
            <label for="rep4">Intutilé de votre réponse 4</label>
            <input type="text" name="rep4"> <br>
            <input type="submit" name='vquiz' value="Valider le quizz">
        </form>
    </div>

    <form method="post" class='position-absolute top-0 end-0 btn btn-light'>
         <input type="submit" name='deconnexion' value="Déconnexion">
    </form>
    <?php include '../PageConnexion/processusdeconnexion.php';?>
</body>
</html> -->



<?php

include "database.php";
// global $db;
// if(isset($_POST["submit"])){
//         echo"ok";
//         $question = $_POST["NQuestion"];
//         $quiz = $_POST["NQuizz"];
       

//     $sql = $db->prepare("INSERT INTO question (Titre,intituléQuestion, Difficulte) VALUES ( :intituléQuestion, :Difficulte', 1);");
//     $sql = $db->prepare("INSERT INTO quizz (Titre, Difficulte) VALUES ( :Titre , :Difficulte', 1);");
//     $sql = $db->prepare("INSERT INTO choix (reponse,intituléQuestion, Difficulte) VALUES ( :Titre , :intituléQuestion, :Difficulte', 1);");
//     $sql -> execute([
//         'Titre' => $question,
//         'intituléQuestion' => $quiz;
//     ]);
    
// } 

// ?>