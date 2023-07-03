// //Variable de bouton de démarrage
 const startButton =document.getElementById('start-btn')

// //Variable de bouton permettant d'aller à la question suivante
// const boutonSuivant =document.getElementById('next-btn')

// // Variable affichage du quizz
// const questionContainer = document.getElementById('question-container')
startButton.addEventListener('click',startGame)
// boutonSuivant.addEventListener('click',() => {
//     // currentQuestionIndex++
//     // setQuestionSuivante()
// })
// const questionElement = document.getElementById('question')
// const answerElement = document.getElementById('answer-button')
// let questionpose, currentQuestionIndex

// //Fonction jouer et affichage des questions aléatoirement
 function startGame(){
 console.log('Joue le jeu')//Ceci sert à vérifier que la fonction fonctionne.
 startButton.classList.add('hide')//Ceci permet d'ajouter un masquage de la partie jeu
// questionContainer.classList.remove('hide')
// questionpose = questions.sort(() => Math.random() - .5)
// currentQuestionIndex = 0
// setQuestionSuivante()
 }

// //Fonction pour aller à la question suivante
// function setQuestionSuivante(){
//     // resetState()
//     montrerQuestion(questionpose[currentQuestionIndex])
// }

// //Fonction pour afficher les questions et les réponses
// function montrerQuestion(question){
// questionElement.innerText =question.question
// question.answer.forEach(answer => {
//     const button = document.createElement('button')
//     button.innerText = answer.text
//     button.classList.add('btn')
//     if(answer.correct){
//     button.dataset.correct = answer.correct
    
//     } 
//     button.addEventListener('click',choisir)
//     answerElement.appendChild(button)
// });
// }
// // function resetState(){
// //     // clearStatusClass(document.body)
// //     boutonSuivant.classList.add('hide')
// //     while(answerElement.firstChild){
// //         answerElement.removeChild(answerElement.firstChild)
// //     }
// // }

// // function choisir(){
// //     const choice = e.target
// //     const correct = choice.dataset.correct
// //     setStatusClass(document.body, correct)
// //     Array.from(answerElement.children).forEach(button =>{
// //         setStatusClass(button, button.dataset.correct)
// //     })
// //     if(questionpose.length > currentQuestionIndex + 1){
// //        boutonSuivant.classList.remove('hide') 
// //     }else {
// //         startButton.innerText ='Restart'
// //         startButton.classList.remove('hide')
// //     }
    
// // }
// // function setStatusClass(element, correct){
// // clearStatusClass(element)
// // if(correct){
// //     element.classList.add('correct')
// // }
// // else{
// //     element.classList.add('wrong')
// // }
// // function clearStatusClass(element){
// //     element.classList.remove('correct')

// //     element.classList.remove('wrong')
// // }
// // }
// const questions = [
//     {
//         question: 'Qui a gangé la Coupe du Monde en 1998?',
//         answer: [
//             {text:'Brésil', correct:false},
//             {text:'France', correct:true},
//             {text:'Argentine', correct:false},
//             {text:'Belgique', correct:false}
//         ]
//     },
//     {
//         question: 'Comment s\'appelle la Grande Compétition de football?',
//         answer: [
//             {text:'La Liga', correct:false},
//             {text:'La Ligue des Champions', correct:true},
//             {text:'L\'Europa', correct:false},
//             {text:'La CAN', correct:false}
//         ]
//     }
// ]