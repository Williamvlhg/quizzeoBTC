<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">-->
    <title>Document</title>
</head>
<body>
    <?php include 'verification.php';?>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="c:\Users\esther\Pictures\Image1.png" alt="logo" style="width: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

    <?php include '../header.php';?>
    <div>
        <form action="processusajout.php" method="post">
    <?php $affichage = 0; if($affichage == 1){?>
        <form action="" method="get">
            <label for="Nquizz">Choisissez un nom pour votre quizz</label>
            <input type="text" name="NQuizz"><br>
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
                <input type="radio" name="answer_<?php echo $i; ?>" value="<?php echo $j; ?>" required>
                <input type="text" name="option_<?php echo $i; ?>_<?php echo $j; ?>" placeholder="Option <?php echo $j; ?>" required>
                <br>
                <?php } $i++; ?>
                <input type="submit" name="next-question" value="Prochaine Question">
                <br>
            <?php } else if($i>20){ $affichage = 0;?>
            <input type="submit" name="add-quizz" value="Valider votre quizz">
            <?php }?>
            </form>

        <?php }?>



    </div>

    <form method="post" class='position-absolute top-0 end-0 btn btn-light'>
         <input type="submit"  name='deconnexion' value="Déconnexion">
    </form>
   
    <?php include '../PageConnexion/processusdeconnexion.php'; ?>
</body>
</html>