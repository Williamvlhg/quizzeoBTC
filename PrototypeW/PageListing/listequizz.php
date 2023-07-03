    <?php include 'verification.php';?>
    <?php include '../header.php';?>
    <?php include 'processuslisting.php';?>
    <br><br>

    <form name="for" method="get" action="">
        <input type="text" name="keywords" placeholder="Mots-clés">
        <input type="submit" name="valider" value="Rechercher">
    </form>
    <?php if (@$afficher == "Oui") {  ?>
    <div id="resultats">
        <div id="nbr"><?php count($tab)." ".(count($tab)>1?"résultats trouvés":"résultat trouvé") ?></div>
            <ol>
                <?php for($i=0; $i<count($tab); $i++){ $idquizz = $tab[$i]["IdQz"];?>
                <li><a href="debutjeu.php?idquizz=<?php echo $idquizz; ?>"><?php echo $tab[$i]["Titre"]?></a></li>
                <?php } ?>
            </ol>
    </div> 
    <?php } ?>
    <form method="post" action="../PageTransiQuizzeur/index.php" class='btn btn-light'>
         <input type="submit"  name='CreaQuizz' value="Créer un quizz">
    </form>

</body>
</html>