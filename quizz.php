<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Questionario</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="icon" href="icon.png" type="image/gif" sizes="16x16">
    <style type="text/css">
    button {
    display: block;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}
.container3 button{
    width: 791px;
}

button:hover {
    background-color: #0056b3;
}
        .img_div { float: left; }
        [type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}
[type=radio] img {
  cursor: pointer;
}
[type=radio]:checked img {
  outline: 2px solid #f00;
}
    </style>
</head>
<body>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                  <div class="sao">
                    <a href="index.html" class="logo">
                        <img src="LOGO.png" width="300">
                    </a>
                    </div>
                    <ul class="nav">
                      <li><a href="cursos.php">Cursos</a></li>
                      <li><a href="calculadora.php">Calculadora</a></li>
                      <li><a href="quizz.php" class="active">Quiz</a></li>
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
          <span class="breadcrumb">Descobre / Futuro</span>
          <h3>QUIZ</h3>
        </div>
      </div>
    </div>
  </div>
<div class="container3">
    <br><br><br>
    <div class="accordion-body">Para cada uma das questões escolhe a opção que apresenta a situação em que preferias estar e a opção que menos gostarias de vivenciar. Quando submeteres as tuas respostas será assinalado um tipo de personalidade e terás a opção de veres os cursos que nós achamos que deves escolher. Para saberes que cursos tens média para entrar <a href="calculadora.php"> calcula-a aqui.</a></div>
    <br><br><br>
<form action="quiz.php" id="myForm" method="post">
<h1>Questão 1</h1><br>
          <div class="img_div"><figcaption>Ir para o escritório</figcaption><img src="q11.png"><br><br>
          <div class="cc-selector">
          <input type="radio" name="q1" id="visa" value="-1"/>
          <label class="drinkcard-cc visa"  for="visa"></label>
          <input type="radio" name="u1" id="mastercard" value="1" />
          <label class="drinkcard-cc mastercard"  for="mastercard"></label>
          </div>
          </div>
          <div class="img_div"><figcaption>Investigador</figcaption><img src="q12.png"><br><br>
          <div class="cc-selector">
          <input type="radio" name="q1" value="2" id="visa1"/>
          <label class="drinkcard-cc visa" for="visa1"></label>
          <input type="radio" name="u1" value="-2" id="mastercard1"/>
          <label class="drinkcard-cc mastercard"  for="mastercard1"></label>
          </div>
          </div>
          <div class="img_div"><figcaption>Arquiteto e Engenheiro</figcaption><img src="q13.png"><br><br>
          <div class="cc-selector">
          <input type="radio" name="q1" value="1" id="visa2"/>
          <label class="drinkcard-cc visa"  for="visa2"></label>
          <input type="radio" name="u1" value="-1" id="mastercard2"/>
          <label class="drinkcard-cc mastercard"  for="mastercard2"></label>
          </div>
          </div>
          <div class="img_div"><figcaption>Fotografia Creativa</figcaption><img src="q14.png"><br><br>
          <div class="cc-selector">
          <input type="radio" name="q1" value="-2" id="visa3"/>
          <label class="drinkcard-cc visa"  for="visa3"></label>
          <input type="radio" name="u1" value="2" id="mastercard3"/>
          <label class="drinkcard-cc mastercard"  for="mastercard3"></label>
          </div>
          </div><br>
          <br><br><br><br><br>
<h1>Questão 2</h1><br>     
<div class="img_div"><figcaption>Leiloeiro</figcaption><img src="q21.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q2" id="visa4" value="-2"/>
  <label class="drinkcard-cc visa"  for="visa4"></label>
  <input type="radio" name="u2" id="mastercard4" value="2" />
  <label class="drinkcard-cc mastercard"  for="mastercard4"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Professor</figcaption><img src="q22.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q2" value="-1" id="visa5"/>
  <label class="drinkcard-cc visa" for="visa5"></label>
  <input type="radio" name="u2" value="1" id="mastercard5"/>
  <label class="drinkcard-cc mastercard"  for="mastercard5"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Mecânico</figcaption><img src="q23.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q2" value="1" id="visa6"/>
  <label class="drinkcard-cc visa"  for="visa6"></label>
  <input type="radio" name="u2" value="-1" id="mastercard6"/>
  <label class="drinkcard-cc mastercard"  for="mastercard6"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Químico</figcaption><img src="q24.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q2" value="2" id="visa7"/>
  <label class="drinkcard-cc visa"  for="visa7"></label>
  <input type="radio" name="u2" value="-2" id="mastercard7"/>
  <label class="drinkcard-cc mastercard"  for="mastercard7"></label>
  </div>
  </div><br>
  <br><br><br><br><br>   
