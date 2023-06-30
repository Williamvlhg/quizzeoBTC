<?php
    class Quizz{
        private $titre;
        private $difficulteQz;
        private $listequizz = array();
        public function __construct($N,$D)
        {
            $this->titre = $N;
            $this->difficulteQz = $D;

        }
        public function setTitre($N){
            $this->titre = $N;
        }
        public function setDiffQz($W){
            $this->difficulteQz = $W;
        }
        public function getTitre(){
            return $this->titre;
        }
        public function getDiffQz(){
           return $this->difficulteQz;
        }
        public function getQuestion(){
            return $this->listequizz;
        }
        public function addQuestion($C){
            $this->listequizz = $C;
         }
    }
    class Question{
        private $intituléQuestion;
        private $difficulteQt;
        private $listereponse = array();
        public function __construct($N,$D)
        {
            $this->intituléQuestion = $N;
            $this->difficulteQt = $D;

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
        public function getReponse(){
            return $this->listereponse;
        }
        public function addReponse($C){
            $this->listereponse = $C;
         }
    }
    class Choix{
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

    
        

    if(isset($_POST["submit"])){
        $u = $_POST["Nquizz"];
        $e = $_POST["email"];
        $p = $_POST["pwd"];
        $p2 = $_POST["pwd2"];
    if($p2 != $p){
        echo "Vos mots de passes ne correspondent pas";
    } else {
    $p = password_hash($p, PASSWORD_DEFAULT); 
    $sql = $db->prepare("INSERT INTO User(Username, Email, mdp, Role) VALUES ( :Username, :Email, :mdp, 1);");
    $sql -> execute([
        'Username' => $u,
        'Email' => $e,
        'mdp' => $p
    ]);
    }
}




?>