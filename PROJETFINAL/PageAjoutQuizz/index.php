    <?php include 'verification.php'?>
    <?php include '../header.php'?>
    <body><center>
    <link rel="stylesheet" href="index.css">
    <div>
        <h4>
        <?php $affichage = 0; if($affichage == 1){?>
        <form action="" method="get">
            <label for="Nquizz">Choisissez un nom pour votre quizz</label>
            <input type="text" name="NQuizz" required><br>

            <input type="submit" name='vquiz' value="Valider le nom du quizz">
        </form>
        <?php }?>
        <?php if(isset($_GET['vquiz']) || $affichage == 0){ $affichage = 1;?>
            <form method="get" action="">
            <?php $i = 1; if ($i <= 20) { ?>
                <h3>Question <?php echo $i; ?>:</h3>
                <input type="text" name="question_<?php echo $i; ?>" placeholder="Question" required>
                <br>
                <?php for ($j = 1; $j <= 4; $j++) { ?>
                <br>
                <input type="radio" name="answer_<?php echo $i; ?>" value="<?php echo $j; ?>" required>
        
                <input type="text" name="option_<?php echo $i; ?>_<?php echo $j; ?>" placeholder="Option <?php echo $j; ?>" required>
                <br>
                <?php } $i++; ?>
                <br>
                <button class="btn btn-dark" type="submit" name="next-question" value="Prochaine Question"><h3>Prochaine Question<h3></button>
                <br>
            <?php } else if($i>20){ $affichage = 0;?>
            <input type="submit" name="add-quizz" value="Valider votre quizz">
            <?php }?>
            </form>

        <?php }?>
       
    

        <h4>
    </div>

  
    <?php include 'classquizz.php';?>
    <?php include '../PageConnexion/processusdeconnexion.php'; ?>
    <script src="index.js"></script>
</body></center>
</html>