<!doctype HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> QUIZZEO </title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
        <link rel="stylesheet" href="csss.css">
    
    </head>
     <body>

     <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

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
        
        <form method="post">
            <div class="testquizz">
            <label> "Inserez une question ?" </label>
                <p id="NomQuestion"></p>               
            </div>
    
        </form>
        <br>
        <div class="row">
            <div class="col  border"></div>
            <div class="col  border"><h3>reponse 1   </h3></div>
            <div class="col  border"></div>
        </div>
        <div class="row">
            <div class="col  border"></div>
            <div class="col  border"><h3>reponse 2   </h3></div>
            <div class="col  border"></div>
        </div>
        <div class="row">
            <div class="col  border"></div>
            <div class="col  border"><h3>reponse 3  </h3></div>
            <div class="col  border"></div>
        </div>
        <div class="row">
            <div class="col  border"></div>
            <div class="col  border"><h3>reponse 4   </h3></div>
            <div class="col  border"></div>
        </div>

























        <div class="Timer">
            <p id="Countdown"></p>
        </div>
  
        <script src="js.js"></script>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>