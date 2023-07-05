    <?php include 'verification.php'?>
    <?php include '../header.php';?>
    <?php include 'processusajout.php';?>

    <h1>Quiz Registration</h1>

<?php var_dump($_SESSION);if ($currentStep === 1) { ?>
    <!-- Étape 1: Nom et Email -->
    <form action="" method="post">
        <label for="titre-quiz">Titre du quizz:</label>
        <input type="text" name="titre-quiz" id="titre-quiz" required><br>

        <label for="diff">Difficulté:</label>
        <select name="diff" required>
            <option value="">Select</option>
            <option value="1">facile</option>
             <option value="2">moyen</option>
             <option value="3">difficile</option>
        </select>

        <button type="submit" name="suivant">Suivant</button>
    </form>
<?php } elseif ($currentStep != 1 && $currentStep < 21) { ?>
    <!-- Étape 2: Autres informations -->
    <form action="" method="post">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>

        <button type="submit" name='suivant'>Suivant</button>
        <button type="submit" name="suppr">Supprimer le Quizz</button>
    </form>
<?php } else { ?>
    <!-- Étape finale: Formulaire terminé -->
    <p>Quiz registration completed!</p>
<?php } ?>
</body>
</html>
    


    </div>
    <?php include 'classquizz.php';?>
    <script src="index.js"></script>
</body>
</html>