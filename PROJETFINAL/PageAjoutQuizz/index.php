<?php include 'verification.php'?>
    <?php include '../header.php';?>
    <?php include 'processusajout.php';?>
    <link rel="stylesheet" href="index.css">
    <center>
    <h1>Création de votre quizz</h1>

<?php if ($currentStep === 1) { ?>
    <form action="" method="post">
        <label for="titre-quiz">Titre du quizz:</label>
        <input type="text" name="titre-quiz" id="titre-quiz" required><br>

        <label for="diff">Difficulté:</label>
        <select name="diff" required>   
            <option value="1">facile</option>
             <option value="2">moyen</option>
             <option value="3">difficile</option>
        </select>

        <button type="submit" name="suivant">Suivant</button>
    </form>
<?php } elseif ($currentStep != 1 && $currentStep < 21) { ?>
    <form action="" method="post">
        <label for="Question">Question <?php echo $currentStep-1; ?>:</label>
        <input type="text" name="Question" id="Question"><br>
        <label for="diff">Difficulté:</label>
        <select name="diff">    
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

        <button type="submit" class="btn btn-dark" name='suivant'>Suivant</button><br>
        <button type="submit" class="btn btn-dark" name="suppr">Confirmer le quizz</button>
    </form>
<?php } else { ?>
    <p>Création du quizz terminé !</p>
<?php } ?>
</center>
</body>
</html>
    


    