<h1>Questão 3</h1><br>
<div class="img_div"><figcaption>Monitoriza e regista</figcaption><img src="q31.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q3" id="visa8" value="2"/>
  <label class="drinkcard-cc visa"  for="visa8"></label>
  <input type="radio" name="u3" id="mastercard8" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard8"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Vende e convence</figcaption><img src="q32.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q3" value="1" id="visa9"/>
  <label class="drinkcard-cc visa" for="visa9"></label>
  <input type="radio" name="u3" value="-1" id="mastercard9"/>
  <label class="drinkcard-cc mastercard"  for="mastercard9"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Desenha e pinta</figcaption><img src="q33.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q3" value="-2" id="visa10"/>
  <label class="drinkcard-cc visa"  for="visa10"></label>
  <input type="radio" name="u3" value="2" id="mastercard10"/>
  <label class="drinkcard-cc mastercard"  for="mastercard10"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ajuda</figcaption><img src="q34.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q3" value="-1" id="visa11"/>
  <label class="drinkcard-cc visa"  for="visa11"></label>
  <input type="radio" name="u3" value="1" id="mastercard11"/>
  <label class="drinkcard-cc mastercard"  for="mastercard11"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 4</h1><br>
<div class="img_div"><figcaption>Trabalhador Social</figcaption><img src="q41.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q4" id="visa12" value="-1"/>
  <label class="drinkcard-cc visa"  for="visa12"></label>
  <input type="radio" name="u4" id="mastercard12" value="1" />
  <label class="drinkcard-cc mastercard"  for="mastercard12"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Admistrador</figcaption><img src="q42.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q4" value="2" id="visa13"/>
  <label class="drinkcard-cc visa" for="visa13"></label>
  <input type="radio" name="u4" value="-    2" id="mastercard13"/>
  <label class="drinkcard-cc mastercard"  for="mastercard13"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Bombeiro</figcaption><img src="q43.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q4" value="1" id="visa14"/>
  <label class="drinkcard-cc visa"  for="visa14"></label>
  <input type="radio" name="u4" value="-1" id="mastercard14"/>
  <label class="drinkcard-cc mastercard"  for="mastercard14"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Gerente</figcaption><img src="q44.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q4" value="-2" id="visa15"/>
  <label class="drinkcard-cc visa"  for="visa15"></label>
  <input type="radio" name="u4" value="2" id="mastercard15"/>
  <label class="drinkcard-cc mastercard"  for="mastercard15"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
  
<h1>Questão 5</h1><br>
<div class="img_div"><figcaption>Criação de joalharia</figcaption><img src="q51.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q5" id="visa16" value="1"/>
  <label class="drinkcard-cc visa"  for="visa16"></label>
  <input type="radio" name="u5" id="mastercard16" value="-1" />
  <label class="drinkcard-cc mastercard"  for="mastercard16"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Guiar crianças</figcaption><img src="q52.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q5" value="-2" id="visa17"/>
  <label class="drinkcard-cc visa" for="visa17"></label>
  <input type="radio" name="u5" value="2" id="mastercard17"/>
  <label class="drinkcard-cc mastercard"  for="mastercard17"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Diagnósticos</figcaption><img src="q53.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q5" value="2" id="visa18"/>
  <label class="drinkcard-cc visa"  for="visa18"></label>
  <input type="radio" name="u5" value="-2" id="mastercard18"/>
  <label class="drinkcard-cc mastercard"  for="mastercard18"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Tirar notas</figcaption><img src="q54.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q5" value="-1" id="visa19"/>
  <label class="drinkcard-cc visa"  for="visa19"></label>
  <input type="radio" name="u5" value="1" id="mastercard19"/>
  <label class="drinkcard-cc mastercard"  for="mastercard19"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 6</h1><br>  
