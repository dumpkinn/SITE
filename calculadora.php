<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Rumo ao Futuro</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="calculadora.css"/>
  </head>
<body>
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <body>
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                  <div class="sao">
                    <a href="index.html" class="logo">
                        <h1>RUMO AO FUTURO</h1>
                    </a>
                    </div>
                    <ul class="nav">
                      <li><a href="index.html">Início</a></li>
                      <li><a href="cursos.php">Cursos</a></li>
                      <li><a href="calculadora.php" class="active">Calculadora</a></li>
                      <li><a href="quizz.php">Quiz</a></li>
                      <li><a href="mapa.php">Mapa</a></li>
                      <li><a href="curriculo.php">Currículo</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
  </header>
    <div class="container2">
        <h1>Introduz as classificações</h1>
        <form action="calc.php" id="myForm" method="post">
            <div class="category">
                <h2>Português</h2>
                <input type="number" name="por10" min="0" max="20" step="1"required>
                <input type="number" name="por11" min="0" max="20" step="1"required>
                <input type="number" name="por12" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2>Ed. Física</h2>
                <input type="number" name="mat10" min="0" max="20" step="1"required>
                <input type="number" name="mat11" min="0" max="20" step="1"required>
                <input type="number" name="mat12" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2>Opção de curso</h2>
                <input type="number" name="edf10" min="0" max="20" step="1"required>
                <input type="number" name="edf11" min="0" max="20" step="1"required>
                <input type="number" name="edf12" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2>Filosofia</h2>
                <input type="number" name="fil10" min="0" max="20" step="1"required>
                <input type="number" name="fil11" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2>Inglês</h2>
                <input type="number" name="ing10" min="0" max="20" step="1"required>
                <input type="number" name="ing11" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2>Opção 1</h2>
                <input type="number" name="fq10" min="0" max="20" step="1"required>
                <input type="number" name="fq11" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2>Opção 2</h2>
                <input type="number" name="bi10" min="0" max="20" step="1"required>
                <input type="number" name="bi11" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2>Opção 12º</h2>
                <input type="number" name="op1" min="0" max="20" step="1"required>
            </div>

            <div class="category">
                <h2>Opção 12º</h2>
                <input type="number" name="op2" min="0" max="20" step="1"required>
            </div>
            <hr>
            <div class="category">
                <h2>Exame</h2>
                <input type="number" name="ex1" min="0" max="20" step="1"required>
                <input type="number" name="ex2" min="0" max="20" step="1">
                <input type="number" name="ex3" min="0" max="20" step="1">
                <h6>(deixa vazio as caixas que não precisas)</h6>
            </div>
            <div class="popup" onclick="myFunction()"><button type="submit">Submeter</button>
            <span class="popuptext" id="myPopup">A tua média é <?php echo isset($_SESSION['media']) ? $_SESSION['media'] : ''; ?>
            </span>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function(){
    // Get the current URL
    var url = window.location.href;

    // Create a URLSearchParams object from the URL
    var searchParams = new URLSearchParams(url);

    // Check if the 'media' parameter exists
    if (searchParams.has('media')) {
        // Media parameter is set
        $('#myForm').submit(function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                // Additional AJAX settings if needed
            });
        });
    }
});
        </script>
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
exit();
</script>

</html>