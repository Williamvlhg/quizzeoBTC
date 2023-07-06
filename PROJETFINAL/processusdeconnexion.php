
    <?php 
    //Destruction de la session et redirection vers la page index une fois qu'on a appuyé sur le bouton 'deconnexion'
    if(isset($_POST['deconnexion'])){
        session_destroy();
        unset($_POST['deconnexion']);
        header("Location: /PROJETFINAL/PageConnexion/index.php");
        exit;
    }
?>
