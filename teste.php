<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();
  ?>

  <head>
    <style>
        .gr{
            color: green;
        }
        .re{
            color: red;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Rumo ao Futuro</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>
<body>
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
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
                      <li><a href="cursos.php" class="active">Cursos</a></li>
                      <li><a href="calculadora.php">Calculadora</a></li>
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
      <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Cursos</a> / Recomendados</span>
          <h3>Cursos</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="section properties">
    <div class="container">
          <h4>Nesta página estão presentes os cursos que achamos mais relevantes nas universidades mais populares, cada curso tem a respetiva média de entrada e universidade. Os cursos estão organizados pelos resultados do <a href="quizz.php"> quiz</a>, se quiseres ver todos os cursos existentes <a href="https://www.dges.gov.pt/guias/indest.asp" target="_blank">clica aqui</a></h4><br><br>      
          <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Mostrar todos</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Realista</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Investigação</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Artístico</a>
        </li>
        <li>
          <a href="#!" data-filter=".soc">Social</a>
        </li>
        <li>
          <a href="#!" data-filter=".ent">Enterprising</a>
        </li>
        <li>
          <a href="#!" data-filter=".con">Convencional</a>
        </li>
      </ul>
      <div class="row properties-box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia Informática.png" alt=""></a>
            <span class="category">IS. Técnico</span>
            <h6>18.1</h6>
              <span id="textToHighlight">
        <h4>Engenharia Informática</h4>
    </span>
    <script>
        var s = 20;

        var textElement = document.getElementById('textToHighlight');
        if (s >= 18.1) {
            textElement.classList.add('gr');
        }
        else if (s < 18.1) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>