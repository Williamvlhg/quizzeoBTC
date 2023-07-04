<?php
    class Quizz{
        private $id;
        private $titre;
        private $difficulteQz;
        private $listequizz;
        public function __construct(int $D)
        {
            $this->listequizz = [];
            $this->id = $D;

        }
        public function setTitre($N){
            $this->titre = $N;
        }
        public function setDiffQz($W){
            $this->difficulteQz = $W;
        }

        public function LoadData( ) {
            global $db;
            $sql1 = "SELECT IdQt, intituléQuestion, Difficulte, IDQuizz FROM quizz WHERE IDQuizz = :IDQuizz"; 
                $result = $db->prepare($sql1);
                $result->execute([
                    "IDQuizz" => $this->id,
                ]);
                if($result->rowCount() > 0)
                {
                    while($data = $result->fetch(PDO::FETCH_ASSOC)){
                    $question = new Question($data["intituléQuestion"],$data["IdQt"]);  
                    $this->addQuestion($question);
                    };
                } else echo "Aucun résultat n'a été trouvé";
        
        foreach($this->listequizz as $questions)
        {    
         
          $questionid = $questions->GetId();
        
          $sql2 = "SELECT IdC, reponse, Breponse, IDQuestion FROM CHOIX WHERE IDQuestion = :IDQuestion"; 
          $result2 = $db->prepare($sql2);
          $result2->execute([
              "IDQuestion" => $questionid,
          ]);
          if($result2->rowCount() > 0)
          {
              while($data = $result2->fetch(PDO::FETCH_ASSOC)){
              $reponse = new Choix($data["reponse"],$data["Breponse"]);  
              $question->addReponse($reponse);
              };
          } else echo "Aucun résultat n'a été trouvé";
        }
    
         
        
        
        
             }
        public function getTitre(){
            return $this->titre;
        }
        public function getDiffQz(){
           return $this->difficulteQz;
        }
        public function affQuestions(){
            foreach($this->listequizz as $question){
                $question->affQuestion();
                $question->affReponse();
            }
        }
        public function addQuestion($C){
            $this->listequizz[]= $C;
         }
    }
    class Question{
        private $id;
        private $intituléQuestion;
        private $difficulteQt;
        private $listereponse;
        private $idQuizz;
        public function __construct($N,$D)
        {
            $this->intituléQuestion = $N;
            $this->id = $D;
            $this->listereponse = [];

        }
        public function setIntituléQ($N){
            $this->intituléQuestion = $N;
        }
        public function setDiffQt($W){
            $this->difficulteQt = $W;
        }
        public function getIntituléQ(){
            return $this->intituléQuestion;
        }
        public function getDiffQt(){
           return $this->difficulteQt;
        } 
        public function getId(){
            return $this->id;
         }
         public function getIdQuizz(){
            return $this->idQuizz;
         }
        public function getReponse(){
            return $this->listereponse;
        }
        public function affQuestion() {
            echo $this->intituléQuestion . "<br>";
                }
        public function addReponse(Choix $C){
            $this->listereponse[] = $C;
         }
         public function affReponses() {
            foreach($this->listereponse as $reponse){
                echo $reponse->getReponse() . "<br>";
            }

                }
    }
    class Choix{
        private $id;
        private $reponse;
        private $breponse;
        public function __construct($N,$D)
        {
            $this->reponse = $N;
            $this->breponse = $D;

        }
        public function setReponse($N){
            $this->reponse = $N;
        }
        public function setBreponse($W){
            $this->breponse = $W;
        }
        public function getReponse(){
            return $this->reponse;
        }
        public function getBReponse(){
           return $this->breponse;
        }
    }

    
    
        

    // if(isset($_POST["submit"])){
    //     $u = $_POST["Nquizz"];
    //     $e = $_POST["email"];
    //     $p = $_POST["pwd"];
    //     $p2 = $_POST["pwd2"];
    // if($p2 != $p){
    //     echo "Vos mots de passes ne correspondent pas";
    // } else {
    // $p = password_hash($p, PASSWORD_DEFAULT); 
    // $sql = $db->prepare("INSERT INTO User(Username, Email, mdp, Role) VALUES ( :Username, :Email, :mdp, 1);");
    // $sql -> execute([
    //     'Username' => $u,
    //     'Email' => $e,
    //     'mdp' => $p
    // ]);
    // }
    //}       




?>