<?php include 'verification.php'?>
<?php include '../header.php'?>
<link rel="stylesheet" href="index.css">

<h1>Liste des Quizz</h1>


<table>
    <tr>
        <th>ID Quizz</th>
        <th>Nom des Quizz</th>
        <th>Action</th>
    </tr>
    <?php $sql = "SELECT * FROM quizz WHERE IDQuizzeur Like ".$data[0]['ID']."";
$result = $db->query($sql);while  ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['IdQz']; ?></td>
            <td><?php echo $row['Titre']; ?></td>
            <td>
                <a href="processusmodifier.php?modify=<?php echo $row['IdQz']; ?>">Modifier</a><br>
                <a href="processussupprimer.php?delete=<?php echo $row['IdQz']; ?>">Supprimer</a>
            </td>
            
        </tr>
    <?php } ?>
</table>

    <?php include '../PageConnexion/processusdeconnexion.php'; ?>
    <script src="index.js"></script>
</body>
</html>