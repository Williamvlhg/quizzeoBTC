<?php

    @$keywords = $_GET["keywords"];
    @$valider = $_GET["valider"];
    if(isset($valider) && !empty(trim($keywords))){
        $words=explode(" ",trim($keywords));
        for($i=0;$i<count($words);$i++){
            $kw[$i]="Titre like '%".$words[$i]."%'";
        }

        $sql = $db->prepare("SELECT IdQz, Titre  FROM QUIZZ WHERE ".implode(" OR ",$kw));
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $sql->execute();
        $tab=$sql->fetchAll();
        $afficher = "Oui";
    }
?>