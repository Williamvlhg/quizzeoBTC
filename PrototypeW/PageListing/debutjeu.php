<?php
session_start();
if (isset($_POST['idquizz'])) {
  $idquizz = $_POST['idquizz'];
  $_SESSION['idquizz'] = $idquizz;
  echo $_SESSION['idquizz'];
  var_dump($_SESSION);
  header('location: ../PageJeu/Prototype/test.php');
}

if (isset($_GET['idquizz'])) {
    $idquizz = $_GET['idquizz'];
    $_SESSION['idquizz'] = $idquizz - 1;
    echo $_SESSION['idquizz'];
    var_dump($_SESSION);
    header('location: ../PageJeu/Prototype/test.php');
  }
?>
