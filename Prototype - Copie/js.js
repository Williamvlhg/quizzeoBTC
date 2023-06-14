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