var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += 1);
    score = score + n;
}

function showSlides(n) {
    var slides = document.getElementsByClassName("hide");
    if (n > slides.length) {slideIndex = 1;}    
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        if (slideIndex == 20){
            var formscore = document.getElementById("score");
            formscore.style.display = "block";
            var countdown = document.getElementById('Countdown');
            countdown.style.display = "none";
            timeLeft  = -100;
            return;
        }
        slides[slideIndex-1].style.display = "block";  
        timeLeft = 30;
    }

function AddPostData() {
        var formTerminer = document.forms['envoie-score'];
        formTerminer.elements.score.value = score;
        console.log(score);
}

            
            
            
            
            
            
            
        
            
            
            
            
            
            
            
            
            
    
            
            
            
            
            
            