<div class="img_div"><figcaption>Esboça e desenha</figcaption><img src="q61.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q6" id="visa20" value="1"/>
  <label class="drinkcard-cc visa"  for="visa20"></label>
  <input type="radio" name="u6" id="mastercard20" value="-1" />
  <label class="drinkcard-cc mastercard"  for="mastercard20"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Mecânico</figcaption><img src="q62.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q6" value="2" id="visa21"/>
  <label class="drinkcard-cc visa" for="visa21"></label>
  <input type="radio" name="u6" value="-2" id="mastercard21"/>
  <label class="drinkcard-cc mastercard"  for="mastercard21"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ajuda defecientes</figcaption><img src="q63.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q6" value="-2" id="visa22"/>
  <label class="drinkcard-cc visa"  for="visa22"></label>
  <input type="radio" name="u6" value="2" id="mastercard22"/>
  <label class="drinkcard-cc mastercard"  for="mastercard22"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Gerente de negócios</figcaption><img src="q64.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q6" value="-1" id="visa23"/>
  <label class="drinkcard-cc visa"  for="visa23"></label>
  <input type="radio" name="u6" value="1" id="mastercard23"/>
  <label class="drinkcard-cc mastercard"  for="mastercard23"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 7</h1><br>
<div class="img_div"><figcaption>Estudar</figcaption><img src="q71.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q7" id="visa24" value="2"/>
  <label class="drinkcard-cc visa"  for="visa24"></label>
  <input type="radio" name="u7" id="mastercard24" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard24"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Estilista e decorar</figcaption><img src="q72.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q7" value="-2" id="visa25"/>
  <label class="drinkcard-cc visa" for="visa25"></label>
  <input type="radio" name="u1" value="2" id="mastercard25"/>
  <label class="drinkcard-cc mastercard"  for="mastercard25"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Faz negócios</figcaption><img src="q73.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q7" value="-1" id="visa26"/>
  <label class="drinkcard-cc visa"  for="visa26"></label>
  <input type="radio" name="u7" value="1" id="mastercard26"/>
  <label class="drinkcard-cc mastercard"  for="mastercard26"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Arranja</figcaption><img src="q74.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q7" value="1" id="visa28"/>
  <label class="drinkcard-cc visa"  for="visa28"></label>
  <input type="radio" name="u7" value="-2" id="mastercard28"/>
  <label class="drinkcard-cc mastercard"  for="mastercard28"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 8</h1><br> 
<div class="img_div"><figcaption>Conselheiro Social</figcaption><img src="q81.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q8" id="visa29" value="-2"/>
  <label class="drinkcard-cc visa"  for="visa29"></label>
  <input type="radio" name="u8" id="mastercard29" value="2" />
  <label class="drinkcard-cc mastercard"  for="mastercard29"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Cientista molecular</figcaption><img src="q82.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q8" value="2" id="visa30"/>
  <label class="drinkcard-cc visa" for="visa30"></label>
  <input type="radio" name="u8" value="-2" id="mastercard30"/>
  <label class="drinkcard-cc mastercard"  for="mastercard30"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Contabilista</figcaption><img src="q83.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q8" value="-1" id="visa31"/>
  <label class="drinkcard-cc visa"  for="visa31"></label>
  <input type="radio" name="u8" value="1" id="mastercard31"/>
  <label class="drinkcard-cc mastercard"  for="mastercard31"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Veterinário</figcaption><img src="q84.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q8" value="1" id="visa32"/>
  <label class="drinkcard-cc visa"  for="visa32"></label>
  <input type="radio" name="u8" value="-1" id="mastercard32"/>
  <label class="drinkcard-cc mastercard"  for="mastercard32"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 9</h1><br>
<div class="img_div"><figcaption>CEO</figcaption><img src="q91.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q9" id="visa33" value="-2"/>
  <label class="drinkcard-cc visa"  for="visa33"></label>
  <input type="radio" name="u9" id="mastercard33" value="2" />
  <label class="drinkcard-cc mastercard"  for="mastercard33"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Admistração</figcaption><img src="q92.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q9" value="1" id="visa34"/>
  <label class="drinkcard-cc visa" for="visa34"></label>
  <input type="radio" name="u9" value="-1" id="mastercard34"/>
  <label class="drinkcard-cc mastercard"  for="mastercard34"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ganhar conhecimento</figcaption><img src="q93.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q9" value="2" id="visa35"/>
  <label class="drinkcard-cc visa"  for="visa35"></label>
  <input type="radio" name="u9" value="-2" id="mastercard35"/>
  <label class="drinkcard-cc mastercard"  for="mastercard35"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Arquitétura e terreno</figcaption><img src="q94.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q9" value="-1" id="visa36"/>
  <label class="drinkcard-cc visa"  for="visa36"></label>
  <input type="radio" name="u9" value="1" id="mastercard36"/>
  <label class="drinkcard-cc mastercard"  for="mastercard36"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 10</h1><br>
