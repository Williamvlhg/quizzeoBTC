<?php 

if (isset($_POST['suivant'])) {
    // Récupérer les données soumises

    // Incrémenter l'étape du formulaire
    $_SESSION['current_step'] = isset($_SESSION['current_step']) ? $_SESSION['current_step'] + 1 : 1;

    // Rediriger vers la prochaine étape du formulaire
    header("Refresh:0");
    exit();

} 
if ($_SESSION['current_step'] > 21 || isset($_POST['suppr'])){
    unset($_SESSION['current_step']);
}
if (!isset($_SESSION['current_step'])) {
    $_SESSION['current_step'] = 1;
}
$currentStep = $_SESSION['current_step'];

?>
