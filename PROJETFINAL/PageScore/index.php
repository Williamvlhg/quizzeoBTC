<?php include "verification.php";
    include "../header.php";?>
    <link rel="stylesheet" href="index.css">
    
    <?php
    $IDCurrentUser = $data[0]['ID'];
    $sql1 = "SELECT * FROM score WHERE IDJoueur LIKE ". $IDCurrentUser .""; 
                $result1 = $db->prepare($sql1);
                $result1->execute();
                if($result1->rowCount() > 0)
                {
                    $data1 = $result1->fetchAll();
                } 
                var_dump($data1);
    if(empty($data1)){ ?> <h2> Vous avez participé à aucun quizz, veuillez en faire un pour afficher un score ! </h2> <?php } else {
        ?>
    
    <table>
    <tr>
        <th>Nom des Quizz</th>
        <th>Score</th>
    </tr>
    <?php $sql = "SELECT *
        FROM score b
        INNER JOIN quizz a ON b.IDQuizz = a.IdQz
        WHERE b.IDJoueur LIKE '".$IDCurrentUser."'";
        $result = $db->query($sql);  while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['Titre']; ?></td>
            <td><?php echo $row['Score']; ?>/20</td>
        </tr>
    <?php }} ?>  
    </table>
</body>
</html>
