<?php

include 'verification.php';
include '../header.php';?>
<link rel="stylesheet" href="modif.css">
<?php
if (isset($_GET['modify'])) {
    $id = $_GET['modify'];

    $sql1 = "SELECT * FROM quizz WHERE IdQz = :IdQz";
    $stmt1 = $db->prepare($sql1);
    $stmt1->bindParam(':IdQz', $id);
    $stmt1->execute();
    $quizzinfo = $stmt1->fetch(PDO::FETCH_ASSOC);
    ?>
        <h2>Modification du profil du Quizz <?php echo $quizzinfo['Titre']; ?></h2>
        <form method="POST" action="">
            <input type="hidden" name="ID" value="<?php echo $quizzinfo['IdQz']; ?>">

            <label for="Username">Titre:</label>
            <input type="text" name="Titre" id="Titre" value="<?php echo $quizzinfo['Titre']; ?>" required><br>


            <label for="">Difficulté:</label>
            <input type="number" name="diff" id="diff" value="<?php echo $quizzinfo['Difficulte']; ?>" required><br>
            <button class="btn btn-warning" type="submit" name="modifier-quizz" value="Modifier le Quizz">Modifier le quizz</button><br>
            </form>
        <?php  
        $sql2 = "SELECT *
        FROM question
        WHERE IDQuizz LIKE '".$id."'";
        $result2 = $db->query($sql2);  while ($row2 = $result2->fetch(PDO::FETCH_ASSOC)) { 
     ?>
        <form method="POST" action="">
            <input type="hidden" name="IdQt" value="<?php echo $row2['IdQt']; ?>">
            <input type="text" name="Question" id="Question" value="<?php echo $row2['intituléQuestion'];?>" required><br>
            <input type="text" name="diffq" id="diffq" value="<?php echo $row2['Difficulte'];?>" required>
            <button class="btn btn-warning" type="submit" name="modifier-question" value="Modifier la question">Modifier la Question</button><br>
            </form>
            <?php 
             $sql = "SELECT *
             FROM choix
             WHERE IDQuestion LIKE '".$row2['IdQt']."'";
             $result = $db->query($sql);  while ($row = $result->fetch(PDO::FETCH_ASSOC)){ 
            ?>
            <form method="POST" action="">
            <input type="hidden" name="IdC" value="<?php echo $row['IdC']; ?>">
            <label for="Reponse1">Réponse :</label>
            <input type="text" name="Reponse1" id="Reponse1" value='<?php echo $row['reponse'];?>' required>
            <input type="text" name="BReponse" value="<?php echo $row['Breponse']; ?>" required><br>
            <br>
            <button class="btn btn-warning" type="submit" name="modifier-choix" value="Modifier la Réponse">Modifier la réponse</button><br>
            </form>
            <?php } 
        

  }
    if (isset($_POST['modifier-quizz'])) {
        $id = $_POST['ID'];
        $Titre= $_POST['Titre'];
        $Difficulte = $_POST['diff'];

    
        $sql = "UPDATE quizz SET Titre = :Titre, Difficulte = :Difficulte WHERE IdQz = :IdQz";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':Titre', $Titre);
        $stmt->bindParam(':Difficulte', $Difficulte);
        $stmt->bindParam(':IdQz', $id);
        $stmt->execute();
    }
        if (isset($_POST['modifier-question'])) {
            $id = $_POST['IdQt'];
            $question = $_POST['Question'];
            $Difficulte = $_POST['diffq'];

        
            $sql = "UPDATE question SET intituléQuestion = :intituléQuestion, Difficulte = :Difficulte WHERE IdQt = :IdQt";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':intituléQuestion', $question);
            $stmt->bindParam(':Difficulte', $Difficulte);
            $stmt->bindParam(':IdQt', $id);
            $stmt->execute();
        }
    
    if (isset($_POST['modifier-choix'])) {
        $id = $_POST['IdC'];
        $reponse1= $_POST['Reponse1'];
        $Breponse = $_POST['BReponse'];

    
        $sql = "UPDATE choix SET reponse = :reponse, Breponse = :Breponse WHERE IdC = :IdC";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':reponse', $reponse1);
        $stmt->bindParam(':Breponse', $Breponse);
        $stmt->bindParam(':IdC', $id);
        $stmt->execute();
    }
    
    
}

?>