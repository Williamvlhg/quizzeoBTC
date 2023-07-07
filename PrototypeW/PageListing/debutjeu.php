<?php
session_start();
if (isset($_POST['idquizz'])) {
  $idquizz = $_POST['idquizz'];
  $_SESSION['idquizz'] = $idquizz;
  echo $_SESSION['idquizz'];
  header('location: ../PageJeu/test.php');
}

if (isset($_GET['idquizz'])) {
    $idquizz = $_GET['idquizz'];
    $_SESSION['idquizz'] = $idquizz - 1;
    echo $_SESSION['idquizz'];
    header('location: ../PageJeu/test.php');
  }
?>
