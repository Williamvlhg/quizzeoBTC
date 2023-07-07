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


        <div class="Timer"> 
            <p id="Countdown"></p>
        </div>
        <form method="post">
      <input id="submit" type="submit" name="start-game" value="Commencer le jeu">
    </form>
     <?php include "database.php"; 
    global $db;
    if(isset($SESSION['idquizz'])){
    $idquizz = 0;
     if(isset($_POST["start-game"])){
     $req = $db->prepare("SELECT intituléQuestion FROM question WHERE IdQuizz like :IdQuizz");
     $req->setFetchMode(PDO::FETCH_ASSOC); 
     $req -> execute([
      'IdQuizz' => $idquizz+1,
     ]);
     $tab=$req->fetchAll();
     for($i=0; $i<count($tab); $i++){
        echo $tab[$i]['intituléQuestion']."<br>";

        $idquestion = ($idquizz*20)+$i+1;
        $req2 = $db->prepare("SELECT reponse FROM CHOIX WHERE IdQuestion like :IdQuestion");
        $req2->setFetchMode(PDO::FETCH_ASSOC); 
        $req2 -> execute([
          'IdQuestion' => $idquestion,
         ]);
        $tab2=$req2->fetchAll();
        for($y=0; $y<count($tab2); $y++){
          echo $tab2[$y]['reponse']."<br>";
        }
      }

     }
    }else echo "erreur"
     ?>

     <!-- <div class="questions">
          <p class="question"><Poser une question</p>
     
     <div class="container text-center">
    <div class="row w-50">  -->
      <!-- <input id="next" type="submit" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block" <?php echo $reponse1['reponse'] ; ?> >
      <input id="next" type="submit" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block" <?php echo $reponse2['reponse'] ;  ?> >
      <div class="w-100"></div>
      <input id="next" type="submit" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block" <?php echo $reponse3['reponse'];   ?> >
      <input id="next" type="submit" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block" <?php echo $reponse4['reponse'] ;  ?> >
    </div> -->
    </div>

    <?php
     
    ?>
        <script src="../PageListing/test.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
