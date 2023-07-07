<?php include "verification.php";
include "../header.php"; ?>
<link rel="stylesheet" href="css.css">
    <div class="Timer" <?php if(!isset($_POST['start-game'])){ ?> style="display:none" <?php } else { ?> style="display:block" <?php } ?>>
        <p id="Countdown"></p>
    </div>
<body><center>
<?php if(!isset($_POST['start-game'])){?>
    <form method="post">
<br>
<br>

<button class="btn btn-info" id="submit" type="submit" name="start-game" value="Commencer le jeu"><h4>Commencer le jeu<h4></button>
</form>
<?php } else $_SESSION['score'] = 0;?>
 <?php
global $db;
if(isset($_SESSION['idquizz'])){
$idquizz = $_SESSION['idquizz'];
    if(isset($_POST["start-game"])){
    $req = $db->prepare("SELECT intituléQuestion FROM question WHERE IdQuizz like :IdQuizz");
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req -> execute([
    'IdQuizz' => $idquizz+1,
    ]);
    $tab=$req->fetchAll();
    for($i=0; $i<count($tab); $i++){
    ?>
    <div class="hide">
    <h4><label  id="question" for="question"><?php echo $tab[$i]['intituléQuestion'] ?></label><h4>
     <?php
        $idquestion = ($idquizz*20)+$i+1;
        $req2 = $db->prepare("SELECT * FROM CHOIX WHERE IdQuestion like :IdQuestion");
        $req2->setFetchMode(PDO::FETCH_ASSOC);
        $req2 -> execute([
        'IdQuestion' => $idquestion,
        ]);
        $tab2=$req2->fetchAll();
        for($y=0; $y<count($tab2); $y++){
            ?>
        <div id="answer-button" class="btn-grid">
        <input type="button" name="ans" onclick="plusSlides(<?php echo $tab2[$y]['Breponse'];?>)" value="<?php echo $tab2[$y]['reponse'];?>">
        </div>
    <?php
        }
        ?>
        </div>
        <?php
    }
}
        }else echo "erreur";
 ?>
    <form action="résultat.php" method="post" onSubmit="AddPostData()" name="envoie-score" id="score" style="display: none">
        <input type="hidden" name="score" value="">
        <input type="submit"  value="Terminer">
    </form>

    <script src="jeu.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body></center>
</html>