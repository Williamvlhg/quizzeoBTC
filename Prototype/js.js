
var timeLeft = 30;

    var timerId = setInterval(countdown, 1000);
    for (var nbq = 20; nbq > 0; nbq = nbq - 1){
        function countdown() {
            if (timeLeft == -1) {
                timeLeft = 30;
                document.getElementsById("NomQuestion").innerHTML = "Question numéro : " + nbq ;

            } else {
                document.getElementById('Countdown').innerHTML = timeLeft;
                timeLeft--;
            }
            }
    }
    




/*var i;



setInterval(function(){if (i=31, i>0, i--){document.getElementById("Countdown").innerHTML = "Timer : " + i 
    }}),1000;





    var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
    
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
    
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      // Display the result in the element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
    
      // If the count down is finished, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);*/
    