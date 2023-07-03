<?php include 'verification.php'?>
<?php include '../header.php'?>

<h1>Liste des utilisateurs</h1>


<table>
    <tr>
        <th>ID</th>
        <th>Pseudo</th>
        <th>Action</th>
    </tr>
    <?php $sql = "SELECT * FROM user";
$result = $db->query($sql);while  ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['ID']; ?></td>
            <td><?php echo $row['Username']; ?></td>
            <td>
                <a href="processussupprimer.php?delete=<?php echo $row['ID']; ?>">Supprimer</a><br>
                <a href="processusmodifier.php?modify=<?php echo $row['ID']; ?>">Modifier</a>
            </td>
            
        </tr>
    <?php } ?>
</table>

    <?php include '../PageConnexion/processusdeconnexion.php'; ?>
    <script src="index.js"></script>
</body>
</html>