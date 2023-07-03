<?php include 'verification.php';
      include '../header.php'; ?>
    <br><br>
    <form method="post">
    <div class="container">
        <div class="row">
            
            <div class="col-3 align-self-start border rounded-left rounded-right-75 bg-danger ">
                <a  class="nav-link myDiv" name="quizz"  data-idquizz="0" >SPORT</a>
            </div>
        </div><br>
        <div class="row">
            <div class="col-3 align-self-middle border rounded-left rounded-right-75 bg-secondary">


                <a  id="start" class="nav-link myDiv" name="quizz" data-idquizz="1" >GEOGRAPHIE</a>
                

            </div>
        </div><br>
        <div class="row">
            <div class="col-3 align-self-center border rounded-left rounded-right-75 bg-success">
                <a  class="nav-link myDiv"  name="quizz" data-idquizz="2">FRANCAIS</a>
            
            </div>

        </div><br>
        <div class="row">
            <div class="col-3 align-self-end border rounded-left rounded-right-75 bg-warning">
                <a  class="nav-link myDiv"  name="quizz" data-idquizz="3">MATHEMATIQUES</a>
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
    <?php include 'processusdeconnexion.php';?> 
    <script src="index.js"></script>
</body>
</html>