<div class="img_div"><figcaption>Tecníco Dental</figcaption><img src="q101.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q10" id="visa37" value="2"/>
  <label class="drinkcard-cc visa"  for="visa37"></label>
  <input type="radio" name="u10" id="mastercard37" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard37"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Anfitrião</figcaption><img src="q102.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q10" value="-2" id="visa38"/>
  <label class="drinkcard-cc visa" for="visa38"></label>
  <input type="radio" name="u10" value="2" id="mastercard38"/>
  <label class="drinkcard-cc mastercard"  for="mastercard38"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Desenha</figcaption><img src="q103.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q10" value="1" id="visa39"/>
  <label class="drinkcard-cc visa"  for="visa39"></label>
  <input type="radio" name="u10" value="-1" id="mastercard39"/>
  <label class="drinkcard-cc mastercard"  for="mastercard39"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Secretário de Informação</figcaption><img src="q104.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q10" value="-1" id="visa40"/>
  <label class="drinkcard-cc visa"  for="visa40"></label>
  <input type="radio" name="u10" value="1" id="mastercard40"/>
  <label class="drinkcard-cc mastercard"  for="mastercard40"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 11</h1><br>
<div class="img_div"><figcaption>Controlador</figcaption><img src="q111.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q11" id="visa41" value="-1"/>
  <label class="drinkcard-cc visa"  for="visa41"></label>
  <input type="radio" name="u11" id="mastercard41" value="1" />
  <label class="drinkcard-cc mastercard"  for="mastercard41"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Corretor de bolsa</figcaption><img src="q112.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q11" value="-2" id="visa42"/>
  <label class="drinkcard-cc visa" for="visa42"></label>
  <input type="radio" name="u11" value="2" id="mastercard42"/>
  <label class="drinkcard-cc mastercard"  for="mastercard42"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Analista de infromção</figcaption><img src="q113.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q11" value="1" id="visa43"/>
  <label class="drinkcard-cc visa"  for="visa43"></label>
  <input type="radio" name="u11" value="-1" id="mastercard43"/>
  <label class="drinkcard-cc mastercard"  for="mastercard43"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Engenheiro</figcaption><img src="q114.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q11" value="2" id="visa44"/>
  <label class="drinkcard-cc visa"  for="visa44"></label>
  <input type="radio" name="u11" value="-2" id="mastercard44"/>
  <label class="drinkcard-cc mastercard"  for="mastercard44"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 12</h1><br>
<div class="img_div"><figcaption>Ciência</figcaption><img src="q121.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q12" id="visa45" value="2"/>
  <label class="drinkcard-cc visa"  for="visa45"></label>
  <input type="radio" name="u12" id="mastercard45" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard45"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ferramentas</figcaption><img src="q122.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q12" value="1" id="visa46"/>
  <label class="drinkcard-cc visa" for="visa46"></label>
  <input type="radio" name="u12" value="-1" id="mastercard46"/>
  <label class="drinkcard-cc mastercard"  for="mastercard46"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Suporte médico</figcaption><img src="q123.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q12" value="-1" id="visa47"/>
  <label class="drinkcard-cc visa"  for="visa47"></label>
  <input type="radio" name="u12" value="1" id="mastercard47"/>
  <label class="drinkcard-cc mastercard"  for="mastercard47"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Teatro e arte</figcaption><img src="q124.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q12" value="-2" id="visa48"/>
  <label class="drinkcard-cc visa"  for="visa48"></label>
  <input type="radio" name="u12" value="2" id="mastercard48"/>
  <label class="drinkcard-cc mastercard"  for="mastercard48"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 13</h1><br>
<div class="img_div"><figcaption>Pensamento lógico</figcaption><img src="q131.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q13" id="visa49" value="2"/>
  <label class="drinkcard-cc visa"  for="visa49"></label>
  <input type="radio" name="u13" id="mastercard49" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard49"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ordenar e organizar</figcaption><img src="q132.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q13" value="1" id="visa50"/>
  <label class="drinkcard-cc visa" for="visa50"></label>
  <input type="radio" name="u13" value="-1" id="mastercard50"/>
  <label class="drinkcard-cc mastercard"  for="mastercard50"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Dar direções</figcaption><img src="q133.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q13" value="-1" id="visa51"/>
  <label class="drinkcard-cc visa"  for="visa51"></label>
  <input type="radio" name="u13" value="1" id="mastercard51"/>
  <label class="drinkcard-cc mastercard"  for="mastercard51"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ensinar e explicar</figcaption><img src="q134.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q13" value="-2" id="visa52"/>
  <label class="drinkcard-cc visa"  for="visa52"></label>
  <input type="radio" name="u13" value="2" id="mastercard52"/>
  <label class="drinkcard-cc mastercard"  for="mastercard52"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 14</h1><br>
