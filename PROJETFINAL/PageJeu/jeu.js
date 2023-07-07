
var timeLeft = 30;
var timerId = setInterval(countdown, 1000);
//fonction chronomètre
    function countdown() {
        if (timeLeft == -1) {
            timeLeft = 30;
            plusSlides(0);
            } else {
                document.getElementById('Countdown').innerHTML = timeLeft;
                timeLeft--;
            }
            }
//définition de la variable slideIndex Score et affichage de la première question
var slideIndex = 1;
var score = 0;
showSlides(slideIndex, 0);

//fonction pour aller de question en question
function plusSlides(n) {
    showSlides(slideIndex += 1, n);
    console.log(score);
}


//fonction pour gérer l'affichage
function showSlides(n, b) {
    score = score+b;
    var slides = document.getElementsByClassName("hide");
    //Si toutes les questions ont été répondus affichage du bouton Terminer et masquage du timer
    if (n > slides.length && n!=1) {
            var formscore = document.getElementById("score");
            formscore.style.display = "block";
            var countdown = document.getElementById('Countdown');
            countdown.style.display = "none";
            timeLeft  = -100;
}  
    //S'il reste des questions, on masque la question actuel et on affiche la question suivante (et on reset le timer à 30)
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }

        slides[slideIndex-1].style.display = "block";  
        timeLeft = 30;
    }

function AddPostData() {
        var formTerminer = document.forms['envoie-score'];
        formTerminer.elements.score.value = score;
        console.log(score);
}

            
            
            
            
            
            
            
        
            
            
            
            
            
            
            
            
            
    
            
            
            
            
            
            