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
    <script type="text/javascript">
window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Rumo ao Futuro</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="icon" href="icon.png" type="image/gif" sizes="16x16">
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
                        <img src="LOGO.png" width="300">
                    </a>
                    </div>
                    <ul class="nav">
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
          <span class="breadcrumb">Cursos / Recomendados</span>
          <h3>Cursos</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="section properties">
    <div class="container">
          <h4>Nesta página estão presentes os cursos que achamos mais relevantes nas universidades mais populares, cada curso tem a respetiva média de entrada e universidade. Os cursos estão organizados pelos resultados do <a href="quizz.php"> quiz</a>, se quiseres ver todos os cursos existentes <a href="https://www.dges.gov.pt/guias/indest.asp" target="_blank">clica aqui</a></h4><br><br>      
          <ul class="properties-filter" id="filter-options">
        <li>
          <a class="is_active" href="" data-filter="*">Mostrar todos</a>
        </li>
        <li>
          <a href="#adv" data-filter=".adv" id="real">Realista</a>
        </li>
        <li>
          <a href="#inv" data-filter=".str" id="inv">Investigação</a>
        </li>
        <li>
          <a href="#art" data-filter=".rac" id="art">Artístico</a>
        </li>
        <li>
          <a href="#soc" data-filter=".soc" id="soc">Social</a>
        </li>
        <li>
          <a href="#ent" data-filter=".ent" id="ent">Enterprising</a>
        </li>
        <li>
          <a href="#con" data-filter=".con" id="con">Convencional</a>
        </li>
      </ul>
<script>
  var linkId = "<?php echo $_SESSION['id']; ?>";
    window.onload = function() {
        var link = document.getElementById(linkId);
        link.click();
    };
</script>
      <div id="gallery">
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
        var s = <?php echo $_SESSION['media']; ?>;

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
            <span id="textToHighlight1"><h4>Engenharia Física e Tecnológica</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight1');
        if (s >= 18.8) {
            textElement.classList.add('gr');
        }
        else if (s < 18.8) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight2"><h4>Arquitetura</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight2');
        if (s >= 17.7) {
            textElement.classList.add('gr');
        }
        else if (s < 17.7) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight3"><h4>Engenharia e Gestão Industrial</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight3');
        if (s >= 18.7) {
            textElement.classList.add('gr');
        }
        else if (s < 18.7) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight4"><h4>Gestão</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight4');
        if (s >= 18.1) {
            textElement.classList.add('gr');
        }
        else if (s < 18.1) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight5"><h4>Psicologia</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight5');
        if (s >= 17.9) {
            textElement.classList.add('gr');
        }
        else if (s < 17.9) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight6"><h4>Desenho</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight6');
        if (s >= 17.6) {
            textElement.classList.add('gr');
        }
        else if (s < 17.6) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight7"><h4>Engenharia Mecânica</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight7');
        if (s >= 17.8) {
            textElement.classList.add('gr');
        }
        else if (s < 17.8) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight8"><h4>Engenharia de Materias</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight8');
        if (s >= 15) {
            textElement.classList.add('gr');
        }
        else if (s < 15) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
    <script>
    var numLoads = parseInt(getCookie('pageLoads'), 10);

if (isNaN(numLoads) || numLoads <= 0) { setCookie('pageLoads', 1); }
else { setCookie('pageLoads', numLoads + 1); }

