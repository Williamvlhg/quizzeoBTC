
console.log("test")
var timeLeft = 30;

    var timerId = setInterval(countdown, 1000);
    //for (var nbq = 20; nbq > 0; nbq = nbq - 1){
        function countdown() {//setTimeout(function(){window.location ='../PageListing/index.php';}, 10*1000);
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
                timeLeft = 30;
                console.log(slideIndex);
                score = score + n;
            }

              function showSlides(n) {
              var slides = document.getElementsByClassName("hide");
              if (n > slides.length) {slideIndex = 1;}    
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              if (slideIndex == 20){
                window.location.href='résultat.php';
                exit;
              }
              slides[slideIndex-1].style.display = "block";  
            }
  

            document.getElementById('score').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting normally
    
                // Retrieve the variable value
                var variable = document.getElementsByName('score')[0].value;
    
                // Create a POST request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'résultat.php', true);
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
                // Handle the response
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        alert(xhr.responseText);
                    } else {
                        alert('Error: ' + xhr.statusText);
                    }
                };
    
                // Create the data to be sent in the POST request
                var data = 'score=' + encodeURIComponent(variable) + '&score=' + encodeURIComponent(score);
    
                // Send the POST request
                xhr.send(data);
            });
            
            
            
            
            
            
            
            
        
            
            
            
            
            
            
            
            
            
    
            
            
            
            
            
            