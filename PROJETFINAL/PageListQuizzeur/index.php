<?php include 'verification.php'?>
<?php include '../header.php'?>
<link rel="stylesheet" href="inde.css">
<?php $IDCurrentUser = $data[0]['ID'];
    $sql1 = "SELECT * FROM quizz WHERE IDQuizzeur LIKE ". $IDCurrentUser .""; 
                $result1 = $db->prepare($sql1);
                $result1->execute();
                if($result1->rowCount() > 0)
                {
                    $data1 = $result1->fetchAll();
                } 
    if(empty($data1)){ ?> <h1 class="noquizz"> Vous n'avez pas créer de quizz encore, veuillez en créer un !</h1> <?php } else {
        ?>
        <div class="content">
<h1>Vos quizz</h1>


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
    </div>
<?php } ?>
    <?php include '../PageConnexion/processusdeconnexion.php'; ?>
    <script src="index.js"></script>
</body>
</html>