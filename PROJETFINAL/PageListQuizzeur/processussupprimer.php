<?php


include "../database.php";
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM quizz WHERE IdQz = :IdQz";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':IdQz', $id);
    $stmt->execute();
    header("location: index.php");
}
?>