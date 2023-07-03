
<?php include 'header.php'?>
     <body>

  
        <form method="post">
            <div class="testquizz">
            <label> "Inserez une question ?" </label>
                <p id="NomQuestion"></p>               
            </div>
    
        </form>
      

  <div class="container text-center">
    <div class="row w-50"> 
      <button id="ans1" type="button" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block">rep 1 </button>
      <button id="ans2" type="button" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block">rep 2 </button>
      <div class="w-100"></div>
      <button id="ans3" type="button" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block">rep 3 </button>
      <button id="ans4" type="button" class="p-3 w-60 col-lg-6 btn btn-light border-dark border w-10 btn-lg btn-block">rep 4 </button>
    </div>
  </div>

        <div class="Timer">
            <p id="Countdown"></p>
        </div>
  
        <script src="js.js"></script>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

