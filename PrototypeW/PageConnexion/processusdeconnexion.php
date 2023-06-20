
    <?php 
    //Destruction de la session et redirection vers la page index une fois qu'on a appuyé sur le bouton 'deconnexion'
    if(isset($_POST['deconnexion'])){
        session_destroy();
        unset($_POST['deconnexion']);
<<<<<<< Updated upstream
        header("Location:../PageConnexion/index.php");
=======
        header("Location:index.php");
>>>>>>> Stashed changes
        exit;
    }
?>