<div class="img_div"><figcaption>Cuida dos idosos</figcaption><img src="q141.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q14" id="visa53" value="-1"/>
  <label class="drinkcard-cc visa"  for="visa53"></label>
  <input type="radio" name="u14" id="mastercard53" value="1" />
  <label class="drinkcard-cc mastercard"  for="mastercard53"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Agente imobiliário</figcaption><img src="q142.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q14" value="1" id="visa60"/>
  <label class="drinkcard-cc visa" for="visa60"></label>
  <input type="radio" name="u14" value="-1" id="mastercard60"/>
  <label class="drinkcard-cc mastercard"  for="mastercard60"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Fashion Designer</figcaption><img src="q143.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q14" value="-2" id="visa54"/>
  <label class="drinkcard-cc visa"  for="visa54"></label>
  <input type="radio" name="u14" value="2" id="mastercard54"/>
  <label class="drinkcard-cc mastercard"  for="mastercard54"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Resolver problemas</figcaption><img src="q144.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q14" value="2" id="visa55"/>
  <label class="drinkcard-cc visa"  for="visa55"></label>
  <input type="radio" name="u14" value="-2" id="mastercard55"/>
  <label class="drinkcard-cc mastercard"  for="mastercard55"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 15</h1><br>
<div class="img_div"><figcaption>Eletrónicos</figcaption><img src="q151.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q15" id="visa56" value="2"/>
  <label class="drinkcard-cc visa"  for="visa56"></label>
  <input type="radio" name="u15" id="mastercard56" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard56"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Escrita creativa</figcaption><img src="q152.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q15" value="-2" id="visa57"/>
  <label class="drinkcard-cc visa" for="visa57"></label>
  <input type="radio" name="u15" value="2" id="mastercard57"/>
  <label class="drinkcard-cc mastercard"  for="mastercard57"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Arquivar</figcaption><img src="q153.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q15" value="1" id="visa58"/>
  <label class="drinkcard-cc visa"  for="visa58"></label>
  <input type="radio" name="u15" value="-1" id="mastercard58"/>
  <label class="drinkcard-cc mastercard"  for="mastercard58"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Vendedor</figcaption><img src="q154.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q15" value="-1" id="visa59"/>
  <label class="drinkcard-cc visa"  for="visa59"></label>
  <input type="radio" name="u15" value="1" id="mastercard59"/>
  <label class="drinkcard-cc mastercard"  for="mastercard59"></label>
  </div>
  </div><br>
  <br><br><br><br><br>

<button type="submit" id="popupButton">Submeter</button>
</div>
</form>
</div>
 <div class="overlay" id="overlay">
<div class="sadfsdag" id="popup">
    <h2>Tu és <?php echo isset($_SESSION['rf']) ? $_SESSION['rf'] : ''; ?>!</h2>
    <p>Os teus traços são <?php echo isset($_SESSION['rd']) ? $_SESSION['rd'] : ''; ?>, se quiseres ver os cursos que te recomendamos, <a href="cursos.php?filter=<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>">Clica aqui.</a></p>
    <button id="closeButton">Fechar</button>
    </div>
</div>
</div>
</form>
</div>
</body>
<footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © Code crusaders, Ltd. All rights reserved. 
      </div>
    </div>
  </footer>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function(){
         $('#myForm').submit(function(e){
          //e.preventDefault();
          /* $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            
        });*/
        });
        });
</script>
<style type="text/css">
    .overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 999;
}

.sadfsdag {
  background-color: white;
  width: 400px;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.sadfsdag button{
    width: 100%;
    float: center;
}
</style>
<script type="text/javascript">
    const popupButton = document.getElementById('popupButton');
const overlay = document.getElementById('overlay');
const popup = document.getElementById('popup');
const closeButton = document.getElementById('closeButton');

function doesUrlContainSubstring(substring) {
  var url = window.location.href;
  if (url.indexOf(substring) !== -1) {
      return true;
  } else {
      return false;
  }
}

if (doesUrlContainSubstring('result')) {
  overlay.style.display = 'block';
}

closeButton.addEventListener('click', () => {
  overlay.style.display = 'none';
});
</script>