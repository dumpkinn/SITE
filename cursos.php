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
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <style>
      .gr{
        color: green;
      }
      .re{
        color: red;
      }
    </style>
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
            <span <?php if ($_SESSION['media']>=18.1) {echo class="gr";} if ($_SESSION['media']<18.1) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia Informática</a></h4></span>
            <div class="main-button">
              <a href="https://tecnico.ulisboa.pt/pt/ensino/cursos/licenciaturas/engenharia-informatica-e-de-computadores/">Mais informação</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia Física e Tecnologica.png" alt=""></a>
            <span class="category">IS. Técnico</span>
            <h6>18.8</h6>
            <span <?php if ($_SESSION['media']>=18.8) {echo class="gr";} if ($_SESSION['media']<18.8) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia Física e Tecnologica</a></h4></span>
            <div class="main-button">
              <a href="https://tecnico.ulisboa.pt/pt/ensino/cursos/licenciaturas/engenharia-fisica-tecnologica/">Mais informação</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Arquitetura.png" alt=""></a>
            <span class="category">U. Minho</span>
            <h6>17.7</h6>
            <span <?php if ($_SESSION['media']>=17.7) {echo class="gr";} if ($_SESSION['media']<17.7) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Arquitetura</a></h4></span>
            <div class="main-button">
              <a href="https://www.eaad.uminho.pt/pt/Ensino/Licenciaturas_e_Mestrados_Integrados/Mestrado-Integrado-em-Arquitetura/Paginas/default.aspx">Mais informação</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 con">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia e Gestão Industrial.png" alt=""></a>
            <span class="category">U. Porto</span>
            <h6>18.7</h6>
            <span <?php if ($_SESSION['media']>=18.7) {echo class="gr";} if ($_SESSION['media']<18.7) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia e Gestão Industrial</a></h4></span>
            <div class="main-button">
              <a href="https://fe.up.pt/estudar/cursos/licenciatura-engenharia-gestao-industrial/">Mais informação</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 ent">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Gestão.png" alt=""></a>
            <span class="category">U. Porto</span>
            <h6>18.1</h6>
            <span <?php if ($_SESSION['media']>=18.1) {echo class="gr";} if ($_SESSION['media']<18.1) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Gestão</a></h4></span>
            <div class="main-button">
              <a href="https://sigarra.up.pt/fep/pt/cur_geral.cur_view?pv_curso_id=1046">Mais informação</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 soc">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Psicologia.png" alt=""></a>
            <span class="category">U. Porto</span>
            <h6>17.9</h6>
            <span <?php if ($_SESSION['media']>=17.9) {echo class="gr";} if ($_SESSION['media']<17.9) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Psicologia</a></h4></span>
            <div class="main-button">
              <a href="https://sigarra.up.pt/fpceup/pt/cur_geral.cur_view?pv_curso_id=22381">Mais informação</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Desenho.png" alt=""></a>
            <span class="category">U. Lisboa</span>
            <h6>17.6</h6>
            <span <?php if ($_SESSION['media']>=17.6) {echo class="gr";} if ($_SESSION['media']<17.6) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Desenho</a></h4></span>
            <div class="main-button">
              <a href="https://www.ulisboa.pt/curso/licenciatura/desenho">Mais informação</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia Mecânica.png" alt=""></a>
            <span class="category">U. Porto</span>
            <h6>17.8</h6>
            <span <?php if ($_SESSION['media']>=17.8) {echo class="gr";} if ($_SESSION['media']<17.8) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia Mecânica</a></h4></span>
            <div class="main-button">
              <a href="https://sigarra.up.pt/feup/pt/cur_geral.cur_view?pv_curso_id=22882">Mais informação</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia de materias.png" alt=""></a>
            <span class="category">U. Porto</span>
            <h6>15.0</h6>
            <span <?php if ($_SESSION['media']>=15) {echo class="gr";} if ($_SESSION['media']<15) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia de Materias</a></h4></span>
            <div class="main-button">
              <a href="https://sigarra.up.pt/feup/pt/cur_geral.cur_view?pv_curso_id=22902">Mais informação</a>
            </div>
          </div>
        </div>
       <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 con">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia de Polímeros.png" alt=""></a>
            <span class="category">U. Minho</span>
            <h6>13.4</h6>
            <span <?php if ($_SESSION['media']>=13.4) {echo class="gr";} if ($_SESSION['media']<13.4) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia de Polímeros</a></h4></span>
            <div class="main-button">
              <a href="https://www.eng.uminho.pt/pt/estudar/_layouts/15/uminho.portaisuoei.ui/pages/catalogocursodetail.aspx?itemid=4372&catid=13">Mais informação</a>
            </div>
          </div>
        </div>         <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 ent">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Gestão de Marketing.png" alt=""></a>
            <span class="category">IU. Lisboa</span>
            <h6>16.7</h6>
            <span <?php if ($_SESSION['media']>=16.7) {echo class="gr";} if ($_SESSION['media']<16.7) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Gestão de Marketing</a></h4></span>
            <div class="main-button">
              <a href="https://www.iscte-iul.pt/curso/59/licenciatura-gestao-de-marketing">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Design de Equipamento.png" alt=""></a>
            <span class="category">U. Lisboa</span>
            <h6>16.0</h6>
            <span <?php if ($_SESSION['media']>=16) {echo class="gr";} if ($_SESSION['media']<16) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Design de Equipamento</a></h4></span>
            <div class="main-button">
              <a href="https://www.ulisboa.pt/curso/licenciatura/design-de-equipamento">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia do Ambiente.png" alt=""></a>
            <span class="category">IS. Técnico</span>
            <h6>14.9</h6>
            <span <?php if ($_SESSION['media']>=14.9) {echo class="gr";} if ($_SESSION['media']<14.9) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia do Ambiente</a></h4></span>
            <div class="main-button">
              <a href="https://tecnico.ulisboa.pt/pt/ensino/cursos/licenciaturas/engenharia-do-ambiente/">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 soc">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Educação e Formação.png" alt=""></a>
            <span class="category">U. Lisboa</span>
            <h6>13.8</h6>
            <span <?php if ($_SESSION['media']>=13.8) {echo class="gr";} if ($_SESSION['media']<13.8) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Educação e Formação</a></h4></span>
            <div class="main-button">
              <a href="https://www.ulisboa.pt/curso/licenciatura/educacao-e-formacao">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 soc">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Administração Pública.png" alt=""></a>
            <span class="category">U. Minho</span>
            <h6>16.0</h6>
            <span <?php if ($_SESSION['media']>=16) {echo class="gr";} if ($_SESSION['media']<16) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Administração Pública</a></h4></span>
            <div class="main-button">
              <a href="https://www.eeg.uminho.pt/pt/estudar/Licenciaturas/Paginas/administracao-publica.aspx">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 soc">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Direito.png" alt=""></a>
            <span class="category">U. NOVA Lisboa</span>
            <h6>17.6</h6>
            <span <?php if ($_SESSION['media']>=17.6) {echo class="gr";} if ($_SESSION['media']<17.6) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Direita</a></h4></span>
            <div class="main-button">
              <a href="https://novalaw.unl.pt/licenciatura/">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Biologia.png" alt=""></a>
            <span class="category">U. Lisboa</span>
            <h6>16.7</h6>
            <span <?php if ($_SESSION['media']>=16.7) {echo class="gr";} if ($_SESSION['media']<16.7) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Biologia</a></h4></span>
            <div class="main-button">
              <a href="https://www.ulisboa.pt/curso/licenciatura/biologia">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Física.png" alt=""></a>
            <span class="category">U. Lisboa</span>
            <h6>17.0</h6>
            <span <?php if ($_SESSION['media']>=17) {echo class="gr";} if ($_SESSION['media']<17) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Física</a></h4></span>
            <div class="main-button">
              <a href="https://www.ulisboa.pt/curso/licenciatura/fisica">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Química.png" alt=""></a>
            <span class="category">U. Minho</span>
            <h6>12.8</h6>
            <span <?php if ($_SESSION['media']>=12.8) {echo class="gr";} if ($_SESSION['media']<12.8) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Química</a></h4></span>
            <div class="main-button">
              <a href="https://www.ecum.uminho.pt/pt/Ensino/Paginas/licenciaturas/Licenciatura-em-Quimica.aspx">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Geologia.png" alt=""></a>
            <span class="category">U. Lisboa</span>
            <h6>14.4</h6>
            <span <?php if ($_SESSION['media']>=14.4) {echo class="gr";} if ($_SESSION['media']<14.4) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Geologia</a></h4></span>
            <div class="main-button">
              <a href="https://www.ulisboa.pt/curso/licenciatura/geologia">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Medicina.png" alt=""></a>
            <span class="category">U. Minho</span>
            <h6> 18.6</h6>
            <span <?php if ($_SESSION['media']>=18.6) {echo class="gr";} if ($_SESSION['media']<18.6) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Medicina</a></h4></span>
            <div class="main-button">
              <a href="https://www.med.uminho.pt/pt/Medicina">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Design de Cominicação.png" alt=""></a>
            <span class="category">U. Porto</span>
            <h6>17.1</h6>
            <span <?php if ($_SESSION['media']>=17.1) {echo class="gr";} if ($_SESSION['media']<17.1) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Design de Comunicação</a></h4></span>
            <div class="main-button">
              <a href="https://sigarra.up.pt/fbaup/pt/cur_geral.cur_view?pv_curso_id=1314">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Arte Multimédia.png" alt=""></a>
            <span class="category">U. Lisboa</span>
            <h6>17.1</h6>
            <span <?php if ($_SESSION['media']>=17.1) {echo class="gr";} if ($_SESSION['media']<17.1) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Arte Multimédia</a></h4></span>
            <div class="main-button">
              <a href="https://www.ulisboa.pt/curso/licenciatura/arte-multimedia">Mais informação</a>
            </div>
          </div>
        </div>
             <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 con">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia Têxtil.png" alt=""></a>
            <span class="category">U. Minho</span>
            <h6>11.7</h6>
            <span <?php if ($_SESSION['media']>=11.7) {echo class="gr";} if ($_SESSION['media']<11.7) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia Têxtil</a></h4></span>
            <div class="main-button">
              <a href="https://www.eng.uminho.pt/pt/estudar/_layouts/15/uminho.portaisuoei.ui/pages/catalogocursodetail.aspx?itemid=3554&catid=10">Mais informação</a>
            </div>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 ent">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Contabilidade.png" alt=""></a>
            <span class="category">U. Minho</span>
            <h6>16.8</h6>
            <span <?php if ($_SESSION['media']>=16.8) {echo class="gr";} if ($_SESSION['media']<16.8) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Contablilidade</a></h4></span>
            <div class="main-button">
              <a href="https://www.eeg.uminho.pt/pt/estudar/Licenciaturas/Paginas/contabilidade.aspx">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia Naval e Oceânica.png" alt=""></a>
            <span class="category">IS. Técnico</span>
            <h6>16.6</h6>
            <span <?php if ($_SESSION['media']>=16.6) {echo class="gr";} if ($_SESSION['media']<16.6) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia Naval e Oceânica</a></h4></span>
            <div class="main-button">
              <a href="https://tecnico.ulisboa.pt/pt/ensino/cursos/licenciaturas/engenharia-naval-e-oceanica/">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia Civil.png" alt=""></a>
            <span class="category">U. Beira Interior</span>
            <h6>15.2</h6>
            <span <?php if ($_SESSION['media']>=15.2) {echo class="gr";} if ($_SESSION['media']<15.2) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia Civil</a></h4></span>
            <div class="main-button">
              <a href="https://www.ubi.pt/curso/9">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Ciências da Arte e do Património.png" alt=""></a>
            <span class="category">U. Lisboa</span>
            <h6>15.4</h6>
            <span <?php if ($_SESSION['media']>=15.4) {echo class="gr";} if ($_SESSION['media']<15.4) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Ciências da Arte e Património</a></h4></span>
            <div class="main-button">
              <a href="https://www.ulisboa.pt/curso/licenciatura/ciencias-da-arte-e-do-patrimonio">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 ent">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Economia.png" alt=""></a>
            <span class="category">U. Porto</span>
            <h6>17.4</h6>
            <span <?php if ($_SESSION['media']>=17.4) {echo class="gr";} if ($_SESSION['media']<17.4) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Economia</a></h4></span>
            <div class="main-button">
              <a href="https://cursos.fep.up.pt/licenciaturas/economia-licenciaturas/">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Matemática.png" alt=""></a>
            <span class="category">U. Lisboa</span>
            <h6>16.0</h6>
            <span <?php if ($_SESSION['media']>=16) {echo class="gr";} if ($_SESSION['media']<16) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Matemática</a></h4></span>
            <div class="main-button">
              <a href="https://www.ulisboa.pt/curso/licenciatura/matematica">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia Biomédica.png" alt=""></a>
            <span class="category">IS. Técnico</span>
            <h6> 17.8</h6>
            <span <?php if ($_SESSION['media']>=17.8) {echo class="gr";} if ($_SESSION['media']<17.8) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia Biomédica</a></h4></span>
            <div class="main-button">
              <a href="https://tecnico.ulisboa.pt/pt/ensino/cursos/licenciaturas/engenharia-biomedica/">Mais informação</a>
            </div>
          </div>
        </div>
             <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 con">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Engenharia e Gestão de Sistemas de Informação.png" alt=""></a>
            <span class="category">U. Minho</span>
            <h6> 14.2</h6>
            <span <?php if ($_SESSION['media']>=14.2) {echo class="gr";} if ($_SESSION['media']<14.2) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Engenharia e Gestão de Sistemas de Informação</a></h4></span>
            <div class="main-button">
              <a href="https://www.uminho.pt/pt/ensino/oferta-educativa/cursos-conferentes-a-grau/_layouts/15/uminho.portalum.ui/pages/catalogocursodetail.aspx?itemid=4078&catid=12">Mais informação</a>
            </div>
          </div>
        </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 soc">
            <div class="item">
            <a href="property-details.html"><img src="cursosimg/Sociologia.png" alt=""></a>
            <span class="category">U. NOVA Lisboa</span>
            <h6>15.1</h6>
            <span <?php if ($_SESSION['media']>=15.1) {echo class="gr";} if ($_SESSION['media']<15.1) {echo class="re";} else {echo class="";} ?>><h4><a href="property-details.html">Sociologia</a></h4></span>
            <div class="main-button">
              <a href="https://www.fcsh.unl.pt/cursos/licenciatura_em_sociologia/">Mais informação</a>
            </div>
          </div>
        </div>
        </div>
      </div>
     </div>
   </div>
</div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  <footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © Code crusaders, Ltd. All rights reserved. 
      </div>
    </div>
  </footer>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>