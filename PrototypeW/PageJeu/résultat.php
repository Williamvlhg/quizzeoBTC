<?php include "verification.php";
    include '../header.php';
if(isset($_POST['score'])){
    $score = $_POST['score'];
    $IDCurrentUser = $data[0]['ID'];
    $IDCurrentQuizz = $_SESSION['idquizz'] + 1;
    $sql1 = "SELECT * FROM score WHERE IDJoueur Like ".$IDCurrentUser." AND IDQuizz Like ". $IDCurrentQuizz . "";
        $result1 = $db->prepare($sql1);
        $result1->execute();
        if($result1->rowCount() > 0)
                {
                    $dataScore = $result1->fetchAll();
                } 
    $sql2 = "SELECT * FROM question WHERE IDQuizz Like ". $IDCurrentQuizz . "";
        $result2 = $db->prepare($sql2);
        $result2->execute();
        if($result2->rowCount() > 0)
                {
                    $dataQuizz = $result2->fetchAll();
                } 
    ?>
    <div>   
        <h2>Voici votre Score : <?php echo $score ?>/<?php echo count($dataQuizz)?></h2>
    </div>
    <?php
    if(empty($dataScore)){
        $sql = "INSERT INTO score(Score,IDQuizz,IDJoueur) VALUES (" . $score." , " . $IDCurrentQuizz. ", " . $IDCurrentUser . ")";
        $result = $db->prepare($sql);
        $result->execute();
    } else {
        $sql = "UPDATE score SET Score = ". $score." WHERE IDJoueur Like ".$IDCurrentUser." AND IDQuizz Like ". $IDCurrentQuizz . "" ;
        $result = $db->prepare($sql);
        $result->execute();
    }
} else {
    header("Location: ../PageJeu/test.php");
}
?>