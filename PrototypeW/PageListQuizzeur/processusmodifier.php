<?php

include 'verification.php';
include '../header.php';
if (isset($_GET['modify'])) {
    $id = $_GET['modify'];

    $sql1 = "SELECT * FROM quizz WHERE IdQz = :IdQz";
    $stmt1 = $db->prepare($sql1);
    $stmt1->bindParam(':IdQz', $id);
    $stmt1->execute();
    $stmt1->fetch(PDO::FETCH_ASSOC);
   
    $sql2 = "SELECT * FROM question WHERE IdQuizz = :IdQz";
    $stmt2 = $db->prepare($sql2);
    $stmt2->bindParam(':IdQz', $id);
    $stmt2->execute();
    while($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
        foreach ($row as )
    }

    ?>
        <h2>Modification du profil du Quizz <?php echo $user1['Titre']; ?></h2>
        <form method="POST" action="">
            <input type="hidden" name="ID" value="<?php echo $user1['IdQz']; ?>">

            <label for="Username">Titre:</label>
            <input type="text" name="Titre" id="Titre" value="<?php echo $user1['Titre']; ?>" required><br>


            <label for="">Difficulté:</label>
            <input type="number" name="diff" id="diff" value="<?php echo $user1['Difficulte']; ?>" required><br>
           <label for="Question">Question :</label>
        <?php  $sql2 = "SELECT * FROM question WHERE IdQuizz = :IdQz";
    $stmt2 = $db->prepare($sql2);
    $stmt2->bindParam(':IdQz', $id);
    $result = $stmt2->execute();
        foreach ($result as $row) 
    } ?>
            <input type="text" name="Question" id="Question"><br>
            <label for="diffq">Difficulté:</label>
            <select name="diff">
                <option value="">Select</option>
                <option value="1">facile</option>
                <option value="2">moyen</option>
                <option value="3">difficile</option>
            </select><br>
            <label for="Reponse1">Réponse 1:</label>
            <input type="text" name="Reponse1" id="Reponse1">
            <input type="radio" for="Reponse1" name="BReponse" value="brep1"><br>
            <label for="Reponse2">Réponse 2:</label>
            <input type="text" name="Reponse2" id="Reponse2">
            <input type="radio" for="Reponse2" name="BReponse" value="brep2"><br>
            <label for="Reponse3">Réponse 3:</label>
            <input type="text" name="Reponse3" id="Reponse3">
            <input type="radio" for="Reponse3" name="BReponse" value="brep3"><br>
            <label for="Reponse4">Réponse 4:</label>
            <input type="text" name="Reponse4" id="Reponse4">
            <input type="radio" for="Reponse4" name="BReponse" value="brep4"><br>
            <input type="submit" name="modifier" value="Modifier le quizz">
        </form>

    <?php
    if (isset($_POST['modifier'])) {
        $id = $_POST['ID'];
        $username = $_POST['Titre'];
        $email = $_POST['Difficulte'];

    
        $sql = "UPDATE quizz SET Titre = :Titre, Difficulte = :Difficulte WHERE ID = :ID";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':Titre', $Titre);
        $stmt->bindParam(':Difficulte', $Difficulte);
        $stmt->bindParam(':ID', $id);
        $stmt->execute();
        header("location: index.php");
    }
    }

?>
