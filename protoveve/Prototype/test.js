
console.log("test")
var timeLeft = 30;

    var timerId = setInterval(countdown, 1000);
    //for (var nbq = 20; nbq > 0; nbq = nbq - 1){
        function countdown() {//setTimeout(function(){window.location ='../PageListing/index.php';}, 10*1000);
            if (timeLeft == -1) {
                timeLeft = 30;
                document.getElementsById("NomQuestion").innerHTML = "Question numéro : " + nbq ;

            } else {
                document.getElementById('Countdown').innerHTML = timeLeft;
                timeLeft--;
                console.log(document.getElementById('Countdown').innerHTML)
            }
            }
        
        // function chrono(){
        //     setTimeout(function(){window.location ='../PageListing/index.php';}, 10*1000);
        // }


// Function of quizz






const gamer = document.getElementById('game')
//  var NQuestion = document.getElementById('intitule')
//  var NReponse = document.getElementById('ans')
 
//  let questionpose,currentQuestionIndex

function jouer(){
window.location.href ="jeux.html"
console.log('Joue le jeu')
// questionpose = questions.sort(()=> Math.random() - .5)
// currentQuestionIndex = 0
 questionSuivante()
 //    montre(questionpose[currentQuestionIndex])
 
}
  var questionIndex = 1;
  montre(questionIndex);

   function questionSuivante(n) {
    montre(questionIndex += n);
   }
   function currentQuestion(n){
    montre(questionIndex = n);
   }
 function montre(n){
    var i = 1;
    var Nquestions = document.getElementsByClassName('question')
    var Nreponses = document.getElementsByClassName('answer')
    if(n > Nquestions.length){
        questionIndex = 1
    }
    if(n < 1 ){
        questionIndex = questions.length
    }
    for (i = 0 ; i < questions.length; i++){
        Nquestions[i].computedStyleMap.display = "none"
    }
    for(i= 0 ; i < reponses.length; i++){
        Nreponses[i].className =Nreponses[i].className.replace("active", "");
    }
    Nquestions[questionIndex -1].computedStyleMap.display = "block";
    Nreponses[questionIndex-1].className += "active";
// NQuestion.innerText = questions.question
 }























// const jeu = document.getElementById("start")
// const questionElement = document.getElementById('NomQuestion')
// const reponseElement = document.getElementById('answer')

// let questionpose, currentQuestionIndex;
// jeu.addEventListener('click',jouer)

// function game(){
// window.location.href="../Prototype/test.php";
// }
//  function jouer(){
//  console.log("joue le jeu")
 
//  questionpose = questions.sort(()=> Math.random() - .5)
//      currentQuestionIndex = 0
//   suivant()

//  }
// function suivant(){
//   montre(questionpose[currentQuestionIndex])
// }
// //Fonction permettant d'afficher les questions et les réponses
// function montre(question){
//     questionElement.innerText = questions.question
//     question.reponse.forEach(reponse => {
//        const button = document.getElementById('ans')
//        button.innerText = reponse.text
//        if (reponse.correct){
//            button.dataset.correct = reponse.correct
//        }
//        button.addEventListener('click',choisir)
    
//    });
// }
// //Fonction pour choisir les réponses
//    function choisir(e){

//    }
  
//    //Création des questions
//   const questions = [
//     {
//         question: 'Qui est le président de la France?',
//         reponse : [
//             {text: 'Joe Biden' ,correct : false },
//             {text: 'Emmanuel Macron' ,correct : true }
           
//         ]
//     }
//   ]
