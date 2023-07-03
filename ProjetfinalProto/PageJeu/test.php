<?php include "verification.php";
    include "../header.php"; ?>
        <div class="Timer"> 
            <p id="Countdown"></p>
        </div>
    <?php if(!isset($_POST['start-game'])){?>
        <form method="post">
      <input id="submit" type="submit" name="start-game" value="Commencer le jeu">
    </form>
    <?php }?>
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
    } else echo "erreur";
     ?>

   <div>
    
   </div>


        <script src="../PageListing/test.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>