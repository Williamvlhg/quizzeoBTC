var questions = [
    {
      question: "Quelle est la capitale de la France ?",
      options: ["Paris", "Londres", "Rome", "Madrid"],
      answer: "Paris"
    },
    {
      question: "Quelle est la capitale de l'Allemagne ?",
      options: ["Berlin", "Moscou", "Vienne", "Athènes"],
      answer: "Berlin"
    },
    // Ajoutez ici les autres questions avec leurs réponses
    // ...
  ];
  
  var currentQuestion = 0;
  var score = 0;
  var timeLeft = 30;
  var timer;
  
  function displayQuestion() {
    var questionElem = document.getElementById("question");
    var optionsElem = document.getElementById("options");
    var timerElem = document.getElementById("timer");
    var resultElem = document.getElementById("result");
  
    questionElem.textContent = questions[currentQuestion].question;
    optionsElem.innerHTML = "";
  
    // Afficher les options de réponse
    for (var i = 0; i < questions[currentQuestion].options.length; i++) {
      var option = document.createElement("div");
      option.className = "option";
      option.textContent = questions[currentQuestion].options[i];
      option.addEventListener("click", checkAnswer);
      optionsElem.appendChild(option);
    }
  
    // Afficher le temps restant
    timerElem.textContent = "Temps restant : " + timeLeft + "s";
  
    // Réinitialiser le résultat
    resultElem.textContent = "";
  
    // Lancer le compte à rebours
    timer = setInterval(updateTimer, 1000);
  }
  
  function updateTimer() {
    var timerElem = document.getElementById("timer");
  
    if (timeLeft > 0) {
      timeLeft--;
      timerElem.textContent = "Temps restant : " + timeLeft + "s";
    } else {
      clearInterval(timer);
      checkAnswer();
    }
  }
  
  function checkAnswer(event) {
    clearInterval(timer);
  
    var resultElem = document.getElementById("result");
  
    if (event && event.target.textContent === questions[currentQuestion].answer) {
      score++;
      resultElem.textContent = "Correct !";
    } else if (event) {
      resultElem.textContent = "Incorrect !";
    }
  
    currentQuestion++;
  
    if (currentQuestion < questions.length) {
      setTimeout(displayQuestion, 1000);
    } else {
      showFinalScore();
    }
  }
  
  function showFinalScore() {
    var questionElem = document.getElementById("question");
    var optionsElem = document.getElementById("options");
    var timerElem = document.getElementById("timer");
    var resultElem = document.getElementById("result");
  
    questionElem.textContent = "Quiz terminé !";
    optionsElem.innerHTML = "";
    timerElem.textContent = "";
    resultElem.textContent = "Score final : " + score + " sur " + questions.length;
  }
  
  // Lancer le quizz
  displayQuestion();