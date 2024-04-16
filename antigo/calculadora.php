
    <br><br>
    <div class="form-container">
    <div class="container2">
        <div class="hugs"><h1>Introduz as classificações</h1></div><br>
        <form action="calc.php" id="myForm" method="post" class="jhk">
            <div class="category">
                <h2 class="calc">Português</h2>
                <input type="number" name="por10" min="0" max="20" step="1"required>
                <input type="number" name="por11" min="0" max="20" step="1"required>
                <input type="number" name="por12" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2 class="calc">Ed. Física</h2>
                <input type="number" name="mat10" min="0" max="20" step="1"required>
                <input type="number" name="mat11" min="0" max="20" step="1"required>
                <input type="number" name="mat12" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2 class="calc">Opção de curso</h2>
                <input type="number" name="edf10" min="0" max="20" step="1"required>
                <input type="number" name="edf11" min="0" max="20" step="1"required>
                <input type="number" name="edf12" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2 class="calc">Filosofia</h2>
                <input type="number" name="fil10" min="0" max="20" step="1"required>
                <input type="number" name="fil11" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2 class="calc">Inglês</h2>
                <input type="number" name="ing10" min="0" max="20" step="1"required>
                <input type="number" name="ing11" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2 class="calc">Opção 1</h2>
                <input type="number" name="fq10" min="0" max="20" step="1"required>
                <input type="number" name="fq11" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2 class="calc">Opção 2</h2>
                <input type="number" name="bi10" min="0" max="20" step="1"required>
                <input type="number" name="bi11" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2 class="calc">Opção 12º</h2>
                <input type="number" name="op1" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2 class="calc">Opção 12º</h2>
                <input type="number" name="op2" min="0" max="20" step="1"required>
            </div>
            <hr>
            <div class="category">
                <h2 class="calc">Exame</h2>
                <input type="number" name="ex1" min="0" max="20" step="1">
                <input type="number" name="ex2" min="0" max="20" step="1">
                <input type="number" name="ex3" min="0" max="20" step="1">
                <h6>(deixa vazio as caixas do exame que não precisas)</h6>
            </div>
            <div class="popup" ><button type="submit" id="fixrafada">Submeter</button>
            <span class="popuptext" id="myPopup">A tua média é <?php echo isset($_SESSION['media']) ? $_SESSION['media'] : ''; ?>
            </span>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function(){
         $('#myForm').submit(function(e){
          //e.preventDefault();
           /*$.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            
        });*/
        });
        });
        </script>
    </div>
    </div>
      <footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © Code crusaders, Ltd. All rights reserved. 
      </div>
    </div>
  </footer>
</body>
<script>
  function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
  }

  function doesUrlContainSubstring(substring) {
        // Get the current URL
        var url = window.location.href;
        
        // Check if the URL contains the substring
        if (url.indexOf(substring) !== -1) {
            // Substring found in the URL
            return true;
        } else {
            // Substring not found in the URL
            return false;
        }
  }

  if (doesUrlContainSubstring('media')) {
    myFunction();
  }
</script>

</html>