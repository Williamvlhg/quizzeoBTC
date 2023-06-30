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

     <?php include "database.php"; 
global $db;
     if(isset($_POST["submit"])){
      echo"ok";
      $question = $_POST["NomQuestion"];
      $reponse1 = $_POST["next"];
      $reponse2 = $_POST["next"];
      $reponse3 = $_POST["next"];
      $reponse4 = $_POST["next"];
     
     $req = $db->prepare("SELECT * FROM question (inttuléQuestion, Difficulte ) VALUES ( :ntituléQuestion, :Difficulte);")
     $requete = $db->prepare("SELECT * FROM choix (reponse, Breponse ,IDQuestion) VALUES ( :intituléQuestion, :Difficulte :IDQuestion);")
     $sql1 = $req -> execute([
      'intituléQuestion' => $question,
     ]);
      $sql2 = $requete-> execute([
      'reponse' => $reponse1,
      'reponse' => $reponse2,
      'reponse' => $reponse3,
      'reponse' => $reponse4,
      ]);
    

  } 
         ?> 
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
        <!-- <form method="post"> -->
        <?php
        while ($donnees = $reponse->fetch() )
        {
        ?> 
            <div class="testquizz">
              <p id="NomQuestion"><?php $donnees['intituléQuestion']; ?></p>
            </div>
             <!-- </form> -->
    


  <div class="container text-center">
    <div class="row w-50"> 
      <input id="next" type="submit" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block" <?php echo $reponse1['reponse']  ?> >
      <input id="next" type="submit" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block" <?php echo $reponse2['reponse']   ?> >
      <div class="w-100"></div>
      <input id="next" type="submit" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block" <?php echo $reponse3['reponse']   ?> >
      <input id="next" type="submit" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block" <?php echo $reponse4['reponse']   ?> >
    </div>
  </div>
  <?php
        }
        ?>
   <!-- <button onclick="chrono()">ertyu</button> -->
        <div class="Timer"> 
            <p id="Countdown"></p>
        </div>
  
        <script src="../PageListing/test.js"></script>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
