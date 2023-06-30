
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


// function jouer(){
//          window.location.href="../Prototype/test.php";
//         console.log("joue le jeu");
// }











































//Deuxième code

//const questionElement = document.getElementById('NomQuestion')
//const reponseElement = document.getElementById('answer')

 //Création des questions
// const questions = [
//     {
//         question: 'Qui est le président de la France?',
//         reponses : [
//             {text: 'Joe Biden' ,correct : false },
//             {text: 'Emmanuel Macron' ,correct : true },
//             {text: 'Paul Biya' ,correct : false },
//             {text: 'Volodimir Zelensky' ,correct : false},
           
//         ]
//     },
//     {
//         question: 'Qui est le président de la France?',
//         reponses : [
//             {text: 'Joe Biden' ,correct : false },
//             {text: 'Emmanuel Macron' ,correct : true },
//             {text: 'Paul Biya' ,correct : false },
//             {text: 'Volodimir Zelensky' ,correct : false},
           
//         ]
//     }
// ]
//  var NQuestion = document.getElementById('NomQuestion');
//  var NReponse = document.getElementById('answer');
// var  RButton = document.getElementById('next');
//  let currentQuestionIndex = 0 ;
//  let score = 0;

//  function jouer(){
//     window.location.href="../Prototype/test.php";
//      console.log("joue le jeu");
//      currentQuestionIndex = 0;
//      score = 0;
//      RButton.innerHTML = "rep1";
//      RButton.innerHTML = "rep2";
//      RButton.innerHTML = "rep3";
//      RButton.innerHTML = "rep4";
//      montrerQuestion();
//  }
//   function montrerQuestion(){
//     let currentQuestion = questions[currentQuestionIndex];
//     let questionNo = currentQuestionIndex + 1;
//     NQuestion.innerHTML = questionNo + ".  " + currentQuestion.question;
//     currentQuestion.reponses.forEach(reponse => {
//         const button = document.createElement("button");
//         button.innerHTML = reponse.text;
//         button.classList.add("btn");
//         reponseButton.appendChild(button);
//     })
//   }








//Premier code

// const questions = [
//          {
//       question: 'Qui est le président de la France?',
//             reponses : [
//                  {text: 'Joe Biden' ,correct : false },
//                 {text: 'Emmanuel Macron' ,correct : true },
//                  {text: 'Paul Biya' ,correct : false },
//                  {text: 'Volodimir Zelensky' ,correct : false},
         
//              ]
//          },
//    {
//            question: 'Qui est le président de la France?',
//              reponses : [
//                  {text: 'Joe Biden' ,correct : false },
//                  {text: 'Emmanuel Macron' ,correct : true },
//                  {text: 'Paul Biya' ,correct : false },
//                  {text: 'Volodimir Zelensky' ,correct : false},
               
//              ]
//          }
//      ]













// const jeu = document.getElementById("start")
// let questionpose, currentQuestionIndex;
// //jeu.addEventListener('click',jouer)

//   function jouer(){
//  window.location.href="../Prototype/test.php";
//   console.log("joue le jeu")
//   questionpose = questions.sort(()=> Math.random() - .5)
//       currentQuestionIndex = 0
//    suivant()

//   }
//   function suivant(){
//     montre(questionpose[currentQuestionIndex])
//   }
//   //Fonction permettant d'afficher les questions et les réponses
//  function montre(question){
//      var NQuestion = document.getElementById("NomQuestion")
//       NQuestion.innerText = question.question
// //     question.reponse.forEach(reponse => {
// //    const button = document.getElementById('ans')
// //         button.innerText = reponse.text
// //         if (reponse.correct){
// //             button.dataset.correct = reponse.correct
// //        }
// //        button.addEventListener('click',choisir)
    
// //    });
// }
// //Fonction pour choisir les réponses
// //    function choisir(e){

//   // }
  
//    //Création des questions
