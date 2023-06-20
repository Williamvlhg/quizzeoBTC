<?php

    class Sport {
        public $question;
        public $reponse;

        public function __construct($Q,$R){
            $this->question = $Q;
            $this->reponse = $R;
        }
        public function getQuestion(){
            return $this->question;
        }
        public function getReponse(){
            return $this->reponse;
        }

    }
    $quiz = new Sport();
    $quiz->getQuestion();
    $quiz->getReponse();

    class question1 extends Sport{
        public $sp1;
        public $reponse1;
        public $reponse2;
        public $reponse3;
        public $reponse4;

        public function __construct(){
            $this->sp1 = "Quel est le pays qui a gagné la Coupe du Monde  de football en 1992 ?";
            $this->reponse1 = "Belgique";
            $this->reponse2 ="Brésil";
            $this->reponse3 = "Argentine";
            $this->reponnse4 = "France";
        }
        public function getsp1(){
            return $this->sp1;
        }
        public function getreponse1(){
            return $this->reponse1;
        }
        public function getreponse2(){
            return $this->reponse2;
        }
        public function getreponse3(){
            return $this->reponse3;
        }
        public function getreponse4(){
            return $this->reponse;
        }

    }
   $sp = new question1 ($Q, $R);
  $sp->getsp1();
  $sp->getreponse1();
  $sp->getreponse2();
  $sp->getreponse3();
  $sp->getreponse4();

  class question2 extends Sport{
    public $sp2;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp2 = "Comment s'appelle la plus grande compétition de football ?";
        $this->reponse1 = "La Première Ligue";
        $this->reponse2 ="La Liga";
        $this->reponse3 = "La Ligue des Champions";
        $this->reponnse4 = "La Coupe du Monde";
    }
    public function getsp2(){
        return $this->sp2;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question2 ($Q, $R);
$sp->getsp2();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();


class question3 extends Sport{
    public $sp3;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp3 = " Qui a créé le basketball ?";
        $this->reponse1 = "Michael Jordan";
        $this->reponse2 ="James Naismith";
        $this->reponse3 = "Todd Mitchell";
        $this->reponnse4 = "Aleksandr Gomelsky";
    }
    public function getsp3(){
        return $this->sp3;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question3 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();



class question4 extends Sport{
    public $sp4;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp4 = "Lequel ses joueurs joue en ailier droit en NBA?";
        $this->reponse1 = "Michael Porter Jr";
        $this->reponse2 ="Rudy Gobert";
        $this->reponse3 = "Jaren Jackson Jr";
        $this->reponnse4 = "Tony Parker";
    }
    public function getsp4(){
        return $this->sp4;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question4 ($Q, $R);
$sp->getsp4();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();



class question5 extends Sport{
    public $sp5;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp5 = " Combien mesure un terrain de tennis ?";
        $this->reponse1 = "25,68 m de long et 9,89 m de large";
        $this->reponse2 ="19, 87 m de long et 3,24 m de large";
        $this->reponse3 = "23,77 m de long et 8,23 m de large";
        $this->reponnse4 = "22,49 m de long et 7, 85 m de large";
    }
    public function getsp5(){
        return $this->sp5;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question5 ($Q, $R);
$sp->getsp5();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();




class question6 extends Sport{
    public $sp6;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp6 = "Combien de titres Séréna William a-t-elle remporté ?";
        $this->reponse1 = "32";
        $this->reponse2 ="73";
        $this->reponse3 = "24";
        $this->reponnse4 = "59";
    }
    public function getsp6(){
        return $this->sp6;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question6 ($Q, $R);
$sp->getsp6();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();




class question7 extends Sport{
    public $sp7;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp7 = "Qui était le président de la FEGAFOOT en 2009?";
        $this->reponse1 = "Dieudonné Engandzas";
        $this->reponse2 ="Samuel Eto'o";
        $this->reponse3 = "Pierre Ghislain Atcho";
        $this->reponnse4 = "Jean-Fidèle Diramba";
    }
    public function getsp7(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question7 ($Q, $R);
$sp->getsp7();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();




class question8 extends Sport{
    public $sp8;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp8 = "Dans quelle ville se sont déroulés les play off en NBA en France en 2013 ?";
        $this->reponse1 = "Seine-et-Marne";
        $this->reponse2 ="Neuilly-sur-Marne";
        $this->reponse3 = "Strasbourg-Chalon-sur-Saône";
        $this->reponnse4 = "Saint-Denis";
    }
    public function getsp8(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question8 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();



class question9 extends Sport{
    public $sp9;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp9 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp9(){
        return $this->sp9;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question9 ($Q, $R);
$sp->getsp9();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();



class question10 extends Sport{
    public $sp10;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp10 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp10(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question10 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();



class question11 extends Sport{
    public $sp1;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp1 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp11(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question11 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();



class question12 extends Sport{
    public $sp1;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp12 = " Racine 92 est un club de quel pays?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp12(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question12 ($Q, $R);
$sp->getsp12();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();


class question1 extends Sport{
    public $sp1;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp1 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp1(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question1 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();


class question1 extends Sport{
    public $sp1;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp1 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp1(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question1 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();



class question1 extends Sport{
    public $sp1;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp1 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp1(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question1 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();


class question1 extends Sport{
    public $sp1;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp1 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp1(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question1 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();


class question1 extends Sport{
    public $sp1;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp1 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp1(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question1 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();



class question1 extends Sport{
    public $sp1;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp1 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp1(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question1 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();



class question1 extends Sport{
    public $sp1;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp1 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp1(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question1 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();



class question1 extends Sport{
    public $sp1;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sp1 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getsp1(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question1 ($Q, $R);
$sp->getsp1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();








class Geographie{
    public $geo1;
    public $reponse1;
    public $reponse2;
    public $reponse3;
    public $reponse4;

    public function __construct(){
        $this->sgeo1 = "Quel est le pays qui a gagné la Coupe du Monde en 1992 ?";
        $this->reponse1 = "Belgique";
        $this->reponse2 ="Brésil";
        $this->reponse3 = "Argentine";
        $this->reponnse4 = "France";
    }
    public function getgeo1(){
        return $this->sp1;
    }
    public function getreponse1(){
        return $this->reponse1;
    }
    public function getreponse2(){
        return $this->reponse2;
    }
    public function getreponse3(){
        return $this->reponse3;
    }
    public function getreponse4(){
        return $this->reponse;
    }

}
$sp = new question1 ($Q, $R);
$sp->getgeo1();
$sp->getreponse1();
$sp->getreponse2();
$sp->getreponse3();
$sp->getreponse4();

  
    if ($reponse == $reponse1){
        $reponse = readline("Saisissez votre réponse");
        echo "La réponse est fausse , réessayez.";
    }
    elseif ($reponse == $reponse2){
        $reponse = readline("Saisissez votre réponse");
        echo "La réponse est fausse , réessayez.";
    }
    elseif ($reponse == $reponse3){
        $reponse = readline("Saisissez votre réponse");
        echo " La réponse est fausse , réessayez.";
    }
    elseif($reynse == $reponse4) {
        $reponse = readline("Saisissez votre réponse");
        echo " Bravo!";
    }
  echo . $sp->getsp1();
    
    
?>