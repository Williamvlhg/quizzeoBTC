<?php include 'verification.php';
      include '../header.php'; ?>
    <link rel="stylesheet" href="index.css">

    <body>
    <br><br>
    <form method="post">
    <div class="container">
        <div class="row">
            
            <div class="col-3 align-self-start border rounded-left rounded-right-75 bg-primary ">
                <a  class="nav-link myDiv" name="quizz"  data-idquizz="0" >SPORT</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3 align-self-middle border rounded-left rounded-right-75 bg-success">
                <a  id="start" class="nav-link myDiv" name="quizz" data-idquizz="1" >GEOGRAPHIE</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3 align-self-center border rounded-left rounded-right-75 bg-danger">
                <a  class="nav-link myDiv"  name="quizz" data-idquizz="2">FRANCAIS</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3 align-self-end border rounded-left rounded-right-75 bg-warning">
                <a  class="nav-link myDiv"  name="quizz" data-idquizz="3">MATHEMATIQUES</a>
            </div>
            </div>
        </form>
        <br>
        <div class="row">
            <div class="col-3 align-self-end border rounded-left rounded-right-75 bg-dark">
                <a  class="nav-link" href="listquizz.php">QUIZZ DES QUIZZEURS</a>
            </div>
        </div>
    </div>
    <br>

    <div class="d-grid gap-2 col-3 d-md-flex justify-content-md-end">
    <form method="post" action="../PageTransiQuizzeur/index.php" >
        <button type="submit"  class="btn btn-secondary" name='CreaQuizz' value="Créer un quizz">Créer un quizz</button>
    <script src="index.js"></script>
</body>
</html>