console.log(getCookie('pageLoads'));
 if(numLoads % 2 == 0) {
}
 else {
    reloadPage();
    setCookie('pageLoads', numLoads + 1);
}
</script>
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
            <span id="textToHighlight9"><h4>Engenharia de Polímeros</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight9');
        if (s >= 13.4) {
            textElement.classList.add('gr');
        }
        else if (s < 13.4) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
            <div class="main-button">
              <a href="https://www.eng.uminho.pt/pt/estudar/_layouts/15/uminho.portaisuoei.ui/pages/catalogocursodetail.aspx?itemid=4372&catid=13">Mais informação</a>
            </div>
          </div>
        </div>         <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 ent">
          <div class="item">
            <a href="property-details.html"><img src="cursosimg/Gestão de Marketing.png" alt=""></a>
            <span class="category">IU. Lisboa</span>
            <h6>16.7</h6>
            <span id="textToHighlight10"><h4>Gestão de Marketing</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight10');
        if (s >= 16.7) {
            textElement.classList.add('gr');
        }
        else if (s < 16.7) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight11"><h4>Design de Equipamento</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight11');
        if (s >= 16) {
            textElement.classList.add('gr');
        }
        else if (s < 16) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight12"><h4>Engenharia do Ambiente</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight12');
        if (s >= 14.9) {
            textElement.classList.add('gr');
        }
        else if (s < 14.9) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight13"><h4>Educação e Formação</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight13');
        if (s >= 13.8) {
            textElement.classList.add('gr');
        }
        else if (s < 13.8) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight14"><h4>Administração Pública</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight14');
        if (s >= 16) {
            textElement.classList.add('gr');
        }
        else if (s < 16) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight15"><h4>Direito</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight15');
        if (s >= 17.6) {
            textElement.classList.add('gr');
        }
        else if (s < 17.6) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight16"><h4>Biologia</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight16');
        if (s >= 16.7) {
            textElement.classList.add('gr');
        }
        else if (s < 16.7) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight17"><h4>Física</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight17');
        if (s >= 17) {
            textElement.classList.add('gr');
        }
        else if (s < 17) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight18"><h4>Química</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight18');
        if (s >= 12.8) {
            textElement.classList.add('gr');
        }
        else if (s < 12.8) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight19"><h4>Geologia</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight19');
        if (s >= 14.4) {
            textElement.classList.add('gr');
        }
        else if (s < 14.4) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight20"><h4>Medicina</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight20');
        if (s >= 18.6) {
            textElement.classList.add('gr');
        }
        else if (s < 18.6) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHiglight21"><h4>Design de Comunicação</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHiglight21');
        if (s >= 17.1) {
            textElement.classList.add('gr');
        }
        else if (s < 17.1) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight22"><h4>Arte Multimédia</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight22');
        if (s >= 17.1) {
            textElement.classList.add('gr');
        }
        else if (s < 17.1) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight23"><h4>Engenharia Têxtil</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight23');
        if (s >= 11.7) {
            textElement.classList.add('gr');
        }
        else if (s < 11.7) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight24"><h4>Contabilidade</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight24');
        if (s >= 16.8) {
            textElement.classList.add('gr');
        }
        else if (s < 16.8) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight25"><h4>Engenharia Naval e Oceânica</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight25');
        if (s >= 16.6) {
            textElement.classList.add('gr');
        }
        else if (s < 16.6) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight26"><h4>Engenharia Civil</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight26');
        if (s >= 15.2) {
            textElement.classList.add('gr');
        }
        else if (s < 15.2) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighligh27"><h4>Ciências da Arte e do Património</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighligh27');
        if (s >= 15.4) {
            textElement.classList.add('gr');
        }
        else if (s < 15.4) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight28"><h4>Economia</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight28');
        if (s >= 17.4) {
            textElement.classList.add('gr');
        }
        else if (s < 17.4) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight29"><h4>Matemática</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight29');
        if (s >= 16) {
            textElement.classList.add('gr');
        }
        else if (s < 16) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight30"><h4>Engenharia Biomédica</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight30');
        if (s >= 17.8) {
            textElement.classList.add('gr');
        }
        else if (s < 17.8) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight31"><h4>Engenharia e Gestão de Sistemas de Informação</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight31');
        if (s >= 14.2) {
            textElement.classList.add('gr');
        }
        else if (s < 14.2) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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
            <span id="textToHighlight32"><h4>Sociologia</h4></span>
            <script>
        var s = <?php echo $_SESSION['media']; ?>;

        var textElement = document.getElementById('textToHighlight32');
        if (s >= 15.1) {
            textElement.classList.add('gr');
        }
        else if (s < 15.1) {
            textElement.classList.add('re');
        }
         else {

        }
    </script>
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