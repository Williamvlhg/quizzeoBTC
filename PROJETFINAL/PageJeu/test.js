
var timeLeft = 30;
var timerId = setInterval(countdown, 1000);

    function countdown() {
        if (timeLeft == -1) {
            timeLeft = 30;
            plusSlides(1);
            } else {
                document.getElementById('Countdown').innerHTML = timeLeft;
                timeLeft--;
            }
            }
var slideIndex = 1;
var score = 0;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += 1);
    score = score + n;
    console.log(slideIndex);
}

function showSlides(n) {
    var slides = document.getElementsByClassName("hide");
    if (n > slides.length && n!=1) {
            var formscore = document.getElementById("score");
            formscore.style.display = "block";
            var countdown = document.getElementById('Countdown');
            countdown.style.display = "none";
            timeLeft  = -100;
}  

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

            
            
            
            
            
            
            
        
            
            
            
            
            
            
            
            
            
    
            
            
            
            
            
            