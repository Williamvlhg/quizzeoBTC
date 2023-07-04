
    <?php include "verification.php";;
    include "../header.php"; ?>
        <div class="Timer"> 
            <p id="Countdown"></p>
        </div>
    <?php if(!isset($_POST['start-game'])){?>
        <form method="post">
      <input id="submit" type="submit" name="start-game" value="Commencer le jeu">
    </form>
    <?php }?>
    <?php include "processusjeu.php";?>
        <script src="../PageListing/test.js"></script>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>

