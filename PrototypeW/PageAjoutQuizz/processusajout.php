<?php
$sql = "SELECT * FROM quizz";
$stmt = $db->prepare($sql);
$stmt->execute();
if($stmt->rowCount() > 0)
                {
                   while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        $nbquizz = $row['IdQz'];
                   }
                }
$sql2 = "SELECT * FROM question";
$stmt2 = $db->prepare($sql2);
$stmt2->execute();
if($stmt2->rowCount() > 0)
                {
                   while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
                        $nbquestion = $row2['IdQt'];
                   }
                } 
$sql3 = "SELECT * FROM choix";
$stmt3 = $db->prepare($sql3);
$stmt3->execute();
if($stmt3->rowCount() > 0)
                {
                   while($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){
                        $nbchoix = $row3['IdC'];
                   }
                } 

if (isset($_POST['suivant'])) {
    global $db;
    $currentStep = $_SESSION['current_step'];
    if($_SESSION['current_step'] === 1){
        $titre = $_POST['titre-quiz'];
        $diffquizz = $_POST['diff'];
        $sql = "INSERT INTO quizz (IdQz, Titre, Difficulte, Datedecreation, IDQuizzeur) VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$nbquizz + 1, $titre, $diffquizz, date('Y-m-d'), $data[0]['ID']]);
    }
    if($_SESSION['current_step'] > 1){
        $nbquestion=$nbquestion+1;
        $question = $_POST['Question'];
        $diffquestion = $_POST['diff'];
        $reponse[0] = $_POST['Reponse1'];
        $reponse[1] = $_POST['Reponse2'];
        $reponse[2] = $_POST['Reponse3'];
        $reponse[3] = $_POST['Reponse4'];
        switch($_POST['BReponse']){
            case "brep1":
                $breponse[0]=1;
                $breponse[1]=0;
                $breponse[2]=0;
                $breponse[3]=0;
                break;
            case "brep2":
                $breponse[0]=0;
                $breponse[1]=1;
                $breponse[2]=0;
                $breponse[3]=0;
                break;
            case "brep3":
                $breponse[0]=0;
                $breponse[1]=0;
                $breponse[2]=1;
                $breponse[3]=0;
                break;
            case "brep4":
                $breponse[0]=0;
                $breponse[1]=0;
                $breponse[2]=0;
                $breponse[3]=1;
                break;
        }
        $sql = "INSERT INTO question (IdQt, intituléQuestion, Difficulte, datedecreation, IDQuizz) VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$nbquestion, $question, $diffquestion, date('Y-m-d'), $nbquizz]);
        for($i=0; $i<4; $i++){
        $sql2 = "INSERT INTO choix (IdC, reponse, Breponse, IDQuestion) VALUES (?, ?, ?, ?)";
        $stmt2 = $db->prepare($sql2);
        $stmt2->execute([$nbchoix + $i + 1, $reponse[$i], $breponse[$i], $nbquestion]);
        }
        }
        $_SESSION['current_step'] = isset($_SESSION['current_step']) ? $_SESSION['current_step'] + 1 : 1;
    }
    if ($_SESSION['current_step'] > 21 || isset($_POST['suppr'])){
        unset($_SESSION['current_step']);
    }
    if (!isset($_SESSION['current_step'])) {
        $_SESSION['current_step'] = 1;
    }
    $currentStep = $_SESSION['current_step'];
    ?>